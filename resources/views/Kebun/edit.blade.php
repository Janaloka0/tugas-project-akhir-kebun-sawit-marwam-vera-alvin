@extends('layout')

@section('title', 'Edit Kebun')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Kebun</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('kebun.update', $kebun->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" id="lokasi" value="{{ old('lokasi', $kebun->lokasi) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="luas" class="form-label">Luas</label>
                <input type="text" class="form-control" name="luas" id="luas" value="{{ old('luas', $kebun->luas) }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" name="status" id="status" value="{{ old('status', $kebun->status) }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_tanam" class="form-label">Tanggal Tanam</label>
                <input type="date" class="form-control" name="tanggal_tanam" id="tanggal_tanam" value="{{ old('tanggal_tanam', $kebun->tanggal_tanam) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="tanggal_panen" class="form-label">Tanggal Panen</label>
                <input type="date" class="form-control" name="tanggal_panen" id="tanggal_panen" value="{{ old('tanggal_panen', $kebun->tanggal_panen) }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('kebun.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</div>
@endsection


