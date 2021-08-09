@extends('layouts.app')

@section('template_title')
    {{ $piloto->name ?? 'Show Piloto' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Piloto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('pilotos.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <strong>IdPiloto:</strong>
                            {{ $piloto->id }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $piloto->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $piloto->nombre }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
