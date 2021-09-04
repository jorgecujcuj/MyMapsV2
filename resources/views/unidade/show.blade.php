@extends('layouts.app')

@section('template_title')
    {{ $unidade->name ?? 'Show Unidade' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos de la Unidad</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('unidades.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>Id:</strong>
                            {{ $unidade->id }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $unidade->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $unidade->placa }}
                        </div>
                        <div class="form-group">
                            <strong>Capacidad:</strong>
                            {{ $unidade->capacidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
