@extends('layouts.app')

@section('template_title')
    {{ $ruta->name ?? 'Show Ruta' }}
@endsection

@section('content')
<body onload="initialize()">
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ruta</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('rutas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo:</strong>
                            {{ $ruta->codigo }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $ruta->nombre }}
                        </div>
                        <div class="form-group">
                            <label for="form-control">Latitud
                            <input type="text" class="form-control"
                            name="latitud" id="txtLat" value="{{ $ruta->latitud }}"
                            style="color:red" >
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="form-control">Longitud
                            <input type="text" class="form-control"
                            name="longitud" id="txtLng" value="{{ $ruta->longitud }}"
                            style="color:red" >
                            </label>
                        </div>

                    </div>

                    <div class="box box-info padding-1">
                            <div class="box-body">
                            <div id="googleMap" style="width: auto; height: 600px;"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
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
            var gLatLon = new google.maps.LatLng(14.393160,	-91.195717);//cocales
            //segunda localizacion de destino
            var va1 = $('#txtLat').val().split(' ').join('');
            var va2 = $('#txtLng').val().split(' ').join('');
            var gLatLonDestino = new google.maps.LatLng(va1, va2);//cocales
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
            destination: gLatLonDestino,
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