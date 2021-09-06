<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('idprogramado') }}
            <select class="form-control" name="idprogramado">
                   <option value=""selected disabled> - Selecciona una solicitud - </option>
                    @foreach ($programados as $programado)
                    <option value="{{ $programado->id }}" {{$programado->id == $confirmacione->idprogramado ? 'selected' : ''}} >{{ $programado->idsolicitud }}</option>
                    @endforeach
            </select>
            @error('idprogramado')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="form-control">Latitud
            <input type="text" class="form-control @error('latitud') is-invalid @enderror"
            name="latitud" id="txtLat" value="{{ $confirmacione->latitud }}"
            style="color:red" >
            @error('latitud')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </label>
        </div>

        <div class="form-group">
            <label for="form-control">Longitud
            <input type="text" class="form-control @error('longitud') is-invalid @enderror"
            name="longitud" id="txtLng" value="{{ $confirmacione->longitud }}"
            style="color:red" >
            @error('longitud')<div class="invalid-feedback">{{ $message }}</div>@enderror
            </label>
        </div>

        <div class="form-group">
            {{ Form::label('abastecida') }}
            {{ Form::text('abastecida', $confirmacione->abastecida, ['class' => 'form-control' . ($errors->has('abastecida') ? ' is-invalid' : ''), 'placeholder' => 'Abastecida']) }}
            {!! $errors->first('abastecida', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $confirmacione->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
<br><br>
<div class="box box-info padding-1">
    <div class="box-body">
        <div id="map_canvas" style="width: auto; height: 600px;"></div>
    </div>
</div>

@section('css')
@endsection

@section('js')
<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9DY04K6SIJModAyyH5uTIp4bWqhe9p6E"></script>
<script type="text/javascript">
        function initialize() {
            // Creando objeto de mapa
            var map = new google.maps.Map(document.getElementById('map_canvas'), {
                zoom: 12,
                center: new google.maps.LatLng(-34.9206797, -57.9537638),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });

            // crea un marcador que se puede arrastrar a las coordenadas dadas
            var vMarker = new google.maps.Marker({
                position: new google.maps.LatLng(-34.9206797, -57.9537638),
                draggable: true
            });

            // agrega un oyente al marcador
            // obtiene las coordenadas cuando finaliza el evento de arrastre
            // luego actualiza la entrada con las nuevas coordenadas 
            google.maps.event.addListener(vMarker, 'dragend', function (evt) {
                $("#txtLat").val(evt.latLng.lat().toFixed(6));
                $("#txtLng").val(evt.latLng.lng().toFixed(6));

                map.panTo(evt.latLng);
            });

            // centra el mapa en marcadores de coordenadas
            map.setCenter(vMarker.position);

            // agrega el marcador en el mapa
            vMarker.setMap(map);
        }
</script>
@endsection