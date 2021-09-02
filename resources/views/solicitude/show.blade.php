@extends('layouts.app')

@section('template_title')
    {{ $solicitude->name ?? 'Show Solicitude' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos de la Solicitud</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('solicitudes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idfinca:</strong>
                            {{ $solicitude->idfinca }}
                        </div>
                        <div class="form-group">
                            <strong>Idpiloto:</strong>
                            {{ $solicitude->idpiloto }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha solicitada:</strong>
                            {{ $solicitude->fechasolicitada}}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $solicitude->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Observacion:</strong>
                            {{ $solicitude->observacion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
