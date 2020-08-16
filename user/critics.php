<?php include 'templates/header.php'; ?>
<div class="row">
    <p>Bagikan pengalaman dan saran anda kepada kami. Tanggapan anda akan sangat berarti bagi kami :)</p>
</div>
<div class="row">
    <div class="col">
        <form>
            <div class="form-group">
                <textarea class="form-control" name="kritik_saran" id="kritikSaran" rows="3"></textarea>
            </div>
        </form>
        <div class="text-right">
            <button class="btn btn-primary tulis-komentar" type="button">Batal</button>
            <button class="btn btn-primary thank-you" type="button" data-toggle="modal" data-target="#modal">Kirim</button>
        </div>

        <div class="thankyou-dummy hidden">
            <div class="dummy-title"><span>Thank you!!</span></div>
            <div class="dummy-body">
                <div class="row text-center">
                    <div class="col">
                        <img src="/user/assets/img/tq.png" alt="thankyou" style="width:200px;height:100px">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Terima kasih telah membantu kami mengembangkan MullBank</p>
                    </div>
                </div>
            </div>
            <div class="dummy-footer">
                <div class="text-right">
                    <a href="/user"><button class="btn btn-primary" type="button">Kembalu ke home</button></a>
                    <button class="btn btn-primary tulis-komentar" data-dismiss="modal" type="button">Tulis komentar lainnya</button>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include 'templates/footer.php'; ?>
