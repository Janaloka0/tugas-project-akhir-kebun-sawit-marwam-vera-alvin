@extends('layout')

@section('title', 'Daftar Petugas')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('petugas.create') }}" class="btn btn-primary">Tambah Petugas</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <!-- <th>#</th> -->
            <th>pengguna id</th>
            <th>nama petugas</th>
            <th>jabatan</th>
            <th>tanggal bergabung</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($petugas as $index => $user)
            <tr>
                <!-- <td>{{ $index + 1 }}</td> -->
                <td>{{ $user->pengguna_id }}</td>
                <td>{{ $user->nama_petugas }}</td>
                <td>{{ $user->jabatan }}</td>
                <td>{{ $user->tanggal_bergabung }}</td>
                <td>
                    <a href="{{ route('petugas.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('petugas.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data Distribusi.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection


