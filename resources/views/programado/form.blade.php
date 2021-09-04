<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('idsolicitud') }}
            {{ Form::text('idsolicitud', $programado->idsolicitud, ['class' => 'form-control' . ($errors->has('idsolicitud') ? ' is-invalid' : ''), 'placeholder' => 'Idsolicitud']) }}
            {!! $errors->first('idsolicitud', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('operador') }}
            {{ Form::text('operador', $programado->operador, ['class' => 'form-control' . ($errors->has('operador') ? ' is-invalid' : ''), 'placeholder' => 'Operador']) }}
            {!! $errors->first('operador', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estado') }}
            {{ Form::text('estado', $programado->estado, ['class' => 'form-control' . ($errors->has('estado') ? ' is-invalid' : ''), 'placeholder' => 'Estado']) }}
            {!! $errors->first('estado', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idfinca') }}
            {{ Form::text('idfinca', $programado->idfinca, ['class' => 'form-control' . ($errors->has('idfinca') ? ' is-invalid' : ''), 'placeholder' => 'Idfinca']) }}
            {!! $errors->first('idfinca', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('idunidad') }}
            {{ Form::text('idunidad', $programado->idunidad, ['class' => 'form-control' . ($errors->has('idunidad') ? ' is-invalid' : ''), 'placeholder' => 'Idunidad']) }}
            {!! $errors->first('idunidad', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('salida') }}
            {{ Form::text('salida', $programado->salida, ['class' => 'form-control' . ($errors->has('salida') ? ' is-invalid' : ''), 'placeholder' => 'Salida']) }}
            {!! $errors->first('salida', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>