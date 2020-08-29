<?php include 'templates/header.php'; ?>
<style>
    .marker {
        background-image: url('assets/img/marker.png');
        background-size: cover;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        cursor: pointer;
    }

    .mapboxgl-popup {
        max-width: 200px;
    }

    .mapboxgl-popup-content {
        text-align: center;
        font-family: 'Open Sans', sans-serif;
    }
</style>

<script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
<link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
<?php
$mq = $conn->query("SELECT * FROM locations");
$locations = $mq->fetch_all(MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col">
        Temukan lokasi MullBank terdekat dengan lokasi anda dan bergabunglah bersama kami
    </div>
</div>
<div class="row google-map">
    <div class="col">
        <div class="container">
            <div id='map' style="width:100%; height:600px"></div>
            <script>
                $(document).ready(($) => {
                    mapboxgl.accessToken = 'pk.eyJ1IjoiYXRtYWRqYWtlbGx5IiwiYSI6ImNrZWVkcWcxdzB1cXAyeHAzcDc5Znl2cW8ifQ.SGEQ3wGvb_UInNKC8xFcTA';
                    var map = new mapboxgl.Map({
                        container: 'map',
                        style: 'mapbox://styles/mapbox/streets-v11', // stylesheet location
                        center: [106.894852, -6.11256], // starting position [lng, lat]
                        zoom: 12 // starting zoom
                    });
                    const locations = <?php echo json_encode($locations) ?>;
                    // console.log(locations);

                    _processToGeoJSON = (locs) => {
                        let geojson = {
                            type: 'FeatureCollection',
                            features: []
                        }
                        const features = locs.map((l) => {
                            let out = {
                                type: 'Feature',
                                geometry: {
                                    type: 'Point',
                                    coordinates: [parseFloat(l.lng), parseFloat(l.lat)]
                                },
                                properties: {
                                    title: l.nama_bank_sampah,
                                    description: l.address
                                }
                            }
                            return out;
                        })
                        geojson.features = features;
                        return geojson;
                    }

                    const geojson = _processToGeoJSON(locations);
                    console.log(geojson);

                    // add markers to map
                    geojson.features.forEach(function(marker) {

                        // create a HTML element for each feature
                        var el = document.createElement('div');
                        el.className = 'marker';

                        // make a marker for each feature and add to the map
                        new mapboxgl.Marker(el)
                            .setLngLat(marker.geometry.coordinates)
                            .setPopup(new mapboxgl.Popup({
                                    offset: 25
                                }) // add popups
                                .setHTML('<p style="font-size:16px; font-weight: bold">' + marker.properties.title + '</p><p style="font-size:14px;">' + marker.properties.description + '</p>'))
                            .addTo(map);
                    });
                });
            </script>
        </div>
    </div>
</div>
<div class="row map-info">
    <script src="<?php echo constant('BASE_URL') ?>/assets/twbs.min.js"></script>
    <script>
        $(document).ready(($) => {
            const locations = <?php echo json_encode($locations) ?>;
            let pagedLocations = [];
            let x = y = 0;
            for (let i = 0; i < locations.length; i++) {
                if (y == 0) {
                    pagedLocations[x] = [];
                }
                if (y < 10) {
                    pagedLocations[x].push(locations[i]);
                    y++;
                }
                if (y >= 10) {
                    y = 0;
                    x++;
                }
            }

            processLocationItems = (locs, num) => {
                $(".items-0, .items-5").empty();
                let idx = num - 1;
                const items = locs[idx];
                items.forEach((item, idx) => {
                    if (idx < 5) {
                        _processItemDetail(item, ".items-0");
                    } else {
                        _processItemDetail(item, ".items-5");
                    }
                })
            }

            _processItemDetail = (item, col) => {
                let dummy = $(".dummy.location-item").clone().removeClass("hidden dummy").appendTo(col);
                let container = dummy.find(".card-body");
                for (var key in item) {
                    const val = item[key];
                    container.find("span[id='" + key + "']").html(val);
                }
            }

            $('#pagination').twbsPagination({
                totalPages: pagedLocations.length,
                visiblePages: 7,
                onPageClick: function(e, num) {
                    processLocationItems(pagedLocations, num);
                }
            });
        });
    </script>
    <div class="col">
        <div class="row location-items">
            <div class="col items-0"></div>
            <div class="col items-5"></div>
        </div>
        <div class="row">
            <div class="col">
                <ul id="pagination" class="pagination-sm justify-content-center"></ul>
            </div>
        </div>
    </div>
    <div class="dummy location-item my-3 hidden">
        <div class="card" style="height:325px;">
            <div class="card-body">
                <div class="row h-100">
                    <div class="col my-auto px-5">
                        <div class="row my-2">
                            <div class="col">
                                <span class="font-weight-bold" id="nama_bank_sampah"></span>
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col">
                                <span id="address"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkaOqGZ8nJ-MW4oA3xOLr6tU-eu9Dms5s&callback=loadMap"></script> -->

<?php include 'templates/footer.php'; ?>