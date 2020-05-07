<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Style lines with a data-driven property</title>
	<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.js"></script>
	<link href="https://api.mapbox.com/mapbox-gl-js/v1.9.1/mapbox-gl.css" rel="stylesheet" />
	<style>
		body { margin: 0; padding: 0; }
		#map { position: absolute; top: 0; bottom: 0; width: 100%; }
	</style>
	</head>
	<body>
	<div id="map"></div>
	<script>
		mapboxgl.accessToken = 'pk.eyJ1Ijoia2VsdmluYWRyaWFuIiwiYSI6ImNrOGx1NWlkdDA1YmczbW44MGM3dzY2czAifQ.06uwtSbY-t2pKcFYLAoXqA';
	var map = new mapboxgl.Map({
	container: 'map',
	style: 'mapbox://styles/mapbox/streets-v11',
	center: [-122.48383155304096, 37.82882682974591],
	zoom: 16
	});
	
	map.on('load', function() {
	map.addSource('lines', {
	'type': 'geojson',
	'data': {
	'type': 'FeatureCollection',
	'features': [
	{
	'type': 'Feature',
	'properties': {
	'color': '#F7455D' // red
	},
	'geometry': {
	'type': 'LineString',
	'coordinates': [
	[-122.4833858013153, 37.829607404976734],
	[-122.48205006122589, 37.82801003030873]
	]
	}
	},
	{
	'type': 'Feature',
	'properties': {
	'color': '#33C9EB' // blue
	},
	'geometry': {
	'type': 'LineString',
	'coordinates': [
	[-122.48393028974533, 37.829471820141016],
	[-122.48395174741744, 37.82940826466351],
	[-122.48395174741744, 37.829412501697064],
	[-122.48423874378203, 37.829357420242125],
	[-122.48422533273697, 37.829361657278575],
	[-122.48459815979002, 37.8293425906126],
	[-122.48458743095398, 37.8293447091313],
	[-122.4847564101219, 37.82932776098012],
	[-122.48474299907684, 37.829331998018276],
	[-122.4849334359169, 37.829298101706186],
	[-122.48492807149889, 37.82930022022615],
	[-122.48509705066681, 37.82920488676767],
	[-122.48509168624878, 37.82920912381288],
	[-122.48520433902739, 37.82905870855876],
	[-122.48519897460936, 37.82905870855876],
	[-122.4854403734207, 37.828594749716714],
	[-122.48543500900269, 37.82860534241688],
	[-122.48571664094925, 37.82808206121068],
	[-122.48570591211319, 37.82809689109353],
	[-122.4858346581459, 37.82797189627337],
	[-122.48582661151886, 37.82797825194729],
	[-122.4859634041786, 37.82788503534145],
	[-122.48595803976059, 37.82788927246246],
	[-122.48605459928514, 37.82786596829394]
	]
	}
	}
	]
	}
	});
	map.addLayer({
	'id': 'lines',
	'type': 'line',
	'source': 'lines',
	'paint': {
	'line-width': 3,
	// Use a get expression (https://docs.mapbox.com/mapbox-gl-js/style-spec/#expressions-get)
	// to set the line-color to a feature property value.
	'line-color': ['get', 'color']
	}
	});
	});
	</script>
	
	</body>
</html>
