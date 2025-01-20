<!DOCTYPE html>
<html lang="en">
    <?php include_once "./front/head.html";?>
<body>
    <!-- ====================== Header Start ====================== -->
    <?php include_once "./front/header.html";?>
    <!-- Header End -->

    
    <!-- ====================== Main Start ====================== -->
    <?php
    // $do = if(isset($_GET['do'])) $_GET['do'];
    $do = "main";
    include "./front/{$do}.html";
    ?>
    <!-- Main End -->

    <!-- ====================== Footer Start ====================== -->
    <?php include_once "./front/footer.html";?>
    <!-- Footer End -->

</body>

</html>