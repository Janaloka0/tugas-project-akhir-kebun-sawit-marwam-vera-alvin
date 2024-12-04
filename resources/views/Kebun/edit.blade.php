@extends('layout')

@section('title', 'Edit Kebun')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Kebun</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('Kebun.update', $Kebun->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $Kebun->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $Kebun->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" name="role" id="role" required>
                    <option value="admin" {{ $kebun->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas kebun" {{ $kebun->role == 'petugas kebun' ? 'selected' : '' }}>Petugas Kebun</option>
                    <option value="manajer" {{ $kebun->role == 'manajer' ? 'selected' : '' }}>Manajer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('kebun.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection


