@extends('layout')

@section('title', 'pembayaran')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('pembayaran.create') }}" class="btn btn-primary">Tambah pembayaran</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>id_produksi</th>
            <th>jumlah_pembayaran</th>
            <th>tanggal_pembayaran</th>
            <th>'metode_pembayaran'</th>
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
                    <a href="{{ route('pembayaran.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('pembayaran.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">pembayaran tidak ditemukan</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection

