<?php include 'templates/header.php'; ?>

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

<?php include 'templates/footer.php'; ?>
