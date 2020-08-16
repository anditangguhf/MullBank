<?php include 'templates/header.php'; ?>

<div class="row">
    <div class="col">
        <div class="home-banner text-center">
            <img src="/assets/img/logo.png" alt="Banner"/>
        </div>
    </div>
</div>
<div class="row">
    <div class="col text-center">
        <p class="card-text">MullBank merupakan Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="card-text">LET'S START TO<br/>MAKE CHANGE</p>
        <button type="button" class="btn btn-primary sign-up" data-toggle="modal" data-target="#modal">Join w/ Us</button>
    </div>
</div>

<!-- Modal dummies -->
<div class="login-dummy hidden">
    <div class="dummy-title"><span>Log In</span></div>
    <div class="dummy-body">
        <form>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control form-control-sm" name="username" id="username"/>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control form-control-sm" name="password" id="password"/>
            </div>
        </form>
    </div>
    <div class="dummy-footer">
        <button class="btn btn-sm btn-primary proceed" act="login">Log In</button>
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
                <label for="nama_lengkap">Nama Akun</label>
                <input type="text" class="form-control form-control-sm" name="nama_lengkap" id="nama_lengkap"/>
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
<?php include 'templates/footer.php'; ?>
