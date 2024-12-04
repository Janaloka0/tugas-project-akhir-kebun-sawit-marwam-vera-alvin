@extends('layout')

@section('title', 'Daftar Distribusi')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('distribusi.create') }}" class="btn btn-primary">Tambah Distribusi</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <!-- <th>id</th> -->
            <th>produksi_id</th>
            <th>tujuan</th>
            <th>jumlah</th>
            <th>tanggal_distribusi</th>
            <th>Aksi</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse ($distribusi as $index => $user)
            <tr>
                <!-- <td>{{ $index + 1 }}</td> -->
                <!-- <td>{{ $user->id }}</td> -->
                <td>{{ $user->produksi_id }}</td>
                <td>{{ $user->tujuan }}</td>
                <td>{{ $user->jumlah }}</td>
                <td>{{ $user->tanggal_distribusi }}</td>
                <td>
                    <a href="{{ route('distribusi.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('distribusi.destroy', $user->id) }}" method="POST" style="display:inline;">
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


