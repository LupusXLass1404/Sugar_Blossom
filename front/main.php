<!-- ====================== Carousel Start ====================== -->
<section id="carousel">
    <div class="container-fluid p-0">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    $rows = $Carousel -> all(['sh'=>1]);
                    foreach($rows as $row):
                ?>
                <div class="carousel-item active">
                    <img src="./upload/<?=$row['img'];?>" class="d-block w-100">
                </div>
                <?php
                    endforeach;
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<!-- Carousel End -->

<!-- ====================== About Start ====================== -->
<section id="about">
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-6 about-imgs">
                <?php
                    $row = $About_image -> find(['left_sh'=>1]);
                ?>
                <div class="about-img com-img img-up slid-top" style="background-image: url('./upload/<?=$row['img'];?>');"></div>
                <?php
                    $row = $About_image -> find(['right_sh'=>1]);
                ?>
                <div class="about-img com-img img-down slid-down" style="background-image: url('./upload/<?=$row['img'];?>');"></div>
            </div>
            <div class="col-lg-6">
                <?php
                    $row = $About_text -> find(['sh'=>1]);
                ?>
                <p class="slid-right">About Sugar Blossom</p>
                <h1 class="slid-right"><?=$row['title'];?></h1>
                <br>
                <p class="slid-right"><?=$row['text'];?></p>
                <br>
                <hr>
                <br><br>
                <a href="#contact" class="slid-right"><button class="admin-button" >Contact Us</button></a>
            </div>
        </div>
    </div>
</section>

<!-- About End -->

<!-- ====================== Menu Start ====================== -->
<section id="menu">
    <div class="container py-5">
        <h1 class="slid-left">Menu</h1>
        <div class="row menu-main">
            <?php
                $rows = $Menu -> all(['sh'=>1]);
                foreach($rows as $row):
            ?>
            <div class="menu-li slid-down" onclick="showModal('./modal/menu_intro.php?id=<?=$row['id']?>')">
                <div class="menu-img">
                    <img src="./upload/<?=$row['img'];?>" alt="<?=$row['name']?>">
                </div>
                <p><?=$row['name']?></p>
            </div>
            <?php endforeach;?>
        </div>
        <p class="cent">
            <a href="index.php?do=order" class="slid-right"><button class="admin-button" >Order sweets</button></a>
        </p>
    </div>
</section>
<!-- Menu End -->

<!-- ====================== News Start ====================== -->
<section id="news">
    <div class="container py-5">
        <div class="row">
            <h1 class="slid-left">News</h1>
            <?php
				$rows=$News->all(['sh'=>1], " limit 4");
                $row_1 = $rows[0];
                unset($rows[0]);
            ?>

            <!-- 最大最新的一個新聞 -->
            <div class="col-lg-6">
                <div class="news-big" onclick="showModal('./modal/news_detail.php?id=<?=$row_1['id']?>')">
                    <div class="news-big-img com-img slid-left" style="background-image: url('./upload/<?=$row_1['img'];?>');"></div>
                    <h2 class="slid-left"><?=$row_1['title']?></h2>
                    <p class="text-muted slid-left"><?=substr($row_1['text'], 0, 300);?>...</p>
                </div>
            </div>

            <!-- 三個側邊新聞 -->
            <div class="col-lg-6">
                <?php
                    foreach($rows as $row):
                ?>
                <div class="news-row pb-4 slid-right" onclick="showModal('./modal/news_detail.php?id=<?=$row['id']?>')">
                    <div class="news-img com-img" style="background-image: url('./upload/<?=$row['img'];?>');"></div>
                    <div class="news-content">
                        <h3><?=$row['title']?></h3>
                        <p class="text-muted"><?=substr($row['text'], 0, 100)?> ...</p>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>

        <!-- 四個以上的新聞 -->
        <p class="cent">
            <button class="admin-button slid-right" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">More news</button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="news-more">
                <?php
                    $rows = $News->all(['sh' => 1], " limit 4,999");
                    foreach($rows as $row):
                ?>
                <div class="news-item pb-4" onclick="showModal('./modal/news_detail.php?id=<?=$row['id']?>')">
                    <div class="news-img com-img" style="background-image: url('./upload/<?=$row['img'];?>');"></div>
                    <div>
                        <h3><?=$row['title']?></h3>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
            <p class="cent">
                <button class="admin-button" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Close news</button>
            </p>
        </div>

    </div>

</section>
<!-- News End -->

<!-- ====================== Contact Start ====================== -->
<section id="contact">
    <div class="container py-5">
        <div class="py-5 text-center">
            <h5 class="slid-left">Direct communication</h5>
            <h1 class="slid-left">Connect with Us</h1>
        </div>
        <div class="row contact-border slid-down">
            <div class="col-lg-6 px-0 contact-img"></div>
            <div class="col-lg-6 px-0 contact-card">
                <form action="" class="p-5 contact-form">
                    <div>
                        <input type="text" placeholder="Name">
                        <input type="text" placeholder="Phone">
                    </div>
                    <div>
                        <input type="text" placeholder="Email">
                    </div>
                    <div>
                        <textarea style="height: 200px;" placeholder="Message"></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Submit">
                        <input type="reset" value="Reset">
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>
<!-- Contact End -->

<!-- modal -->
<div class="modal fade" id="exampleModal">
    <div class="modal-dialog">
        <div id="modal-load" class="modal-content">
        </div>
    </div>
</div>