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
                <p><span style="color: #6C3A39">£<?=$p['price']?></span><br><?=$p['name']?></p>
            </div>

        <?php endforeach;?>
        </div>

        <!-- 購物車 -->
        <div class="col-lg-4 pb-5">
            <h3>Cart</h3>
            <!-- 購物列表 -->
            <div id="cart"></div>
            <div id="error"></div>
            <!-- 總價 -->
            <div class="cart-total">
                <span class="total-label">Total:</span>
                <span class="total-amount">£<span id="cartTotal"></span></span>
                <?php if(isset($_SESSION['user'])):?>
                    <a id="checkout" class="btn btn-brown checkout-btn" href="index.php?do=checkout">Go to Checkout</a>
                <?php else:?>
                    <a href="index.php?do=login" class="btn btn-brown checkout-btn"><button >Please log in before checkout</button></a>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>

<script src="js/cart.js"></script>
<script>
    checkoutBtnUpdate();
</script>

