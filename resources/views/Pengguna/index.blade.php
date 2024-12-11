@extends('layout')

@section('title', 'Daftar Pengguna')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Daftar Pengguna</h1>
    <a href="{{ route('pengguna.create') }}" class="btn btn-primary">Tambah Pengguna</a>
</div>

<div class="card mb-4">
    <div class="card-body table-responsive p-3">
        <table class="table table-striped align-middle" border=1>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>name</th>
                    <th>email</th>
                    <th>role</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pengguna as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>
                            <a href="{{ route('pengguna.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('pengguna.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Tidak ada data pengguna.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
