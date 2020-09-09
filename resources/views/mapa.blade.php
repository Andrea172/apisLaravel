@extends('plantilla')
@section('seccion')
<h1>Mapa</h1>
<div class="form-group">
    <label for="address">Dirección</label>
    <input type="text" id="address-input" name="address" class="form-control map-input">
    <input type="hidden" name="lat" id="address-latitude" value="0" />
    <input type="hidden" name="lng" id="address-longitude" value="0" />
</div>
<div id="address-map-container" style="width:100%;height:400px; ">
    <div style="width: 100%; height: 100%" id="address-map"></div>
</div>
<br>


@parent
    <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>
    <script src="/js/mapInput.js"></script>

@endsection


     