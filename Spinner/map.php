<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery UI Spinner - Map</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="/resources/demos/external/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script>
        $(function() {
            function latlong() {
                return new google.maps.LatLng( $("#lat").val(), $("#lng").val() );
            }
            function position() {
                map.setCenter( latlong() );
            }
            $( "#lat, #lng" ).spinner({
                step: .001,
                change: position,
                stop: position
            });
            var map = new google.maps.Map( $("#map")[0], {
                zoom: 8,
                center: latlong(),
                mapTypeId: google.maps.MapTypeId.ROADMAP
            });
        });
    </script>
    <style>
        #map {
            width:500px;
            height:500px;
        }
    </style>
</head>
<body>
<label for="lat">Latitude</label>
<input id="lat" name="lat" value="44.797">
<br>
<label for="lng">Longitude</label>
<input id="lng" name="lng" value="-93.278">
<div id="map"></div>
</body>
</html>