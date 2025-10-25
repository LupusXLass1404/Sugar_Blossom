<footer>
    <div class="container-fluid p-0">
        <div class="marquee">
            <marquee behavior="scroll" direction="left" scrollamount="10">
                <?php
                    $rows = $Marquee -> all(['sh'=>1]);
                    foreach($rows as $row){
                        echo $row['text'] . " * ";
                    }
                ?>
            </marquee>
        </div>
        <div class="info py-3 px-5">
            <div class="row px-5">
                <div class="col-lg-3 col-md-6 col-12 p-3 px-5">
                    <h3>Social Media</h3>
                    <ul class="p-0">
                        <li><a href="https://www.facebook.com/" target="_blank"><i class="fas fa-chevron-right"></i> Facebook</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank"><i class="fas fa-chevron-right"></i> Instagram</a></li>
                        <li><a href="https://twitter.com/" target="_blank"><i class="fas fa-chevron-right"></i> Twitter</a></li>
                        <li><a href="https://www.youtube.com/" target="_blank"><i class="fas fa-chevron-right"></i> Youtube</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 p-3 px-5">
                    <h3>Services</h3>
                    <ul class="p-0">
                        <li style="opacity: 0.5;"><i class="fas fa-chevron-right"></i> Pricing</li>
                        <li style="opacity: 0.5;"><i class="fas fa-chevron-right"></i> Testimonials</li>
                        <li style="opacity: 0.5;"><i class="fas fa-chevron-right"></i> Customer Support</li>
                        <li style="opacity: 0.5;"><i class="fas fa-chevron-right"></i> Products & Services</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 p-3 px-5">
                    <h3>Useful</h3>
                    <ul class="p-0">
                        <li><a href="https://lupusxlass1404.github.io/" target="_blank"><i class="fas fa-chevron-right"></i> Partnerships</a></li>
                        <li><i class="fas fa-chevron-right"></i> Today's Visitors: <?=$Visitor->sum('visit_count',['visit_date'=>date("Y-m-d")]);?></li>
                        <li><i class="fas fa-chevron-right"></i> Total Visitors: <?=$Visitor->sum('visit_count');?></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 p-3 px-5">
                    <h3>Partners</h3>

                    <ul class="p-0">
                        <li><a href="https://lupusxlass1404.github.io/PinkBakery/" target="_blank"><i class="fas fa-chevron-right"></i> PinkBakery</a></li>
                        <li><a href="https://lupusxlass1404.github.io/113_WebFrontend_Final/" target="_blank"><i class="fas fa-chevron-right"></i> Charcoal barbecue</a></li>
                        <li style="opacity: 0.5;"><i class="fas fa-chevron-right"></i> More to come soon...</li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="text-center py-1 regular">
            <a href="https://github.com/LupusXLass1404/Sugar_Blossom" target="_blank">
                <i class="fa-brands fa-github"></i> github
            </a>
            <i class="fa-regular fa-copyright"></i> 2025 Misty Moon. All Rights Reserved.
        </div>
    </div>
</footer>