@extends('layout')

@section('title', 'pembayaran')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit pembayaran</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('pembayaran.update', $pengguna->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $pengguna->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ old('email', $pengguna->email) }}" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" name="role" id="role" required>
                    <option value="admin" {{ $pembayaran->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas kebun" {{ $pembayaran->role == 'petugas kebun' ? 'selected' : '' }}>Petugas Kebun</option>
                    <option value="manajer" {{ $pembayaran->role == 'manajer' ? 'selected' : '' }}>Manajer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('pembayaran.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
