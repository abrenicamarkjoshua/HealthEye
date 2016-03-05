<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyCZMoKbKsMLGEh2A8kYj2BXngnF70M1kUw"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(14.3264, 120.9361), 20);
	
      }
    }

    //]]>
    </script><div id="map" style="min-width: 310px; height: 850px; "></div>
	
	<!-- <script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyCZMoKbKsMLGEh2A8kYj2BXngnF70M1kUw"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    function load() {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.setCenter(new GLatLng(14.3264, 120.9361), 20);
	
      }
    }

    //]]>
    </script><div id="map" style="min-width: 310px; height: 850px; "></div>
	<script src="http://maps.google.com/maps?file=api&v=2&key=AIzaSyCZMoKbKsMLGEh2A8kYj2BXngnF70M1kUw"
      type="text/javascript"></script>
    <script type="text/javascript">

    //<![CDATA[

    //function load() {
    //  if (GBrowserIsCompatible()) {
      //  var map = new GMap2(document.getElementById("map"));
        //map.setCenter(new GLatLng(14.3264, 120.9361), 20);
	
      //}
    //}

    //]]>
    //</script><div id="map" style="min-width: 310px; height: 850px; "></div>

<?php
 
	$address = 'mabuhay city paliparan 3 dasmariñas cavite';
	$coordinates = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address=' . urlencode($address) . '&sensor=true');
	$coordinates = json_decode($coordinates);
 
	echo 'Latitude:' . $coordinates->results[0]->geometry->location->lat;
	echo 'Longitude:' . $coordinates->results[0]->geometry->location->lng;
 
	$lat = $coordinates->results[0]->geometry->location->lat;
	$lng = $coordinates->results[0]->geometry->location->lng;
 
?>
 

    <style>
      html, body, #map-canvas {
        height: 100%;
        margin: 0px;
        padding: 0px
      }
    </style>
    
    <script>
		function initialize() {
		  var mapOptions = {
			zoom: 15,
			center: new google.maps.LatLng('<?php //echo $lat ?>', '<?php //echo $lng ?>')
		  };
		  var map = new google.maps.Map(document.getElementById('map-canvas'),
			  mapOptions);
		}
 
		google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
 
  <body>
    <div id="map-canvas"></div>
  </body>
</html>-->