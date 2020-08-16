<?php include 'templates/header.php'; ?>

<div class="row trans-history">
    <div class="col">
        <div class="row user-info">
            <table class="table table-borderless">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Kelly Atmadja</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>BSD Ujung Banget No. 121</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>:</td>
                    <td>0812 3456 xxxx</td>
                </tr>
            </table>
        </div>
        <div class="row table-history mt-3">
            <table class="table table-bordered datatables">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Tanggal Transaksi</td>
                        <td>Jenis Barang</td>
                        <td>Berat (Qty)</td>
                        <td>Unit Price</td>
                        <td>Amount (Rp)</td>
                        <td>Lokasi MullBank</td>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>
<hr>
<div class="row invoice mt-3">
    <div class="col">
        <div class="row">
            <h2>Invoice</h2>
        </div>
        <div class="row invoice-info">
            <div class="col-6">
                <p>{nama_mullbank}</p>
                <p>{alamat}</p>
                <p>{no_telp}</p>
                <p>BILL TO</p>
                <p>{name}</p>
                <p>{alamat}</p>
                <p>{no_telp}</p>
                <p>{email}</p>
            </div>
            <div class="col">
                <p>INVOICE NO.</p>
                <p>{invoice_no}</p>
                <p>CUST ID</p>
                <p>{cust_id}</p>
            </div>
            <div class="col">
                <p>DATE</p>
                <p>{date}</p>
                <p>SALES NAME</p>
                <p>{sales_name}</p>
            </div>
        </div>
        <div class="row invoice-table">
            <div class="col">
                <table class="table table-bordered datatables">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Jenis Barang</td>
                            <td>Berat (Qty)</td>
                            <td>Unit Price</td>
                            <td>Amount (Rp)</td>
                        </tr>
                    </thead>
                    <tbody></tbody>
                    <tfoot>
                        <tr>
                            <td colspan="4">Subtotal</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>
