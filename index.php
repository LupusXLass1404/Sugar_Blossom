<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sugar Blossom</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="./images/favicon.ico">

    <!-- reset css -->
    <link rel="stylesheet" href="./css/reset.css">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- bootstrap@5.3.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <!-- font Awesome -->
    <script src="https://kit.fontawesome.com/a3ca2244ae.js" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- ====================== Header Start ====================== -->
    <header class="navbar navbar-expand-lg bd-navbar sticky-top">
        <nav class="container-xxl bd-gutter flex-wrap flex-lg-nowrap">

            <a class="navbar-brand" href="./index.html">Sugar Blossom</a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="#" class="nav-link active" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Menu</a></li>
                <li class="nav-item"><a href="#" class="nav-link">News</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                <li class="nav-item nav">Cart | Dashboard | Register | Login | <i class="fa-solid fa-user"></i>
                    user
                </li>
            </ul>
        </nav>
    </header>
    <!-- Header End -->

    
    <!-- ====================== Main Start ====================== -->
    <?php
    // $do = if(isset($_GET['do'])) $_GET['do'];
    $do = "main";
    include "./front/{$do}.html";
    ?>
    <!-- Main End -->

    <!-- ====================== Footer Start ====================== -->
    <footer>
        <div class="container py-5">

        </div>
    </footer>
    <!-- Footer End -->

</body>

</html>