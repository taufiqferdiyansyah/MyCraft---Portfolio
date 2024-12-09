<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    // Menampilkan halaman kontak
    public function index()
    {
        $contacts = Contact::all();
        return view('admin.contact', compact('contacts'));
    }

    // Menangani penghapusan kontak
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        // Mengarahkan kembali ke halaman kontak setelah penghapusan dengan pesan sukses
        return redirect()->route('admin.contact.index')->with('success', 'Pesan telah dihapus.');
    }
}
