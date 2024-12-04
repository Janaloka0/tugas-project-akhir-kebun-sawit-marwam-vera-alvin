@extends('layout')

@section('title', 'Edit Laporan')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Laporan</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('Laporan.update', $Laporan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="file_path" class="form-label">file path</label>
                <input type="file" class="form-control" name="file_path" id="file_path" value="{{ old('file_path', $Laporan->file_path) }}" required>
            </div>

            <div class="mb-3">
                <label for="file_type" class="form-label">file type</label>
                <input type="file" class="form-control" name="file_type" id="file_type" value="{{ old('file_type', $Laporan->file_type) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="tanggal_laporan" class="form-label">tanggal laporan</label>
                <input type="file" class="form-control" name="tanggal_laporan" id="tanggal_laporan" value="{{ old('tanggal_laporan', $Laporan->tanggal_laporan) }}" required>
            </div>

            <!-- <div class="mb-3">
                <label for="tanggal_laporan" class="form-label">tanggal laporan</label>
                <select class="form-select" name="tanggal_laporan" id="tanggal_laporan" required>
                    <option value="admin" {{ $laporan->role == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas kebun" {{ $laporan->role == 'petugas kebun' ? 'selected' : '' }}>Petugas Kebun</option>
                    <option value="manajer" {{ $kebun->role == 'manajer' ? 'selected' : '' }}>Manajer</option>
                </select>
            </div> -->

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('kebun.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection


