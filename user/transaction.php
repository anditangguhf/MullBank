<?php include 'templates/header.php'; ?>

<div class="row trans-history">
    <div class="col">
        <div class="row user-info">
            <table class="table table-borderless">
                <tr>
                    <td class="tb-ui-1">Nama</td>
                    <td class="tb-ui-2">:</td>
                    <td class="tb-ui-3"><?php echo $_SESSION['username'] ?></td>
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
<div class="invoice-dummy hidden">
    <div class="dummy-title"><span>Invoice</span></div>
        <div class="dummy-body">
            <div class="row invoice-info">
                <div class="col">
                    <div class="row">
                        <div class="col">
                            <div id="namaMullbank">Nama Mullbank</div>
                            <div id="alamatMullbank">Alamat Mullbank</div>
                            <div id="telpMullbank">Telp Mullbank</div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col">
                            <div class="border-bottom"><strong>BILL TO</strong></div>
                            <div><?php echo $_SESSION['username'] ?></div>
                            <div><?php echo $_SESSION['address'] ?></div>
                            <div><?php echo $_SESSION['mobile'] ?></div>
                            <div><?php echo $_SESSION['email'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="row text-center">
                        <div class="col">
                            <div class="border-bottom"><strong>INVOICE NO</strong></div>
                            <div id="order_no"></div>
                            <div class="border-bottom mt-2"><strong>CUST ID</strong></div>
                        </div>
                        <div class="col">
                            <div class="border-bottom"><strong>DATE</strong></div>
                            <div id="order_date"></div>
                            <div class="border-bottom mt-2"><strong>SALES NAME</strong></div>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <table class="table table-bordered datatables dummy invoice-table" style="width:100%">
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
                                <td id="subTotal"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
        <div class="dummy-footer"></div>
</div>

<?php include 'templates/footer.php'; ?>
