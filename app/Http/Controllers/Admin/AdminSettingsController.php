<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminSettingsController extends Controller
{
    // Menampilkan halaman pengaturan utama
    public function index()
    {
        return view('admin.settings.index');
    }

    // Menampilkan halaman pengaturan profil
    public function profile()
    {
        // Di sini kamu bisa menambahkan logika untuk mengambil data profil pengguna
        return view('settings.profile');
    }

    // Menampilkan halaman pengaturan keamanan
    public function security()
    {
        // Di sini kamu bisa menambahkan logika untuk menangani pengaturan keamanan
        return view('settings.security');
    }

    // Menampilkan halaman pengaturan aplikasi
    public function app()
    {
        // Di sini kamu bisa menambahkan logika untuk menangani pengaturan aplikasi
        return view('settings.app');
    }
}
