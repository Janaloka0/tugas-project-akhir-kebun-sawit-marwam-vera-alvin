@extends('layouts-manajer.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Dashboard manajer</h1>
        <div class="row">
            <!-- Ringkasan Data -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        statistik hasil produksi
                    </div>
                    <div class="card-body">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>

            <!-- Statistik -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-success text-white">
                        Status Tanaman
                    </div>
                    <div class="card-body">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Ringkasan Jadwal Produksi dan Laporan -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info text-white">
                        Distribusi Hasil Kebun
                    </div>
                    <div class="card-body">
                        <ul>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
