@extends('layout')

@section('title', 'kategori panen')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>kategori panen</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('kategori panen.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="password" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" name="role" id="role" required>
                    <option value="admin">Admin</option>
                    <option value="petugas kebun">Petugas Kebun</option>
                    <option value="manajer">Manajer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('kategori panen.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
