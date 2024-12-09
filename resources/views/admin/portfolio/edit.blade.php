@extends('layouts.admin')

@section('page-title', 'Edit Proyek - MyCraft')

@section('content')
    <div class="container">
        <form action="{{ route('admin.portfolio.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card shadow-sm p-4">
                <div class="form-group mb-3">
                    <label for="title" class="font-weight-bold">Judul Proyek</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $project->title) }}" required placeholder="Masukkan judul proyek">
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="font-weight-bold">Deskripsi Proyek</label>
                    <textarea name="description" id="description" class="form-control" required placeholder="Masukkan deskripsi proyek">{{ old('description', $project->description) }}</textarea>
                </div>
                <div class="form-group mb-3">
                    <label for="image" class="font-weight-bold">Gambar Proyek (Opsional)</label>
                    <div id="image-preview" class="mt-2" style="width: 200px; height: 200px; border: 1px solid #ccc; border-radius: 5px; overflow: hidden; display: flex; justify-content: center; align-items: center; position: relative;">
                        <input type="file" name="image" id="image" class="form-control" onchange="previewImage(event)" style="opacity: 0; position: absolute; width: 200px; height: 200px;">
                        
                        @if ($project->image)
                            <img id="image-display" src="{{ asset('storage/' . $project->image) }}" alt="Gambar Proyek" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                        @else
                            <img id="image-display" src="" alt="Preview" style="width: 100%; height: 100%; object-fit: cover; display: none;">
                        @endif
                    </div>
                    <small class="form-text text-black">Pilih gambar baru jika ingin mengganti gambar proyek. Maksimal ukuran gambar 2MB.</small>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-warning btn-lg shadow-sm rounded-pill px-4 py-2">Perbarui Proyek</button>
                </div>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            var output = document.getElementById('image-display');
            var icon = document.getElementById('image-icon');
            var file = event.target.files[0];

            // Validasi ukuran gambar
            if (file.size > 2 * 1024 * 1024) { // 2MB
                alert("Ukuran gambar terlalu besar. Maksimal 2MB.");
                event.target.value = ''; // Reset input file
                output.style.display = 'none'; // Sembunyikan preview
                icon.style.display = 'block'; // Tampilkan ikon +
                return;
            }

            if (file) {
                var reader = new FileReader();
                reader.onload = function() {
                    output.src = reader.result;
                    output.style.display = 'block'; // Menampilkan gambar setelah diupload
                    icon.style.display = 'none'; // Sembunyikan ikon + setelah gambar muncul
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
