@extends('layout')

@section('title', 'Edit Dosen')

@section('content')
<div class="container py-5">
    <div class="card shadow border-0 rounded-4">
    <div class="card-body p-4">
    <h2 class="mb-4">Edit Data Dosen</h2>

    <form action="{{ route('dosen.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ old('nama', $dosen->nama) }}" required>
        </div>
        <div class="mb-3">
            <label>NIDN</label>
            <input type="text" name="nidn" class="form-control" value="{{ old('nidn', $dosen->nidn) }}" required>
        </div>
        <div class="mb-3">
            <label>Jabatan</label>
            <input type="text" name="jabatan" class="form-control" value="{{ old('jabatan', $dosen->jabatan) }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ old('email', $dosen->email) }}" required>
        </div>
        <div class="mb-3">
            <label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="{{ old('telepon', $dosen->telepon) }}" required>
        </div>

       <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
