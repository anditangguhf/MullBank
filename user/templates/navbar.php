<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="navbar-brand navbarItems" href="<?php echo constant("BASE_URL"); ?>" id="homeNavBar"><i class="fas fa-home"></i></a>
            <div class="d-none text-white mr-3" id="homeNavBarFont">Home</div>
        </li>
        <li class="nav-item">
            <a class="navbar-brand navbarItems" href="<?php echo constant("BASE_URL"); ?>/calculator.php" id="calcNavBar"><i class="fas fa-calculator"></i></a>
            <div class="d-none text-white mr-3" id="calcNavBarFont">Mull Kalkulator</div>
        </li>
        <?php
        if(isset($_SESSION["username"])){
            ?>
            <li class="nav-item">
                <a class="navbar-brand navbarItems" href="<?php echo constant("BASE_URL"); ?>/transaction.php" id="transNavBar"><i class="fas fa-money-check"></i></a>
                <div class="d-none text-white mr-3" id="transNavBarFont">Transaksi</div>
            </li>

            <li class="nav-item">
                <a class="navbar-brand navbarItems" href="<?php echo constant("BASE_URL"); ?>/critics.php" id="ksNavBar"><i class="fas fa-star"></i></a>
                <div class="d-none text-white mr-3" id="ksNavBarFont">Kritik & Saran</div>
            </li>
            <?php
        }?>
        <li class="nav-item">
            <a class="navbar-brand navbarItems" href="<?php echo constant("BASE_URL"); ?>/about.php" id="aboutNavBar"><i class="fas fa-info-circle"></i></a>
            <div class="d-none text-white mr-3" id="aboutNavBarFont">Tentang Kami</div>
        </li>
        <li class="nav-item">
            <a class="navbar-brand navbarItems" href="<?php echo constant("BASE_URL"); ?>/locator.php" id="locNavBar"><i class="fas fa-map-marked-alt"></i></a>
            <div class="d-none text-white mr-3" id="locNavBarFont">Lokasi</div>
        </li>
    </ul>

    <?php
    if(!isset($_SESSION["username"])){
        ?>
        <form class="form-inline mr-2">
            <button type="button" class="btn btn-sm btn-primary sign-up" data-toggle="modal" data-target="#modal">Sign Up</button>
        </form>
        <form class="form-inline">
            <button type="button" class="btn btn-sm btn-primary log-in" data-toggle="modal" data-target="#modal">Log In</button>
        </form>
        <?php
    }else{
        ?>
        <button id="buttonLogout" class="btn btn-sm btn-primary">Log Out</button>

        <?php
    }?>

    </div>
</nav>
