@extends('layout')

@section('title', 'Data Dosen')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="mb-0">Daftar Dosen</h2>
        <a href="{{ route('dosen.create') }}" class="btn btn-primary">➕ Tambah Dosen</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIDN</th>
                <th>Jabatan</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dosens as $dosen)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dosen->nama }}</td>
                <td>{{ $dosen->nidn }}</td>
                <td>{{ $dosen->jabatan }}</td>
                <td>{{ $dosen->email }}</td>
                <td>{{ $dosen->telepon }}</td>
                <td>
                    <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus dosen ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="7" class="text-center">Belum ada data dosen</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
