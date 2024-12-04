@extends('layout')

@section('title', 'Daftar Laporan')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('laporan.create') }}" class="btn btn-primary">Tambah Laporan</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <!-- <th>#</th> -->
            <th>kebun id</th>
            <th>file path</th>
            <th>file type</th>
            <th>tanggal laporan</th>
            
        </tr>
    </thead>
    <tbody>
        @forelse ($laporan as $index => $user)
            <tr>
<!-- Suggested code may be subject to a license. Learn more: ~LicenseLog:2763039792. -->
                <td>{{ $user->id }}</td>
                <td>{{ $user->file_path }}</td>
                <td>{{ $user->file_type }}</td>
                <td>{{ $user->tanggal_laporan }}</td>
                <td>
                    <a href="{{ route('laporan.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('laporan.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">Tidak ada data laporan.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection

