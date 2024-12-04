@extends('layout')

@section('title', 'kategori panen')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>kategori panen</h1>
    <a href="{{ route('kategori panen.create') }}" class="btn btn-primary">Tambah kategori panen</a>
</div>

<table class="table table-bordered">
    <thead class="table-light">
        <tr>
            <th>#</th>
            <th>name kategori</th>
            <th>deskripsi</th>
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
                    <a href="{{ route('kategori panen.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('kategori panen.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5" class="text-center">tidak ada kategori</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection
