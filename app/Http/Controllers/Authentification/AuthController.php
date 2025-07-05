<?php

namespace App\Http\Controllers\Authentification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logoutAdmin()
    {
        session()->forget(['user_role']);
        return redirect()->route('home')->with('success', 'Anda telah logout sebagai admin.');
    }

    public function logoutDokter()
    {
        session()->forget(['dokter_id', 'dokter_nama']);
        return redirect()->route('home')->with('success', 'Anda telah logout sebagai dokter.');
    }

    public function logoutPasien()
    {
        session()->forget(['pasien_id', 'pasien_nama']);
        return redirect()->route('home')->with('success', 'Anda telah logout sebagai pasien.');
    }

    // Tampilkan form login admin
    public function loginAdminForm()
    {
        return view('admin.login-admin');
    }

    // Proses login admin
    public function loginAdmin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Contoh kredensial admin statis, bisa diganti dengan database
        $adminUsername = 'admin';
        $adminPassword = 'admin123';

        if ($request->username === $adminUsername && $request->password === $adminPassword) {
            session(['user_role' => 'admin']);
            return redirect()->route('admin.dashboard')->with('success', 'Login admin berhasil!');
        } else {
            return back()->withErrors(['username' => 'Username atau password salah'])->withInput();
        }
    }
}
