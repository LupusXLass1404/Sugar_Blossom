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
                        <li>* Facebook</li>
                        <li>* Instagram</li>
                        <li>* Twitter</li>
                        <li>* Youtube</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 p-3 px-5">
                    <h3>Services</h3>
                    <ul class="p-0">
                        <li><i class="fas fa-chevron-right"></i> Pricing</li>
                        <li>* Testimonials</li>
                        <li>* Customer Support</li>
                        <li>* Products & Services</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 p-3 px-5">
                    <h3>Useful</h3>
                    <ul class="p-0">
                        <li>* Newsletter</li>
                        <li>* Partnerships</li>
                        <li>* Privacy Policy</li>
                        <li>* Terms and Conditions</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 col-12 p-3 px-5">
                    <h3>Gallery</h3>
                    <div>
                        dsf
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center py-1 regular">
            <a href="https://github.com/LupusXLass1404/Sugar_Blossom" target="_blank">
                <i class="fa-brands fa-github"></i> github
            </a>
            <i class="fa-regular fa-copyright"></i> 2024 Nemophila. All Rights Reserved.
        </div>
    </div>
</footer>