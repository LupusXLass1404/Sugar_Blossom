<?php include_once "./api/db.php";?>
<!DOCTYPE html>
<html lang="en">
<?php include_once "./front/head.html";?>

<body>
    <!-- ====================== Header Start ====================== -->
    <?php include_once "./front/header.php";?>
    <!-- Header End -->

    <section id="admin">
        <div class="container-fluid">

            <div class="row py-5 px-5">
                <aside class="col-2">
                    <div class="options">
                        <?php
                            $rows = $Logo->find(['sh'=>1]);
                        ?>
                        <a href="./admin.php"><div class="logo" style="padding: 16px;"><?=$rows['text'];?></div></a>
                        <ul>
                            <li><a href="?do=logo">Logo</a></li>
                            <li><a href="?do=dir">Top Menu</a></li>
                            <li><a href="?do=carousel">Home Slider</a></li>
                            <li><a href="?do=about_image">About Image</a></li>
                            <li><a href="?do=about_text">About Text</a></li>
                            <li><a href="?do=menu">Menu</a></li>
                            <li><a href="?do=news">News</a></li>
                            <li><a href="?do=contact">Contact Us Image</a></li>
                            <li><a href="?do=marquee">Marquee</a></li>
                            <li><a href="?do=copyright">Footer Copyright</a></li>
                            <li><a href="?do=link">Footer Links</a></li>
                            <li><a href="?do=gallery">Footer Gallery</a></li>
                            <li><a href="?do=visit">Visitor Count</a></li>
                        </ul>
                    </div>

                </aside>
                <main class="col-10 py-4 px-5">
                    <div class="interface">
                        <!-- ====================== Main Start ====================== -->
                        <?php
                            $do = $_GET['do'] ?? 'main';
                            $file="./backend/{$do}.php";

                            if(!file_exists($file)) $file="./backend/main.php";

                            include $file;
                        ?>
                        <!-- Main End -->
                    </div>
                </main>
            </div>
        </div>
    </section>


    <!-- ====================== Footer Start ====================== -->
    <?php include_once "./front/footer.html";?>
    <!-- Footer End -->

</body>

</html>