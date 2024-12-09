@extends('layouts.admin') <!-- Menggunakan layout utama -->

@section('page-title', 'Pengaturan') <!-- Judul halaman -->

@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- Card Pengaturan Profil -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengaturan Profil</h5>
                    <p class="card-text">Atur informasi profil akun Anda di sini.</p>
                    <a href="{{ url('settings.profile') }}" class="btn btn-primary">Edit Profil</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <!-- Card Pengaturan Keamanan -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengaturan Keamanan</h5>
                    <p class="card-text">Ubah kata sandi dan pengaturan keamanan akun Anda.</p>
                    <a href="{{ url('settings.security') }}" class="btn btn-primary">Edit Keamanan</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <!-- Card Pengaturan Aplikasi -->
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Pengaturan Aplikasi</h5>
                    <p class="card-text">Konfigurasi pengaturan aplikasi dan preferensi sistem.</p>
                    <a href="{{ url('settings.app') }}" class="btn btn-primary">Konfigurasi Aplikasi</a>
                </div>
            </div>
        </div>
    </div>
@endsection
