<div class="box box-info padding-1">
    <div class="box-body">
        <!--
        <div class="form-group">
            {{ Form::label('idunidad') }}
			<select class="form-control" name="idunidad">
                    <option value="">{{ $solicitude->idunidad }} - activo </option>
                    @foreach ($unidades as $unidade)
                    <option value="{{ $unidade->id }}"> {{$unidade->id}} - {{ $unidade->placa }}</option>
                    @endforeach
            </select>
            @error('idunidad')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        -->

        <div class="form-group">
            {{ Form::label('idfinca') }}
            <select class="form-control" name="idfinca">
                   <!-- <option value="" selected disabled>Selecciona una finca</option>-->
                   <option value="">{{ $solicitude->idfinca }} - activo </option>
                    @foreach ($fincas as $fincas)
                    <option value="{{ $fincas->id }}">{{ $fincas->id }} - {{ $fincas->nombre }}</option>
                    @endforeach
            </select>
            @error('idfinca')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            {{ Form::label('idpiloto') }}
            <select class="form-control" name="idpiloto">
                    <!--<option value="" selected disabled>Selecciona una Piloto</option>-->
                    <option value="">{{ $solicitude->idpiloto }} - activo </option>
                    @foreach ($pilotos as $pilotos)
                    <option value="{{ $pilotos->id }}">{{ $pilotos->id }} - {{ $pilotos->nombre }}</option>
                    @endforeach
            </select>
            @error('idpiloto')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <div class="form-group">
            {{ Form::label('telefono') }}
            {{ Form::text('telefono', $solicitude->telefono, ['class' => 'form-control' . ($errors->has('telefono') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
            {!! $errors->first('telefono', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('observacion') }}
            {{ Form::text('observacion', $solicitude->observacion, ['class' => 'form-control' . ($errors->has('observacion') ? ' is-invalid' : ''), 'placeholder' => 'Observacion']) }}
            {!! $errors->first('observacion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>