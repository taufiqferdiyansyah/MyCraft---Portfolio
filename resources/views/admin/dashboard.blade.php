@extends('layouts.admin')

@section('page-title', 'Dashboard Admin - MyCraft')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Card 1: Portfolio Stats -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Portfolio</h5>
                    <p class="card-text">Total Projects: {{ $projects->count() }}</p>
                    <a href="{{ url('admin/portfolio') }}" class="btn btn-primary">View Portfolio</a>
                </div>
            </div>
        </div>

        <!-- Card 2: Contact Messages -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Messages</h5>
                    <p class="card-text">New Messages: {{ $contacts->count() }}</p>
                    <a href="{{ url('admin/contact') }}" class="btn btn-primary">View Messages</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities Section -->
    <div class="card mb-4">
        <div class="card-header">
            <h5 class="card-title">Recent Activities</h5>
        </div>
        <div class="card-body">
            <ul class="list-group">
                @if($latestProject)
                    <li class="list-group-item">
                        Updated Project: "{{ $latestProject->title }}" <!-- Tampilkan proyek terbaru berdasarkan ID -->
                    </li>
                @endif
                @if($latestContact)
                    <li class="list-group-item">
                        New Contact Message from: "{{ $latestContact->name }}" - "{{ $latestContact->message }}" <!-- Tampilkan pesan kontak terbaru berdasarkan ID -->
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
@endsection
