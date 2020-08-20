<?php include 'templates/header.php';?>

<div class="row mb-5">
    <div class="col">
        <div class="form-group">
            <select class="form-control form-control-sm" id="jenisBarang" name="jenisBarang">
                <option value="None">-- Jenis Barang --</option>
                <?php

                // $jb = $conn->query("SELECT * ")

                ?>
            </select>
            <label for="jenisBarang">Jenis Barang</label>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-sm" name="berat" id="berat">
            <label for="berat">Weight (kg)</label>
        </div>
        <button class="btn btn-sm btn-primary calc-count">Check</button>
    </div>
</div>

<!-- table -->
<div class="row">
    <div class="col">
        <table class="datatables table table-striped table-bordered calc-table" style="width:100%">
            <thead>
                <tr>
                    <td>Jenis Barang</td>
                    <td>Harga per Kg</td>
                    <td>Jumlah Input</td>
                    <td>Harga Total</td>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
