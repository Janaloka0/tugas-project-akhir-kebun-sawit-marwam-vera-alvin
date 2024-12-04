@extends('layout')

@section('title', 'Tambah Laporan')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tambah Laporan</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('laporan.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="file_path" class="form-label">file path</label>
                <input type="file" class="form-control" name="file_path" id="file_path" value="{{ old('file_path') }}" required>
            </div>

            <div class="mb-3">
                <label for="file_type" class="form-label">file type</label>
                <input type="file" class="form-control" name="file_type" id="file_type" value="{{ old('file_type') }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_laporan" class="form-label">tanggal laporan</label>
                <input type="date" class="form-control" name="tanggal_laporan" id="tanggal_laporan" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pengguna.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
