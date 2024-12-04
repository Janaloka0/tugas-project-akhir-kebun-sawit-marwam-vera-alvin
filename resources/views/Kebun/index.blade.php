@extends('layout')

@section('title', 'Daftar Kebun')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('Kebun.create') }}" class="btn btn-primary">Tambah Laporan</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>lokasi</th>
            <th>luas</th>
            <th>status</th>
            <th>tanggal_tanam</th>
            <th>tanggal_panen</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse ($Kebun as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('Kebun.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('Kebun.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data Kebun.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection


