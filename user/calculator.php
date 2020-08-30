<?php include 'templates/header.php';?>

<div class="row mb-5">
    <div class="col">
        <form class="calc-form">
            <div class="form-group">
                <select class="form-control form-control-sm" id="jenisBarang" name="jenisBarang">
                    <option value="None" disabled selected>-- Jenis Barang --</option>
                    <?php
                    $jb = $conn->query("SELECT * FROM jenis_barang");
                    if ($jb->num_rows > 0)
                        while($row = $jb->fetch_assoc()) echo "<option value=".$row['harga'].">".$row['jenis']."</option>";
                    ?>
                </select>
                <label for="jenisBarang">Jenis Barang</label>
            </div>
            <div class="form-group">
                <input type="number" class="form-control form-control-sm" name="berat" id="berat" min="0" value="0"/>
                <label for="berat">Weight (kg)</label>
            </div>
        </form>
        <button class="btn btn-sm btn-primary calc-count">Check</button>
    </div>
</div>

<script>
$(document).ready(($)=>{
    var totalValue = 0;

    var table = $(".calc-table").DataTable({
        pageLength:4
    })

    $(".calc-count").click((e)=>{
        let tbd = $(".calc-table tbody");
        tbd.empty();
        // tbd.empty();
        const form = $(".calc-form");
        if(form.find("#jenisBarang").val() === null) {
            alert("Mohon pilih jenis barang terlebih dahulu!");
        } else {
            const jb = form.find("#jenisBarang");
            const berat = form.find("#berat");
            let calculate = parseInt(jb.val()) * parseInt(berat.val());
            table.row.add([
                jb.find("option:selected").text(),
                jb.val(),
                berat.val(),
                calculate
            ]).draw();
            totalValue+=calculate;
        }
        tbd.find("#ct-subtotal").html(totalValue);
    })
})
</script>

<!-- table -->
<div class="row">
    <div class="col">
        <table class="table table-striped table-bordered calc-table datatables dummy" style="width:100%">
            <thead class="text-center">
                <tr>
                    <td>Jenis Barang</td>
                    <td>Harga per Kg</td>
                    <td>Jumlah Input</td>
                    <td>Harga Total</td>
                </tr>
            </thead>
            <tbody></tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Total</td>
                    <td id="ct-subtotal"></td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
