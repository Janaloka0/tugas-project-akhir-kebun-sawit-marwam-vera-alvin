@extends('layouts-admin.app')

@section('content')
    <div class="container">
        <h1 class="mb-4">Dashboard manajer</h1>
        <div class="row">
            <!-- Ringkasan Data -->
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Data Kebun
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
                        Statistik Produksi
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
                        Jadwal Distribusi
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
