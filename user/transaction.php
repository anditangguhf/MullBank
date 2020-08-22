<?php include 'templates/header.php'; ?>

<div class="row trans-history">
    <div class="col">
        <div class="row user-info">
            <table class="table table-borderless">
                <tr>
                    <td class="tb-ui-1">Nama</td>
                    <td class="tb-ui-2">:</td>
                    <td class="tb-ui-3"><?php echo $_SESSION['nama_lengkap'] ?></td>
                </tr>
                <tr>
                    <td class="tb-ui-1">Alamat</td>
                    <td class="tb-ui-2">:</td>
                    <td class="tb-ui-3"><?php echo $_SESSION['address'] ?></td>
                </tr>
                <tr>
                    <td class="tb-ui-1">No. Telp</td>
                    <td class="tb-ui-2">:</td>
                    <td class="tb-ui-3"><?php echo $_SESSION['mobile'] ?></td>
                </tr>
            </table>
        </div>
        <div class="row table-transactions mt-3">
            <div class="col">
                <table class="table table-bordered table-striped datatables">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Tanggal Transaksi</td>
                            <td>Amount (Rp)</td>
                            <td>Lokasi MullBank</td>
                            <td></td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $user = $_SESSION['username'];
                        $transactions = $conn->query("SELECT * FROM `tbl_order` WHERE `order_receiver_name` = '$user'");
                        while($row = $transactions->fetch_assoc()) {
                            $transaction_data = [
                                "order_id"=>$row['order_id'],
                                "order_no"=>$row['order_no'],
                                "order_date"=>$row['order_date']
                            ];
                            ?>
                            <tr>
                                <td><?php echo $row['order_no'] ?></td>
                                <td><?php echo $row['order_date'] ?></td>
                                <td><?php echo $row['order_total_after_tax'] ?></td>
                                <td>1</td>
                                <td><a href="#" data-toggle="modal" data-target="#modal"><i class="fa fa-eye show-invoice" transaction-data='<?php echo json_encode($transaction_data) ?>'></i></a></td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="invoice-dummy hidden" modal-size="modal-xl" no-footer="1">
    <div class="dummy-title"><span>Mull Bank Invoice</span><button class="btn btn-primary ml-3"><i class="fas fa-file-pdf print-invoice"></i> Download Invoice PDF</btn></div>
        <div class="dummy-body">
            <div class="row invoice-info">
                <div class="col">
                    To,<br/>
                    <strong>RECEIVER (BILL TO)</strong><br/>
                    Name: <?php echo $_SESSION['nama_lengkap'] ?><br/>
                    Billing Address: <?php echo $_SESSION['address'] ?>
                </div>
                <div class="col">
                    Reverse Charge<br/>
                    Invoice No.: <span id="order_id"></span><br/>
                    Invoice Date: <span id="order_date"></span><br/>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered datatables dummy invoice-table" style="width:100%">
                        <thead class="text-center">
                            <tr>
                                <td class="align-middle" rowspan="2">Sr. No</td>
                                <td class="align-middle" rowspan="2">Rubbish Type</td>
                                <td class="align-middle" rowspan="2">Weight (kg)</td>
                                <td class="align-middle" rowspan="2">Price per Kg</td>
                                <td class="align-middle" rowspan="2">Price before Tax</td>
                                <td class="align-middle" colspan="2">Tax (%)</td>
                                <td class="align-middle" rowspan="2">Total</td>
                            </tr>
                            <tr>
                                <td>Rate</td>
                                <td>Tax Price</td>
                            </tr>
                        </thead>
                        <tbody></tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">Total Price Before Tax</td>
                                <td id="totalBeforeTax"></td>
                            </tr>
                            <tr>
                                <td colspan="7">Total Tax Price</td>
                                <td id="totalTax"></td>
                            </tr>
                            <tr>
                                <td colspan="7">Total Price After Tax</td>
                                <td id="totalAfterTax"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="dummy-footer"></div>
</div>

<?php include 'templates/footer.php'; ?>
