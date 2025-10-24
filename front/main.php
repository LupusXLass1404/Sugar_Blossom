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
                <div class="about-img com-img" style="background-image: url('./upload/<?=$row['img'];?>');"></div>
                <?php
                    $row = $About_image -> find(['right_sh'=>1]);
                ?>
                <div class="about-img com-img" style="background-image: url('./upload/<?=$row['img'];?>');"></div>
            </div>
            <div class="col-lg-6">
                <?php
                    $row = $About_text -> find(['sh'=>1]);
                ?>
                <p>About Sugar Blossom</p>
                <h1><?=$row['title'];?></h1>
                <br>
                <p><?=$row['text'];?></p>
                <br>
                <hr>
                <br><br>
                <a href="#contact"><button class="admin-button" >Contact Us</button></a>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- ====================== Menu Start ====================== -->
<section id="menu">
    <div class="container py-5">
        <h1>Menu</h1>
        <div class="row menu-main">
            <?php
                $rows = $Menu -> all();
                foreach($rows as $row):
            ?>
            <div class="menu-li" onclick="showModal('./modal/menu_intro.php?id=<?=$row['id']?>')">
                <div class="menu-img">
                    <img src="./upload/<?=$row['img'];?>" alt="<?=$row['name']?>">
                </div>
                <p><?=$row['name']?></p>
            </div>
            <?php endforeach;?>
        </div>

    </div>
</section>

<script>

</script>

<!-- Menu End -->

<!-- ====================== News Start ====================== -->
<section id="news">
    <div class="container py-5">
        <div class="row">
            <h1>News</h1>
            <?php
				$rows=$News->all(['sh'=>1], " limit 4");
                $row_1 = $rows[0];
                unset($rows[0]);
            ?>

            <!-- 最大最新的一個新聞 -->
            <div class="col-lg-6">
                <div class="news-big-img com-img" style="background-image: url('./upload/<?=$row_1['img'];?>');"></div>
                <h2><?=$row_1['title']?></h2>
                <p><?=$row_1['text']?></p>
            </div>

            <!-- 三個側邊新聞 -->
            <div class="col-lg-6">
                <?php
                    foreach($rows as $row):
                ?>
                <div class="news-row pb-4">
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
        <button class="admin-button">More news</button>
    </div>

</section>
<!-- News End -->

<!-- ====================== Contact Start ====================== -->
<section id="contact">
    <div class="container py-5">
        <div class="py-5 text-center">
            <h5>Direct communication</h5>
            <h1>Connect with Us</h1>
        </div>
        <div class="row contact-border">
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
                        <input type="submit">
                        <input type="reset">
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