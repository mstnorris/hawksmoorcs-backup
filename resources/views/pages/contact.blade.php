@extends('layouts.master')

@section('content')

<style>
#map-canvas {
    width: 100%;
    height: 360px;
    background-color: #CCC;
}
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>

<script>
function initialize() {
    var myLatlng = new google.maps.LatLng(51.962936, 0.910502);
    var mapOptions = {
        zoom: 14,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var marker = new google.maps.Marker({
        position: myLatlng,
        map: map,
        title: 'Hawksmoor Construction Services Limited'
    });
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>

<div class="container">
    <div class="page-header">
        <h2>Contact</h2>
    </div>
	<div class="row">
        <div class="col-md-9 col-sm-8 col-xs-12">
            <div id="map-canvas"></div>
    	</div>

      	<div class="col-md-3 col-sm-4 col-xs-12">
    		<address>
                <strong>
                    Hawksmoor Construction<br />
                    Services Limited
                </strong>
                <br />
                <br />
                Merryfields<br>
                Church Street<br>
                Boxted<br>
                CO4 5SX<br>
                <br />
                <abbr title="Phone">P:</abbr>&nbsp;+44&nbsp;(0)&nbsp;1206&nbsp;271&nbsp;577<br>
                <abbr title="Fax">F:</abbr>&nbsp;+44&nbsp;(0)&nbsp;1206&nbsp;271&nbsp;577<br>
                <br />
                <abbr title="Email">E:</abbr>&nbsp;<a href="mailto:info@hawksmoorcs.co.uk">info@hawksmoorcs.co.uk</a>
            </address>
    	</div>
    </div>
</div>

@endsection