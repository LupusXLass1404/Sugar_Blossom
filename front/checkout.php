<?php
    if(!isset($_SESSION['user'])){
        to('index.php?do=login');
        exit;
    }
?>

<!-- <i class="fa-solid fa-cart-shopping"></i> -->
<div class="container mt-3">
    <h2>Checkout</h2>
    <div class="row">
        <div class="col-lg-8">
            <form id="checkoutForm" class="py-2 px-2 checkout-form ">
                <input type="hidden" name="username" value="<?=$_SESSION['user'];?>">
                <div class="checkout-row">
                    <div class="checkout-col">
                        <label for="customer_name">Name:</label>
                        <input type="text" id="customer_name" name="customer_name" placeholder="Name" required>
                    </div>
                    <div class="checkout-col">
                        <label for="customer_phone">Phone:</label>
                        <input type="tel" id="customer_phone" name="customer_phone" placeholder="Phone" required>
                    </div>
                </div>

                <div class="checkout-field">
                    <label for="pickup">Pickup Time:</label>
                    <input type="date" id="pickup" name="pickup" required>
                    <small>The cake requires at least three days to prepare.</small>
                </div>

                <div class="checkout-field">
                    <label for="note">Note:</label>
                    <textarea id="note" name="note" placeholder="Note"></textarea>
                </div>

                <div id="error"></div>
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

    // 傳數據到後台
    document.addEventListener("DOMContentLoaded", function() {
        const form = document.getElementById('checkoutForm');
        const errorId = document.getElementById('error');

        form.addEventListener("submit", function(e){
            e.preventDefault();

            // 取得表單資料
            const formData = new FormData(form);
            const data = {
                user: formData.get("username"),
                customer_name: formData.get("customer_name"),
                customer_phone: formData.get("customer_phone"),
                item: JSON.parse(localStorage.getItem('cart')),
                pickup: formData.get("pickup"),
                note: formData.get("note"),
            };

            fetch("./api/checkout.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(data)
            })
            // .then(response => response.text())
            .then(response => response.json())
            .then(result => {
                console.log(result)

                if (result.success) {
                    // 成功
                    window.location.href = "./index.php?do=user";
                    localStorage.removeItem('cart');
                } else {
                    // 失敗
                    errorId.textContent = result.message || "Checkout failed";
                    formFail();
                }
            })
            .catch(err => {
                console.log(err)
                errorId.textContent = "Network error. Please try again.";
                formFail();
            });
        })
    })

</script>
<script src="js/cart.js"></script>
