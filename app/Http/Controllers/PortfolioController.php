<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Contact;

class PortfolioController extends Controller
{
    public function index()
    {
        // Ambil semua data proyek dari database
        $projects = Project::all();
        return view('portfolio', compact('projects'));
    }

    public function submitContactForm(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Simpan data kontak ke dalam database
        Contact::create($validated);

        // Redirect kembali ke halaman portfolio dan mengarahkan ke bagian hero
        return redirect()->to(url('/#hero'))->with('success', 'Pesan Anda telah terkirim!');
    }
}
