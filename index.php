<?php include_once "./api/db.php";?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once "./front/head.html";?>
<body>
    <!-- ====================== Header Start ====================== -->
    <?php include_once "./front/header.php";?>
    <!-- Header End -->

    
    <!-- ====================== Main Start ====================== -->
    <?php
        $do = $_GET['do'] ?? 'main';
        $file="./front/{$do}.php";

        if(!file_exists($file)) $file="./front/main.php";

        include $file;
    ?>
    <!-- Main End -->

    <!-- ====================== Footer Start ====================== -->
    <?php include_once "./front/footer.php";?>
    <!-- Footer End -->

</body>

</html>