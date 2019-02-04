<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href=" <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   			integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
  			crossorigin=""/>">

    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   		integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   		crossorigin="">
    </script>

	 <style>
	 	#mapid { height: 500px; }
	 </style>
</head>
<body>
	<div id="mapid"></div>

	<script>
		var mymap = L.map('mapid').setView([51.505, -0.09], 13);

		L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoibWhhbWRpdHMiLCJhIjoiY2pvbWMzZDgyMDhoMTNrcXhiM2ppeW15biJ9.Tj1mLRKxL3KfmiV_VvYyCQ'
}).addTo(mymap);
	</script>
</body>
</html>