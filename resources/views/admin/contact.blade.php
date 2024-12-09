@extends('layouts.admin')

@section('page-title', 'Contact - MyCraft')

@section('content')
<div class="container">
    <div class="row">
        <!-- Card: Contact Information -->
        @foreach($contacts as $index => $contact)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Pesan #{{ $index + 1 }}</h5>
                </div>
                <div class="card-body">
                    <p><strong>Nama:</strong> {{ $contact->name }}</p>
                    <p><strong>Email:</strong> {{ $contact->email }}</p>
                    <p><strong>Pesan:</strong></p>
                    <p>{{ $contact->message }}</p>
                </div>
                <div class="card-footer text-right">
                    <form action="{{ route('admin.contact.destroy', $contact->id) }}" method="POST" class="delete-form">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger btn-sm delete-btn">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    // Menampilkan SweetAlert2 jika ada pesan sukses
    @if(session('success'))
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: true
        });
    @endif

    // Konfirmasi penghapusan menggunakan SweetAlert2
    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener('click', function(event) {
            const form = event.target.closest('form');
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda tidak dapat mengembalikan pesan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // Submit form jika user mengkonfirmasi
                }
            });
        });
    });
</script>

@endsection
