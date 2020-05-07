<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Add a GeoJSON line</title>
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
        center: [-122.486055, 37.830948],
        zoom: 15
    });

    map.on('load', function() {
        map.addSource('route', {
            'type': 'geojson',
            'data': {
            	'type': 'FeatureCollection',
            	'features': [
            		{
		                'type': 'Feature',
		                'properties': {
		                	'color': '#339933' // hijau tua
		                },
		                'geometry': {
		                    'type': 'LineString',
		                    'coordinates': [
		                        [-122.48369693756104, 37.83381888486939],
		                        [-122.48348236083984, 37.83317489144141]
		                    ]
		                }
		            },
		            {
		                'type': 'Feature',
		                'properties': {
		                	'color': '#8BB33B' // hijau muda
		                },
		                'geometry': {
		                    'type': 'LineString',
		                    'coordinates': [
		                        [-122.48348236083984, 37.83317489144141],
		                        [-122.48339653015138, 37.83270036637107]
		                    ]
		                }
		            },
		            {
		                'type': 'Feature',
		                'properties': {
		                	'color': '#267373' // biru muda
		                },
		                'geometry': {
		                    'type': 'LineString',
		                    'coordinates': [
		                        [-122.48339653015138, 37.83270036637107],
		                        [-122.48356819152832, 37.832056363179625]
		                    ]
		                }
		            },
		            {
		                'type': 'Feature',
		                'properties': {
		                	'color': '#267373' // biru muda
		                },
		                'geometry': {
		                    'type': 'LineString',
		                    'coordinates': [
		                        [-122.48356819152832, 37.832056363179625],
		                        [-122.48404026031496, 37.83114119107971],
		                        [-122.48404026031496, 37.83049717427869],
		                        [-122.48348236083984, 37.829920943955045],
		                        [-122.48356819152832, 37.82954808664175],
		                        [-122.48507022857666, 37.82944639795659],
		                        [-122.48610019683838, 37.82880236636284],
		                        [-122.48695850372314, 37.82931081282506],
		                        [-122.48700141906738, 37.83080223556934],
		                        [-122.48751640319824, 37.83168351665737],
		                        [-122.48803138732912, 37.832158048267786],
		                        [-122.48888969421387, 37.83297152392784],
		                        [-122.48987674713133, 37.83263257682617],
		                        [-122.49043464660643, 37.832937629287755],
		                        [-122.49125003814696, 37.832429207817725],
		                        [-122.49163627624512, 37.832564787218985],
		                        [-122.49223709106445, 37.83337825839438],
		                        [-122.49378204345702, 37.83368330777276]
		                    ]
		                }
		            },
		            {
		                'type': 'Feature',
		                'properties': {
		                	'color': '#CC3333' // merah
		                },
		                'geometry': {
		                    'type': 'LineString',
		                    'coordinates': [
		                        [-122.48356819152832, 37.832056363179625],
		                        [-122.48404026031496, 37.83114119107971],
		                        [-122.48404026031496, 37.83049717427869],
		                        [-122.48348236083984, 37.829920943955045],
		                        [-122.48356819152832, 37.82954808664175],
		                        [-122.48507022857666, 37.82944639795659],
		                        [-122.48610019683838, 37.82880236636284],
		                        [-122.48695850372314, 37.82931081282506],
		                        [-122.48700141906738, 37.83080223556934],
		                        [-122.48751640319824, 37.83168351665737],
		                        [-122.48803138732912, 37.832158048267786],
		                        [-122.48888969421387, 37.83297152392784],
		                        [-122.48987674713133, 37.83263257682617],
		                        [-122.49043464660643, 37.832937629287755],
		                        [-122.49125003814696, 37.832429207817725],
		                        [-122.49163627624512, 37.832564787218985],
		                        [-122.49223709106445, 37.83337825839438],
		                        [-122.49378204345702, 37.83368330777276]
		                    ]
		                }
		            }
               	]
            }
        });
        map.addLayer({
            'id': 'route',
            'type': 'line',
            'source': 'route',
            'layout': {
                'line-join': 'round',
                'line-cap': 'round'
            },
            'paint': {
                'line-color': ['get', 'color'],
                'line-width': 5
            }
        });
    });
</script>

</body>
</html>