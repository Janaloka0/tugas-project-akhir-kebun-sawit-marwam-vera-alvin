@extends('layout')

@section('title', 'Edit Distribusi')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Distribusi</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('distribusi.update', $distribusi->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="tujuan" class="form-label">Tujuan</label>
                <input type="text" class="form-control" name="tujuan" id="tujuan" value="{{ old('tujuan', $distribusi->tujuan) }}" required>
            </div>

            <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah</label>
                <input type="jumlah" class="form-control" name="jumlah" id="jumlah" value="{{ old('jumlah', $distribusi->jumlah) }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_distribusi" class="form-label">Tanggal Distribusi</label>
                <!-- <select class="form-select" name="tanggal_distribusi" id="tanggal_distribusi" required>
                    <option value="admin" {{ $distribusi->tanggal_distribusi == 'admin' ? 'selected' : '' }}>Admin</option>
                    <option value="petugas kebun" {{ $distribusi->tanggal_distribusi == 'petugas kebun' ? 'selected' : '' }}>Petugas Kebun</option>
                    <option value="manajer" {{ $distribusi->tanggal_distribusi == 'manajer' ? 'selected' : '' }}>Manajer</option>
                </select> -->
                label
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('distribusi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection
