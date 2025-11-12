<header class="navbar navbar-expand-lg bd-navbar sticky-top">
    <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap">
        <?php
            $rows = $Logo->find(['sh'=>1]);
        ?>
        <a class="navbar-brand logo" href="./index.php">
            <?=$rows['text'];?>
        </a>

        <button class="navbar-toggler navbar-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar" style="flex-grow: 0;">
            <ul class="nav navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php#carousel">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#menu">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#news">News</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#contact">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?do=order">Order</a></li>
                <li class="nav-item nav" style="display: inline-flex;align-items: center;gap: 0.4rem;">
                    <?php if(isset($_SESSION['admin'])):?>
                        <a class="nav-link" href="./admin.php">Dashboard</a>
                    <?php elseif(isset($_SESSION['user'])):?>
                        <a class="nav-link" href="index.php?do=user"><i class="fa-solid fa-user"></i> <?=$_SESSION['user'];?></a>
                        |
                        <a class="nav-link" href="api/logout.php">Logout</a>
                    <?php else:?>
                        <a class="nav-link" href="index.php?do=login"><i class="fa-solid fa-user"></i> Login</a>
                    <?php endif;?>
                </li>
            </ul>
        </div>
    </nav>
</header>

<!-- Register -->