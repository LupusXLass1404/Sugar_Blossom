<div class="container mt-3">
    <h2>Order</h2>
    <div class="row">
        <div class="col-lg-8 order-main">
        <?php
            $products = $Menu -> all(['sh'=>1]);
            foreach($products as $p):
        ?>
            <div class="order-li">
                <div class="order-img menu-img shadow-sm">
                    <img src="./upload/<?=$p['img'];?>" alt="<?=$p['name']?>">
                    <div class="order-add">
                        <button onclick="showModal('./modal/order_detail.php?id=<?=$p['id']?>')"> + </button>
                    </div>
                </div>
                <p><?=$p['name']?></p>
            </div>

        <?php endforeach;?>
        </div>
        <div class="col-lg-4">
            <a href="index.php?do=checkout">Checkout</a>
        </div>


    </div>
</div>

<script>

</script>

<div class="container mt-3">
    <form action="api/checkout.php" method="post">
        <?php if(isset($SESSION['user'])):?>
            <input type="hidden" name="user" value="<?=$SESSION['user'];?>">
            <div>
                <input type="text" name="customer_name" required>
            </div>
        <?php else:?>
            <a href="index.php?do=login">Please log in before checkout.</a>
        <?php endif;?>
    </form>
</div>