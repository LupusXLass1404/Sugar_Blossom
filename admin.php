<!DOCTYPE html>
<html lang="en">
<?php include_once "./front/head.html";?>

<body>
    <!-- ====================== Header Start ====================== -->
    <?php include_once "./front/header.html";?>
    <!-- Header End -->


    <section id="admin">
        <div class="container-fluid">

            <div class="row py-5 px-5">
                <aside class="col-2">
                    <div class="options">
                        <div class="logo" style="padding: 16px;">
                            Sugar Blossom
                        </div>
                        <ul>
                            <li><a href="">LOGO</a></li>
                            <li><a href="">目錄</a></li>
                            <li><a href="">輪播</a></li>
                            <li><a href="">關於</a></li>
                            <li><a href="">菜單</a></li>
                            <li><a href="">最新消息</a></li>
                            <li><a href="">聯絡我們（圖片）</a></li>
                            <li><a href="">跑馬燈</a></li>
                            <li><a href="">版權聲明</a></li>
                            <li><a href="">進站人數</a></li>
                        </ul>
                    </div>

                </aside>
                <main class="col-10 py-4 px-5">
                    <div class="interface">
                        <!-- ====================== Main Start ====================== -->
                        <?php
                            $do = $_GET['do'] ?? 'logo';
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