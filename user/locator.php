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
    <?php
    $mq = $conn->query("SELECT * FROM locations");
    $locations = $mq->fetch_all(MYSQLI_ASSOC);
    ?>
    <script src="<?php echo constant('BASE_URL') ?>/assets/twbs.min.js"></script>
    <script>
    $(document).ready(($)=>{
        const locations = <?php echo json_encode($locations) ?>;
        let pagedLocations = [];
        let x = y = 0;
        for (let i = 0; i < locations.length; i++) {
            if(y==0) {
                pagedLocations[x] = [];
            }
            if(y<10) {
                pagedLocations[x].push(locations[i]);
                y++;
            }
            if(y>=10) {
                y = 0; x++;
            }
        }

        processLocationItems = (locs, num) => {
            $(".items-0, .items-5").empty();
            let idx = num-1;
            const items = locs[idx];
            items.forEach((item,idx)=>{
                if(idx < 5) {
                    _processItemDetail(item, ".items-0");
                } else {
                    _processItemDetail(item, ".items-5");
                }
            })
        }

        _processItemDetail = (item, col) => {
            let dummy = $(".dummy.location-item").clone().removeClass("hidden dummy").appendTo(col);
            let table = dummy.find("table");
            for (var key in item) {
                const val = item[key];
                table.find("td[id='"+key+"']").html(val);
            }
        }

        $('#pagination').twbsPagination({
            totalPages: pagedLocations.length,
            visiblePages: 7,
            onPageClick: function (e, num) {
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
        <div class="card p-auto" style="height:400px;">
            <div class="card-body">
                <table style="width:100%">
                    <tr>
                        <td class="td-loc-item-1">Nama Bank Sampah</td>
                        <td class="td-loc-item-2">:</td>
                        <td class="td-loc-item-3" id="nama_bank_sampah"></td>
                    </tr>
                    <tr>
                        <td class="td-loc-item-1">Alamat</td>
                        <td class="td-loc-item-2">:</td>
                        <td class="td-loc-item-3" id="address"></td>
                    </tr>
                    <tr>
                        <td class="td-loc-item-1">Kelurahan</td>
                        <td class="td-loc-item-2">:</td>
                        <td class="td-loc-item-3" id="kelurahan"></td>
                    </tr>
                    <tr>
                        <td class="td-loc-item-1">Kecamatan</td>
                        <td class="td-loc-item-2">:</td>
                        <td class="td-loc-item-3" id="kecamatan"></td>
                    </tr>
                    <tr>
                        <td class="td-loc-item-1">Tipe</td>
                        <td class="td-loc-item-2">:</td>
                        <td class="td-loc-item-3" id="type"></td>
                    </tr>
                    <tr>
                        <td class="td-loc-item-1">Lat</td>
                        <td class="td-loc-item-2">:</td>
                        <td class="td-loc-item-3" id="lat"></td>
                    </tr>
                    <tr>
                        <td class="td-loc-item-1">Lng</td>
                        <td class="td-loc-item-2">:</td>
                        <td class="td-loc-item-3" id="lng"></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkaOqGZ8nJ-MW4oA3xOLr6tU-eu9Dms5s&callback=loadMap">
</script>

<?php include 'templates/footer.php'; ?>
