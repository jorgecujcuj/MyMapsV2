@extends('layouts.app')

@section('template_title')
    verRuta
@endsection

@section('content')
<body onload="initialize()">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                           
                            <div class="col-xl-12">
                                    <form action="{{ route('verRuta.index') }}" method="get">
                                        <div class="form-row">
                                            <div class="col-sm-4">
                                                <!--<input type="text" class="form-control" name="texto" value="">-->
                                                
                                                <select class="form-control" name="texto">
                                                <option value=""selected disabled> - Selecciona una finca - </option>
                                                        @foreach ($rutas as $ruta)
                                                        <option name="texto" value="{{ $ruta->codigo }}">{{ $ruta->nombre }}</option>
                                                        @endforeach
                                                </select>
                                                
                                            </div>
                                            <div class="box-footer mt20">
                                                <button type="submit" class="btn btn-primary" name="Buscar">Trazar ruta</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                                    <div class="box-body">

                                        <div class="form-group">
                                            <label for="form-control">Latitud
                                            <input type="text" class="form-control @error('latitud') is-invalid @enderror"
                                            name="latitud" id="txtLat" value="{{ $ruta->latitud }}"
                                            style="color:red" >
                                            @error('latitud')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-control">Longitud
                                            <input type="text" class="form-control @error('longitud') is-invalid @enderror"
                                            name="longitud" id="txtLng" value="{{ $ruta->longitud }}"
                                            style="color:red" >
                                            @error('longitud')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                            </label>
                                        </div>
                                        
                                    </div>
                                    {!! $rutas->links() !!}
                            </div>

                            <!-- -->
                            <!-- -->

                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    
                    <br><br>
                    <div class="box box-info padding-1">
                        <div class="box-body">
                            <div id="googleMap" style="width: auto; height: 600px;"></div>
                        </div>
                    </div>
                </div>
                {!! $rutas->links() !!}
            </div>
        </div>
    </div>
</body>
@endsection

@section('css')
<link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
      integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
      crossorigin=""
/>

<style type="text/css"> 
     #googleMap {
        border-radius: 15px;
     }
</style>
@endsection

@section('js')
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD9DY04K6SIJModAyyH5uTIp4bWqhe9p6E"></script>

<script type="text/javascript">
    function initialize() {
        var divMapa = document.getElementById("googleMap");
        navigator.geolocation.getCurrentPosition(fn_ok, fn_mal);
        function fn_mal(){
        }

        function fn_ok(rta){
            var lat =rta.coords.latitude;
            var lon =rta.coords.longitude;
            //primer localizacion
            var gLatLon = new google.maps.LatLng(14.393160,	-91.195717);
            var objConfig = {
                zoom: 17,
                center: gLatLon
            }
            
            var gMapa = new google.maps.Map(divMapa, objConfig);

            var objConfigMarker = {
                position: gLatLon,
                map: gMapa,
                draggable: true,
                title: "usted ya esta aca"
            }
            var gMarker= new google.maps.Marker(objConfigMarker);

        var pOptions = {
            strokeColor: "#E400EA",
            strokeOpacity: 0.5 ,
            strokeWeight: 8,
            //z-index: 99
        }
  
        var onjConfigDR = {
            map: gMapa,
            polylineOptions: pOptions
            //draggable: true //permite que se puedan meniar los puntos de ruta
            //polylineOptions: { strokeColor: "#000000" }//color de la lunea
        }

        var objConfigDS = {
            origin: gLatLon,
            destination: { lat: 14.464771, lng: -91.132288 },
            travelMode: google.maps.TravelMode.DRIVING
        }

        //obteber cordenada
        var ds = new google.maps.DirectionsService();
        //traducir las cordenadas
        var dr= new google.maps.DirectionsRenderer(onjConfigDR);

        ds.route(objConfigDS, fnRutear);

          function fnRutear( resultados, status){
            //mostrar la linea entre A y B
            if(status == 'OK'){
              dr.setDirections(resultados);
            }else{
              alert('Error: '+ status);
            }
          }
        
        }
        
    }
</script>
@endsection