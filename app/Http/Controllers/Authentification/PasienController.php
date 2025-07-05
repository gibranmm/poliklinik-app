<?php

namespace App\Http\Controllers\Authentification;

use App\Http\Controllers\Controller;
use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{
    // TODO : View
    public function registerForm()
    {
        return view('pasien.register-pasien');
    }

    public function loginForm()
    {
        return view('pasien.login-pasien');
    }

    public function dashboard()
    {
        $pasienId = session('pasien_id');
        // Total pendaftaran poli
        $totalDaftarPoli = \App\Models\DaftarPoli::where('id_pasien', $pasienId)->count();
        // Total pemeriksaan yang sudah dilakukan
        $totalPeriksa = \App\Models\Periksa::whereHas('daftarPoli', function($q) use ($pasienId) {
            $q->where('id_pasien', $pasienId);
        })->count();
        // Pendaftaran aktif (belum periksa)
        $totalDaftarAktif = \App\Models\DaftarPoli::where('id_pasien', $pasienId)
            ->whereDoesntHave('periksa')->count();
        return view('pasien.dashboard-pasien', compact('totalDaftarPoli', 'totalPeriksa', 'totalDaftarAktif'));
    }

    // TODO : Login Pasien
    public function loginPasien(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $pasien = Pasien::where('username', $request->username)->first();

        if (!$pasien || !\Hash::check($request->password, $pasien->password)) {
            return redirect()->route('pasien.loginForm')
                             ->withErrors(['username' => 'Username atau password tidak valid.']);
        }

        // Set session for pasien
        session(['pasien_id' => $pasien->id, 'pasien_nama' => $pasien->nama]);

        return redirect()->route('pasien.dashboard');
    }

    // TODO : Register Pasien
    // Generate No Rm
    private function generateNoRm()
    {
        $year = date('Y'); //  tahun sekarang
        $month = date('m'); //  bulan sekarang

        $prefix = $year . $month; // Format: YYYYMM

        // Mencari nomor RM terakhir dengan prefix yang sama
        $lastPasien = Pasien::where('no_rm', 'like', $prefix . '-%')
                        ->orderBy('no_rm', 'desc')
                        ->first();

        if ($lastPasien) {
            // Jika sudah ada, ambil nomor urut terakhir dan tambahkan 1
            $lastNumber = intval(substr($lastPasien->no_rm, -2));
            $newNumber = str_pad($lastNumber + 1, 2, '0', STR_PAD_LEFT);
        } else {
            // Jika belum ada, mulai dari 01
            $newNumber = '01';
        }

        return $prefix . '-' . $newNumber;
    }

       public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'username' => 'required|string|max:100|unique:pasien,username',
            'password' => 'required|string|min:6',
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'no_ktp' => 'required|numeric|unique:pasien,no_ktp',
            'no_hp' => 'required|numeric',
        ]);

        // Generate new no_rm
        $newNoRm = $this->generateNoRm();

        // Create new pasien
        Pasien::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_ktp' => $request->no_ktp,
            'no_hp' => $request->no_hp,
            'no_rm' => $newNoRm,
        ]);

        return redirect()->route('pasien.loginForm')->with('success', 'Pasien berhasil didaftarkan!');
    }

}
