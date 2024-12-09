@extends('layouts.admin')

@section('page-title', 'Portfolio Admin - MyCraft')

@section('content')
    <div class="container">
        <!-- Tombol untuk menambah proyek baru -->
        <div class="text-left mb-4">
            <a href="{{ url('admin/portfolio/create') }}" class="btn btn-success btn-lg shadow-lg rounded-pill px-4 py-2" style="font-size: 18px;">
                <i class="fa fa-plus-circle"></i> Tambah Proyek Baru
            </a>
        </div>

        <div class="row">
            <!-- Iterasi untuk menampilkan semua proyek -->
            @foreach($projects as $project)
                <div class="col-12 col-sm-6 col-md-4 mb-4">
                    <div class="card shadow-sm border-light rounded">
                        <!-- Menampilkan gambar proyek -->
                        <img src="{{ asset('storage/' . $project->image) }}" class="card-img-top rounded-top" alt="{{ $project->title }}" style="object-fit: cover; height: 200px;">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold text-dark">{{ $project->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($project->description, 100) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <a href="{{ url('admin/portfolio/' . $project->id . '/edit') }}" class="btn btn-warning btn-sm mx-1">Edit</a>
                                    <form action="{{ url('admin/portfolio/' . $project->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
