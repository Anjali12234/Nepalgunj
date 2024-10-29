<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location Form</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.css" /> <!-- Add Leaflet Geosearch CSS -->
    <style>
        #map {
            height: 400px;
            width: 100%;
        }
        .leaflet-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
<h1>Mark Your Location</h1>

@if (session('success'))
    <div>{{ session('success') }}</div>
@endif

<form action="{{ route('location.store') }}" method="POST">
    @csrf
    <label for="name">Location Name:</label>
    <input type="text" name="name" id="name" required>

    <div id="map"></div>

    <input type="hidden" name="latitude" id="latitude">
    <input type="hidden" name="longitude" id="longitude">

    <button type="submit">Submit</button>
</form>

<!-- Include Leaflet JS -->
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
<!-- Include Leaflet-Geosearch JS -->
<script src="https://unpkg.com/leaflet-geosearch@3.1.0/dist/geosearch.umd.js"></script>

<script>
    var map = L.map('map').setView([0, 0], 18);  // Higher initial zoom level

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors',
        maxZoom: 19  // Allow higher zoom levels
    }).addTo(map);

    var marker;

    // Add existing click-to-mark feature
    function onMapClick(e) {
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker(e.latlng).addTo(map);
        document.getElementById('latitude').value = e.latlng.lat;
        document.getElementById('longitude').value = e.latlng.lng;
    }

    map.on('click', onMapClick);

    // Get current location and zoom in
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            var lat = position.coords.latitude;
            var lng = position.coords.longitude;
            map.setView([lat, lng], 18);  // Zoom in closer to street level
            marker = L.marker([lat, lng]).addTo(map);
            document.getElementById('latitude').value = lat;
            document.getElementById('longitude').value = lng;
        });
    }

    // Initialize Leaflet-Geosearch for place search
    const search = new GeoSearch.GeoSearchControl({
        provider: new GeoSearch.OpenStreetMapProvider(), // Use OpenStreetMap for search results
        style: 'bar',
        autoComplete: true,   // Allow autocomplete
        autoCompleteDelay: 250,  // Delay in autocomplete search
        showMarker: true,   // Show marker on search result
        marker: {
            icon: new L.Icon.Default(),
            draggable: false,
        },
        retainZoomLevel: false,  // Allow zoom adjustment when search result is found
        animateZoom: true,
    });

    // Add the search control to the map
    map.addControl(search);

    // Handle search results and update latitude and longitude fields
    map.on('geosearch/showlocation', function (event) {
        const latlng = event.location;
        if (marker) {
            map.removeLayer(marker);
        }
        marker = L.marker([latlng.y, latlng.x]).addTo(map);
        document.getElementById('latitude').value = latlng.y;
        document.getElementById('longitude').value = latlng.x;
    });

</script>
</body>
</html>
