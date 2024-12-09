<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminDashboardController extends Controller
{
    // Menampilkan halaman dashboard dengan data proyek dan kontak
    public function index()
    {
        // Mengambil seluruh proyek untuk menghitung total
        $projects = Project::all();
        // Mengambil seluruh kontak untuk menghitung total
        $contacts = Contact::all();

        // Mengambil proyek terbaru berdasarkan ID
        $latestProject = Project::latest('id')->first();  // Mengambil proyek terbaru berdasarkan ID

        // Mengambil kontak terbaru berdasarkan ID
        $latestContact = Contact::latest('id')->first();  // Mengambil pesan kontak terbaru berdasarkan ID

        return view('admin.dashboard', compact('projects', 'contacts', 'latestProject', 'latestContact'));
    }
}
