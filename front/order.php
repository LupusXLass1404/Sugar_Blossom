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
        <div class="col-lg-4">
            <?php if(isset($SESSION['user'])):?>
                <input type="hidden" name="user" value="<?=$SESSION['user'];?>">
                <div>
                    <input type="text" name="customer_name" required>
                </div>
            <?php else:?>
                <a href="index.php?do=login">Please log in before checkout.</a>
            <?php endif;?>
            <a href="index.php?do=checkout">Checkout</a>
            <div id="cart"></div>
            <hr>
            Total: £<span id="cartTotal"></apan>

        </div>
    </div>
</div>

<script>
    var menuData = null;

    fetch("./api/getMenu.php")
    .then(response => response.json())
    .then(data => {
        menuData = data;

        // 頁面開啟時先生成購物車
        updateCart();
    })
    .catch(err => console.error(err));

    // 更新購物車
    function updateCart() {
        // 取出購物車資料
        const cart = JSON.parse(localStorage.getItem('cart'));
        let tmp = '';
        let total = 0;

        if(cart){
            cart.forEach(function(e){
                const item = menuData.find(i => i.id == e.id);
                const prices = item.price * e.qty;
                total += Number(prices);
                tmp += `${item.name} x${e.qty} = £${prices.toFixed(2)}<br>`
            })
            $('#cart').html(tmp);
        }
        $('#cartTotal').text(total.toFixed(2));
    }
</script>

