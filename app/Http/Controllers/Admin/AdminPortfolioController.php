<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminPortfolioController extends Controller
{
    // Menampilkan daftar semua proyek
    public function index()
    {
        // Ambil semua data proyek dari database
        $projects = Project::all();
        return view('admin.portfolio.index', compact('projects'));
    }

    // Menampilkan form untuk menambah proyek baru
    public function create()
    {
        return view('admin.portfolio.create');
    }

    // Menyimpan proyek baru ke database
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan file gambar ke storage
        $imagePath = $request->file('image')->store('portfolio_images', 'public');

        // Menyimpan data proyek ke database
        Project::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
        ]);

        // Redirect ke halaman portfolio dengan pesan sukses
        return redirect()->route('admin.portfolio.index')->with('success', 'Proyek berhasil ditambahkan!');
    }

    // Menampilkan detail proyek berdasarkan ID
    public function show($id)
    {
        $project = Project::findOrFail($id); // Menemukan proyek berdasarkan ID
        return view('admin.portfolio.show', compact('project'));
    }

    // Menampilkan form untuk mengedit proyek
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.portfolio.edit', compact('project'));
    }

    // Menyimpan perubahan proyek setelah di edit
    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        // Validasi input dari form
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Menyimpan perubahan data proyek
        $project->title = $request->title;
        $project->description = $request->description;

        if ($request->hasFile('image')) {
            // Menghapus gambar lama jika ada
            if ($project->image) {
                \Storage::delete('public/' . $project->image);
            }

            // Menyimpan gambar baru
            $imagePath = $request->file('image')->store('portfolio_images', 'public');
            $project->image = $imagePath;
        }

        $project->save();

        return redirect()->route('admin.portfolio.index')->with('success', 'Proyek berhasil diperbarui!');
    }

    // Menghapus proyek
    public function destroy($id)
    {
        $project = Project::findOrFail($id);

        // Menghapus gambar jika ada
        if ($project->image) {
            \Storage::delete('public/' . $project->image);
        }

        // Menghapus data proyek dari database
        $project->delete();

        return redirect()->route('admin.portfolio.index')->with('success', 'Proyek berhasil dihapus!');
    }
}
