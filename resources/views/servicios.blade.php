@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-header bg-primary text-white">
        <h5 class="mb-0">Registro de Servicio</h5>
    </div>

    <div class="card-body">

        <form>

            <!-- ORIGEN -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <strong>Datos del Origen</strong>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Dirección de Origen</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Ciudad de Origen</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Tipo de Vehículo</label>
                            <select class="form-control">
                                <option>Camión</option>
                                <option>Tractomula</option>
                                <option>Turbo</option>
                                <option>Furgón</option>
                            </select>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Peso</label>
                            <input type="number" class="form-control">
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Centro de Costos</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contacto Origen</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teléfono Origen</label>
                            <input type="text" class="form-control">
                        </div>

                    </div>
                </div>
            </div>


            <!-- DESTINO -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <strong>Datos del Destino</strong>
                </div>

                <div class="card-body">
                    <div class="row">

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Dirección de Destino</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Ciudad de Destino</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Contacto Destino</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Teléfono Destino</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label">Hora de la Cita</label>
                            <input type="datetime-local" class="form-control">
                        </div>

                    </div>
                </div>
            </div>


            <!-- OBSERVACIONES -->
            <div class="card mb-4">
                <div class="card-header bg-light">
                    <strong>Observaciones</strong>
                </div>

                <div class="card-body">

                    <textarea class="form-control" rows="3"></textarea>

                </div>
            </div>

            <button class="btn btn-success">
                Guardar Servicio
            </button>

        </form>

    </div>
</div>

@endsection