<?php

namespace App\Http\Controllers\Authentification;

use App\Http\Controllers\Controller;
use App\Models\Dokter;
use Illuminate\Http\Request;

class DokterController extends Controller
{
    // TODO : View
    public function loginForm()
    {
        return view('dokter.login-dokter');
    }

    public function dashboard()
    {
        $dokterId = session('dokter_id');
        // Jumlah jadwal praktek dokter
        $totalJadwal = \App\Models\JadwalPeriksa::where('id_dokter', $dokterId)->count();
        // Jumlah pasien hari ini (daftar poli yang jadwalnya hari ini dan sudah periksa)
        $today = now()->toDateString();
        $totalPasienHariIni = \App\Models\Periksa::whereHas('daftarPoli.jadwalPeriksa', function($q) use ($dokterId, $today) {
            $q->where('id_dokter', $dokterId)
              ->where('hari', now()->locale('id')->dayName);
        })->whereDate('tgl_periksa', $today)->count();
        
        return view('dokter.dashboard-dokter', compact('totalJadwal', 'totalPasienHariIni'));
    }

    // TODO : Login Login Dokter & Check Admin
    public function loginDokter(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $dokter = Dokter::where('username', $request->username)->first();

        if (!$dokter || !\Hash::check($request->password, $dokter->password)) {
            return redirect()->route('dokter.loginForm')
                             ->withErrors(['username' => 'Username atau password tidak valid.']);
        }

        // Set session for dokter
        session(['dokter_id' => $dokter->id, 'dokter_nama' => $dokter->nama]);
        return redirect()->route('dokter.dashboard');
    }


}
