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
                <li class="nav-item"><a class="nav-link cart-order" href="index.php?do=order">Order<span id="cart-count" class="cart-count">0</span></a></li>

                <?php if(isset($_SESSION['user'])): ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?do=user"><i class="fa-solid fa-user"></i> <?=$_SESSION['user'];?></a></li>
                <?php endif; ?>

                <?php if(isset($_SESSION['admin'])): ?>
                    <li class="nav-item"><a class="nav-link" href="admin.php">Dashboard</a></li>
                <?php endif; ?>

                <?php if(isset($_SESSION['admin']) || isset($_SESSION['user'])): ?>
                    <li class="nav-item"><a class="nav-link" href="api/logout.php">Logout</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="index.php?do=login"><i class="fa-solid fa-user"></i> Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</header>

<!-- Register -->
 <script>
    cartCount();
    function cartCount(){

        // 取出購物車資料
        let cart = JSON.parse(localStorage.getItem('cart')) || [];

        if (cart.length === 0) {
            $('#cart-count').css('display', 'none');
        } else {
            $('#cart-count').css('display', 'inline-block');
        }

        $('#cart-count').text(cart.length)
    }
 </script>