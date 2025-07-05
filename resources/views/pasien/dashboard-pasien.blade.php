<!-- Example pasien dashboard view -->
@extends('layouts.app-dashboard')

@section('title', 'Dashboard Pasien')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard Pasien</h1>
</div>
<div class="row">
    <!-- Total Pendaftaran Poli -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                            Total Pendaftaran Poli</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalDaftarPoli }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-hospital-user fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Total Pemeriksaan Selesai -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                            Pemeriksaan Selesai</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalPeriksa }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-notes-medical fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pendaftaran Aktif (Belum Diperiksa) -->
    <div class="col-xl-4 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                            Pendaftaran Aktif</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalDaftarAktif }}</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
