@extends('layouts.app')

@section('template_title')
    {{ $finca->name ?? 'Show Finca' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Datos de la Finca</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('fincas.index') }}"> Retornar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idfinca:</strong>
                            {{ $finca->id }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $finca->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $finca->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Idruta:</strong>
                            {{ $finca->idruta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
