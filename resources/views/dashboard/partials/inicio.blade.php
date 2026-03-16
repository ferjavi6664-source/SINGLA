
@extends('layouts.dashboard')

@section('content')

<div class="container-fluid">

    <h3 class="mb-4 fw-bold">Panel de Control - SISEG</h3>

    <div class="row">

        <div class="col-md-3 mb-4">
            <div class="card shadow border-0 rounded-4 stat-card bg-primary text-white">
                <div class="card-body">
                    <h6>Cumplidos Hoy</h6>
                    <h2 class="fw-bold">25</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow border-0 rounded-4 stat-card bg-warning text-dark">
                <div class="card-body">
                    <h6>Pendientes</h6>
                    <h2 class="fw-bold">12</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow border-0 rounded-4 stat-card bg-info text-white">
                <div class="card-body">
                    <h6>En Ruta</h6>
                    <h2 class="fw-bold">8</h2>
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-4">
            <div class="card shadow border-0 rounded-4 stat-card bg-success text-white">
                <div class="card-body">
                    <h6>Entregados</h6>
                    <h2 class="fw-bold">150</h2>
                </div>
            </div>
        </div>

    </div>

    <div class="card shadow border-0 rounded-4">
        <div class="card-body">
            <h5 class="mb-3">Cumplidos Semanales</h5>
            <canvas id="rendimientoChart"></canvas>

        </div>
    </div>

</div>

@endsection