<?php include 'templates/header.php'; ?>

<script type="text/javascript" src="assets/googlemap.js"></script>

<style>
    #map {
			width: 80%;
			height: 400px;
			margin: 0 auto;
			border: 5px solid blue;
		}
		#data, #allData {
			display: none;
		}
</style>

<div class="row">
    <div class="col">
        Temukan lokasi MullBank terdekat dengan lokasi anda dan bergabunglah bersama kami
    </div>
</div>
<div class="row google-map">
    <div class="col">

    <div class="container">

		<?php 
			require 'education.php';
			$edu = new education;
			$coll = $edu->getCollegesBlankLatLng();
			$coll = json_encode($coll, true);
			echo '<div id="data">' . $coll . '</div>';

			$allData = $edu->getAllColleges();
			$allData = json_encode($allData, true);
			echo '<div id="allData">' . $allData . '</div>';			
		 ?>
		 
        <p align = middle>
		<div id="map"></div>
		</p>
	</div>

    </div>
</div>
<div class="row map-info">

</div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkaOqGZ8nJ-MW4oA3xOLr6tU-eu9Dms5s&callback=loadMap">
  </script>

<?php include 'templates/footer.php'; ?>
