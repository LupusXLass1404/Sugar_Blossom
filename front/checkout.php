<?php
    if(!isset($_SESSION['user'])){
        to('index.php?do=login');
        exit;
    }
?>

<i class="fa-solid fa-cart-shopping"></i>
<div class="container mt-3">
    <h2>Checkout</h2>
    <div class="row">
        <div class="col-lg-8">
            <form action="" class="py-2 px-2 checkout-form ">
                <div class="checkout-row">
                    <div class="checkout-col">
                        <label for="customer_name">Name:</label>
                        <input type="text" id="customer_name" name="customer_name" placeholder="Name">
                    </div>
                    <div class="checkout-col">
                        <label for="customer_phone">Phone:</label>
                        <input type="tel" id="customer_phone" name="customer_phone" placeholder="Phone">
                    </div>
                </div>

                <div class="checkout-field">
                    <label for="pickup">Pickup Time:</label>
                    <input type="date" id="pickup" name="pickup">
                    <small>The cake requires at least three days to prepare.</small>
                </div>

                <div class="checkout-field">
                    <label for="note">Note:</label>
                    <textarea id="note" name="note" placeholder="Note"></textarea>
                </div>

                <div class="checkout-buttons">
                    <input class="btn btn-brown" type="submit" value="Checkout">
                    <a href="./index.php?do=order">
                        <input type="button" class="btn btn-secondary" value="Back"></button>
                    </a>
                </div>
            </form>
        </div>

        <!-- 購物車 -->
        <div class="col-lg-4 pb-5">
            <h3>Cart</h3>

            <!-- 購物列表 -->
            <div id="cart"></div>

            <!-- 總價 -->
            <div class="cart-total">
                <span class="total-label">Total:</span>
                <span class="total-amount">£<span id="cartTotal"></span></span>
            </div>
        </div>
    </div>
</div>

<script>
    const dateId = document.getElementById('pickup');

    // // 取得今天日期
    // const today = new Date();

    // // 計算三天後
    // today.setDate(today.getDate() + 3);

    // // 轉成 YYYY-MM-DD 格式
    // const yyyy = today.getFullYear();
    // const mm = String(today.getMonth() + 1).padStart(2, '0'); // 月份從0開始
    // const dd = String(today.getDate()).padStart(2, '0');
    // const minDate = `${yyyy}-${mm}-${dd}`;

    // // 設定 min 屬性
    // dateInput.min = minDate;
    // dateInput.max = minDate;

    const getDate = (days) => {
        // 取得今天日期
        const d = new Date();

        // 增加天數
        d.setDate(d.getDate() + days);

        // T 分隔日期與時間
        return d.toISOString().split('T')[0];
    };

    dateId.min = getDate(3);
    dateId.max = getDate(30);
</script>
<script src="js/cart.js"></script>
