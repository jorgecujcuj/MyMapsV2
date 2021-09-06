@extends('layouts.app')

@section('template_title')
    {{ $confirmacione->name ?? 'Show Confirmacione' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Confirmacione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('confirmaciones.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Idprogramado:</strong>
                            {{ $confirmacione->idprogramado }}
                        </div>
                        <div class="form-group">
                            <strong>Latitud:</strong>
                            {{ $confirmacione->latitud }}
                        </div>
                        <div class="form-group">
                            <strong>Longitud:</strong>
                            {{ $confirmacione->longitud }}
                        </div>
                        <div class="form-group">
                            <strong>Abastecida:</strong>
                            {{ $confirmacione->abastecida }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $confirmacione->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
