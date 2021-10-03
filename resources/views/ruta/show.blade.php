@extends('layouts.app')

@section('template_title')
    {{ $ruta->name ?? 'Show Ruta' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ruta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rutas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ruta->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ruta->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $ruta->latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $ruta->longitud }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
