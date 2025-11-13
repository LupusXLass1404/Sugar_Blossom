<?php
    if(!isset($_SESSION['user'])){
        to('index.php?do=login');
        exit;
    }
?>

<div class="container mt-3">
    <h2>Order</h2>
    <div class="row">
        <div class="col-lg-8 order-main">
            <form>
                <div>
                    Username: <?=$_SESSION['user'];?>
                </div>
                <div>
                    Name: <input type="text" name="customer_name" required>
                </div>
                <div>
                    Phone: <input type="tel" name="customer_phone" required>
                </div>
                <div>
                    Pickup Time: <input type="date" id="date" name="date"> The cake requires at least three days to prepare.
                </div>
                <div>
                    Note: <textarea name="note"></textarea>
                </div>
            </form>
        </div>

        <!-- 購物車 -->
        <div class="col-lg-4">
            <?php if(isset($_SESSION['user'])):?>
                <a href="index.php?do=checkout">Checkout</a>
            <?php else:?>
                <a href="index.php?do=login">Please log in before checkout.</a>
            <?php endif;?>
            <div id="cart"></div>
            <hr>
            Total: £<span id="cartTotal"></apan>
        </div>
    </div>
</div>

<script>
    const dateInput = document.getElementById('date');

    // 取得今天日期
    const today = new Date();

    // 計算三天後
    today.setDate(today.getDate() + 3);

    // 轉成 YYYY-MM-DD 格式
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // 月份從0開始
    const dd = String(today.getDate()).padStart(2, '0');
    const minDate = `${yyyy}-${mm}-${dd}`;

    // 設定 min 屬性
    dateInput.min = minDate;
</script>
<script src="js/cart.js"></script>
