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
                            $do = $_GET['do'] ?? 'main';
                        ?>
                        <a href="./admin.php"><div class="logo" style="padding: 16px; color: #663120;"><?=$rows['text'];?></div></a>
                        <ul>
                            <li><a href="?do=logo" class="<?= ($do == 'logo') ? 'active' : '' ?>">Logo</a></li>
                            <li><a href="?do=carousel" class="<?= ($do == 'carousel') ? 'active' : '' ?>">Home Slider</a></li>
                            <li><a href="?do=about_image" class="<?= ($do == 'about_image') ? 'active' : '' ?>">About Image</a></li>
                            <li><a href="?do=about_text" class="<?= ($do == 'about_text') ? 'active' : '' ?>">About Text</a></li>
                            <li><a href="?do=menu" class="<?= ($do == 'menu') ? 'active' : '' ?>">Menu</a></li>
                            <li><a href="?do=news" class="<?= ($do == 'news') ? 'active' : '' ?>">News</a></li>
                            <li><a href="?do=marquee" class="<?= ($do == 'marquee') ? 'active' : '' ?>">Marquee</a></li>
                            <!-- <li><a href="?do=visitor" class="<?= ($do == 'visitor') ? 'active' : '' ?>">Visitor Count</a></li> -->
                            <li><a href="api/logout.php">Logout</a></li>
                        </ul>
                    </div>

                </aside>
                <main class="col-10 py-4 px-5">
                    <div class="interface">
                        <!-- ====================== Main Start ====================== -->
                        <?php
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

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div id="modal-load" class="modal-content">
            </div>
        </div>
    </div>


    <!-- ====================== Footer Start ====================== -->
    <?php include_once "./front/footer.php";?>
    <!-- Footer End -->

</body>

</html>