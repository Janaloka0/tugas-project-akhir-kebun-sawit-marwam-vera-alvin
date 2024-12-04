@extends('layout')

@section('title', 'Daftar Petugas')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route(' Petugas.create') }}" class="btn btn-primary">Tambah Petugas</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>pengguna_id</th>
            <th>nama_petugas</th>
            <th>jabatan</th>
            <th>tanggal_bergabung</th>
            
            
        </tr>
    </thead>
    <tbody>
        @forelse ($Petugas as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('Petugas.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('Petugas.destroy', $user->id) }}" method="POST" style="display:inline;">
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


