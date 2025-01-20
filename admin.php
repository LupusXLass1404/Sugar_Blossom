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
                            <li>LOGO</li>
                            <li>目錄</li>
                            <li>輪播</li>
                            <li>關於</li>
                            <li>菜單</li>
                            <li>最新消息</li>
                            <li>聯絡我們（圖片）</li>
                            <li>跑馬燈</li>
                            <li>版權聲明</li>
                            <li>進站人數</li>
                        </ul>
                    </div>

                </aside>
                <main class="col-10 py-4 px-5">
                    <div class="interface">
                        <!-- ====================== Main Start ====================== -->
                        <?php
                        // $do = if(isset($_GET['do'])) $_GET['do'];
                        $do = "main";
                        include "./backend/{$do}.html";
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