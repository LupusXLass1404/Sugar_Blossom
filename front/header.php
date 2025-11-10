<header class="navbar navbar-expand-lg bd-navbar sticky-top">
    <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap">
        <?php
            $rows = $Logo->find(['sh'=>1]);
        ?>
        <a class="navbar-brand logo" href="./index.php">
            <?=$rows['text'];?>
        </a>

        <ul class="nav">
            <li><a href="index.php#carousel">Home</a></li>
            <li><a href="index.php#about">About</a></li>
            <li><a href="index.php#menu">Menu</a></li>
            <li><a href="index.php#news">News</a></li>
            <li><a href="index.php#contact">Contact</a></li>
            <li class="nav-item nav" style="display: inline-flex;align-items: center;gap: 0.4rem;">
                <?php if(isset($_SESSION['admin'])):?>
                    <a href="./admin.php">Dashboard</a>
                <?php else:?>
                    <a href="index.php?do=login"><i class="fa-solid fa-user"></i> Admin Login</a>
                <?php endif;?>
            </li>
        </ul>
    </nav>
</header>

<!-- Register -->