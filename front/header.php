<header class="navbar navbar-expand-lg bd-navbar sticky-top">
    <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap">
        <?php
            $rows = $Logo->find(['sh'=>1]);
        ?>
        <a class="navbar-brand logo" href="./index.php">
            <?=$rows['text'];?>
        </a>

        <ul class="nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#news">News</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="nav-item nav">
                <a href="./admin.php">Dashboard</a>
                | <a href="./index.php?do=login">Login</a> | <i class="fa-solid fa-user"></i>user
            </li>
        </ul>
    </nav>
</header>

<!-- Register -->