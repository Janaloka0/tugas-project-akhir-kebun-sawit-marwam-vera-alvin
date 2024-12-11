@extends('layout')

@section('title', 'Edit Petugas')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Petugas</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('petugas.update', $petugas->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $petugas->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_bergabung" class="form-label">tanggal bergabung</label>
                <input type="date" class="form-control" name="tanggal_bergabung" id="tanggal_bergabung" value="{{ old('tanggal_bergabung', $petugas->tanggal_bergabung) }}" required>
            </div>

            <div class="mb-3">
                <label for="role" class="form-label">jabatan</label>
                <select class="form-select" name="role" id="role" required>
                    <option value="admin" {{ $petugas->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas kebun" {{ $petugas->role == 'petugas kebun' ? 'selected' : '' }}>Petugas Kebun</option>
                    <option value="manajer" {{ $petugas->role == 'manajer' ? 'selected' : '' }}>Manajer</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('petugas.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
