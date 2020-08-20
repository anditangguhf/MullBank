</div>
</div>
</div>
<!-- Footer -->
<footer class="page-footer footer bg-dark mt-auto text-white pt-4">
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
        <!-- Grid row -->
        <div class="row justify-content-center text-center">
            <!-- Grid column -->
            <div class="col-sm-2 mb-md-0 mb-3"><a href="#"><i class="fa text-white fa-facebook-official"></i></a></div>
            <!-- Grid column -->
            <div class="col-sm-2 mb-md-0 mb-3"><a href="#"><i class="fa text-white fa-instagram"></i></a></div>
            <!-- Grid column -->
            <div class="col-sm-2 mb-md-0 mb-3"><a href="#"><i class="fab text-white fa-line"></i></a></div>
            <!-- Grid column -->
            <div class="col-sm-2 mb-md-0 mb-3"><a href="#"><i class="fa text-white fa-youtube-play"></i></a></div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="container-fluid text-center text-md-left py-3">
        <div class="row justify-content-center text-center">
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">Saran dan Pendapat</div>
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3 border-left border-right">Bantuan</div>
            <!-- Grid column -->
            <div class="col-md-3 mb-md-0 mb-3">Syarat Penggunaan</div>
        </div>
    </div>
</footer>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer"></div>
        </div>
    </div>
</div>

<!-- Modal dummies -->
<div class="login-dummy hidden">
    <div class="dummy-title"><span>Log In</span></div>
        <div class="dummy-body">
            <input type="hidden" name="act" value="login"/>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-sm" name="username" id="usernameLogin"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" name="password" id="passwordLogin"/>
            </div>
        </div>
        <div class="dummy-footer">
            <button class="btn btn-sm btn-primary proceed" act="login">Login</button>
        </div>
</div>

<div class="signup-dummy hidden">
    <div class="dummy-title"><span>Sign Up</span></div>
    <div class="dummy-body">
        <form>
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control form-control-sm" name="nama_lengkap" id="nama_lengkap"/>
            </div>
            <div class="form-group">
                <label for="nama_akun">Nama Akun</label>
                <input type="text" class="form-control form-control-sm" name="nama_akun" id="nama_akun"/>
            </div>
            <div class="form-group">
                <label for="handphone">No. Handphone</label>
                <input type="text" class="form-control form-control-sm" name="handphone" id="handphone"/>
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control form-control-sm" name="email" id="email"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" name="password" id="password"/>
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" class="form-control form-control-sm" id="confirm_pass"/>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control form-control-sm" name="alamat" id="alamat" rows="3"></textarea>
            </div>
        </form>
    </div>
    <div class="dummy-footer">
        <button class="btn btn-sm btn-primary proceed" act="signup">Sign Up</button>
    </div>
</div>
</body>
</html>
