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
                    <img src="./upload/<?=$row['img'];?>" class="d-block w-100" >
                </div>
                <?php
                    endforeach;
                ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
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
                <button class="admin-button">Contact Us</button>
            </div>
        </div>
    </div>
</section>
<!-- About End -->

<!-- ====================== Menu Start ====================== -->
<section id="menu">
    <div class="container-fluid py-5">
        <div id="menu-main" class="row menu-ul">
            <div class="menu-li">
                <img src="./images/default.jpg" alt="">蛋糕
            </div>
            <div class="menu-li">
                <img src="./images/default.jpg" alt="">
                <div class="menu-text">
                    ｜餅乾｜
                    看更多
                </div>
            </div>
            <div class="menu-li"> <img src="./images/default.jpg" alt="">｜馬卡龍｜</div>
            <div class="menu-li"> <img src="./images/default.jpg" alt="">｜酥皮、塔｜</div>
            <div class="menu-li"> <img src="./images/default.jpg" alt="">｜酥皮、塔｜</div>
        </div>
    </div>
</section>
<script>
    const colors = ['#FF5733', '#33FF57', '#3357FF', '#FF33A6'];
    const menuItems = document.querySelectorAll('.menu-li');

    menuItems.forEach((item, index) => {
        item.style.backgroundColor = colors[index % colors.length];
    });

    // 為每個 .menu-li 元素綁定事件
    menuItems.forEach(item => {
        item.addEventListener('mouseover', () => hoverMenuItem(item));
        item.addEventListener('mouseout', resetHover);
        item.addEventListener('click', () => selectMenuItem(item));
    });

    function hoverMenuItem(element) {
        // 當 hover 時，加上 hover 類別
        if (!element.classList.contains('active')) {
            element.classList.add('hover');
            const img = element.querySelector('img');
            img.classList.add('hover');
        }
    }

    function resetHover() {
        // 滑鼠離開時移除 hover 類別
        menuItems.forEach(item => {
            item.classList.remove('hover');
            const img = item.querySelector('img');
            img.classList.remove('hover');
        });
    }

    function selectMenuItem(element) {
        // 點擊時，將 active 類別添加到被點擊的項目，並移除其他項目的 active 類別
        menuItems.forEach(item => {
            item.classList.remove('active')
            const img = item.querySelector('img');
            img.classList.remove('active');
        });
        element.classList.add('active');
        const img = element.querySelector('img');
        img.classList.add('active');
    }

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
            <div class="col-lg-6">
                <div class="news-big-img com-img" style="background-image: url('./upload/<?=$row_1['img'];?>');"></div>
                <h2><?=$row_1['title']?></h2>
                <p><?=$row_1['text']?></p>
            </div>
            
            <div class="col-lg-6">
                <?php
                    foreach($rows as $row):
                ?>
                <div class="news-row pb-4">
                    <div class="news-img com-img" style="background-image: url('./upload/<?=$row['img'];?>');"></div>
                    <div class="news-content">
                        <h2><?=$row['title']?></h2>
                        <p><?=$row['text']?></p>
                    </div>
                </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
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