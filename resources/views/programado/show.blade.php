@extends('layouts.app')

@section('template_title')
    {{ $programado->name ?? 'Show Programado' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Ver Programado</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('programados.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idsolicitud:</strong>
                            {{ $programado->idsolicitud }}
                        </div>
                        <div class="form-group">
                            <strong>Operador:</strong>
                            {{ $programado->operador }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $programado->estado }}
                        </div>
                        <div class="form-group">
                            <strong>Idfinca:</strong>
                            {{ $programado->idfinca }}
                        </div>
                        <div class="form-group">
                            <strong>Idunidad:</strong>
                            {{ $programado->idunidad }}
                        </div>
                        <div class="form-group">
                            <strong>Salida:</strong>
                            {{ $programado->salida }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
