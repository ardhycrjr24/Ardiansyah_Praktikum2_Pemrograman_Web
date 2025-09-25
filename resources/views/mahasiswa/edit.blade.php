@extends('layout')

@section('content')
<div class="container py-5">
    <div class="card shadow border-0 rounded-4">
    <div class="card-body p-4">
    <h2>Edit Mahasiswa</h2>
    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>NIM</label>
            <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control" required>
                <option value="Laki-laki" {{ $mahasiswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-Laki</option>
                <option value="Perempuan" {{ $mahasiswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Prodi</label>
            <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tahun Angkatan</label>
            <input type="number" name="tahun_angkatan" value="{{ $mahasiswa->tahun_angkatan }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $mahasiswa->tanggal_lahir }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
