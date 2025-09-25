@extends('layout')

@section('title', 'Edit Mata Kuliah')

@section('content')
<div class="container py-5">
    <div class="card shadow border-0 rounded-4">
        <div class="card-body p-4">
            <h2 class="mb-4">Edit Mata Kuliah</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('matakuliah.update', $matakuliah->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="kode_mk" class="form-label">Kode Mata Kuliah</label>
                    <input type="text" name="kode_mk" id="kode_mk" class="form-control" 
                           value="{{ old('kode_mk', $matakuliah->kode_mk) }}" required>
                </div>

                <div class="mb-3">
                    <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                    <input type="text" name="nama_mk" id="nama_mk" class="form-control" 
                           value="{{ old('nama_mk', $matakuliah->nama_mk) }}" required>
                </div>

                <div class="mb-3">
                    <label for="sks" class="form-label">Jumlah SKS</label>
                    <input type="number" name="sks" id="sks" class="form-control" 
                           value="{{ old('sks', $matakuliah->sks) }}" required>
                </div>

                <div class="mb-3">
                    <label for="semester" class="form-label">Semester</label>
                    <input type="number" name="semester" id="semester" class="form-control" 
                           value="{{ old('semester', $matakuliah->semester) }}" required>
                </div>

                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                <a href="{{ route('matakuliah.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection
