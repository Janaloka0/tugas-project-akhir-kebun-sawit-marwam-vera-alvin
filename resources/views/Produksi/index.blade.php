@extends('layout')

@section('title', 'Daftar produksi')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar produksi</h1>
    <a href="{{ route('produksi.create') }}" class="btn btn-primary">Tambah produksi</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>kebun_id</th>
            <th>jumlah_tandan</th>
            <th>berat_total</th>
            <th>tanggal_panen </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($produksi as $index => $user)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td>
                    <a href="{{ route('produksi.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('produksi.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data produksi.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
