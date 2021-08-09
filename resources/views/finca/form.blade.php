<div class="box box-info padding-1">
    <div class="box-body">
        
     <!--   <div class="form-group">
            {{ Form::label('Id Finca') }}
            {{ Form::text('idfinca', $finca->idfinca, ['class' => 'form-control' . ($errors->has('idfinca') ? ' is-invalid' : ''), 'placeholder' => 'Id finca']) }}
            {!! $errors->first('idfinca', '<div class="invalid-feedback">:message</p>') !!}
        </div>-->
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('codigo', $finca->codigo, ['class' => 'form-control' . ($errors->has('codigo') ? ' is-invalid' : ''), 'placeholder' => 'Codigo']) }}
            {!! $errors->first('codigo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombre', $finca->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Id Ruta') }}
            {{ Form::text('idruta', $finca->idruta, ['class' => 'form-control' . ($errors->has('idruta') ? ' is-invalid' : ''), 'placeholder' => 'Id Ruta']) }}
            {!! $errors->first('idruta', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>