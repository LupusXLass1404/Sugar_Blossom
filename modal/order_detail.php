<?php include_once "../api/db.php";
    $row = $Menu -> find($_GET['id']);
?>
<div class="modal-header">
    <span class="modal-title" id="exampleModalLabel"><?=$row['name'];?></span>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>


<!-- 身體 -->
<div class="modal-body">
    <div style="display: flex; gap: 20px; align-items: flex-start;">
        <!-- 左邊圖片 40% -->
        <div style="flex: 0 0 35%;">
            <img src="./upload/<?=$row['img'];?>"
                alt="<?=$row['name']?>"
                style="width: 100%; height: 200px; object-fit: cover;">
        </div>

        <!-- 右邊文字 60% -->
        <div style="flex: 0 0 60%;">
            <p><?=$row['depiction']?></p>
        </div>
    </div>
    <input id="item_id" type="hidden" name="id" value="<?= $_GET['id'];?>">
    <input id="basePrice" type="hidden" name="price" value="<?= $row['price'];?>">

    <!-- 蛋糕客製 -->
    <?php if(false):?>
        <!-- 製做中 -->
        <div>
            <div>
                <input type="radio" name="size" value="slice" checked> Single slice: £<span class="price"></span>
            </div>
            <div>
                <input type="radio" name="size" value="whole"> Whole Cake: £<span class="price"></span>
            </div>
        </div>
        <hr>
        <div>
            <div>
                <input type="radio" name="size" value="6" checked> 6-inch
            </div>
            <div>
                <input type="radio" name="size" value="8"> 8-inch: +£<span class="price"></span>
            </div>
            <div>
                <input type="radio" name="size" value="10"> 10-inch: +£<span class="price"></span>
            </div>
        </div>
    <?php endif;?>
</div>

<!-- <script>
    const basePrice = parseFloat(document.getElementById('basePrice').value);
    initPrice();

    function initPrice(){
        document.querySelectorAll('input[name="size"]').forEach(radio => {
            const span = radio.closest('div').querySelector('.price'); // 找到同一個 label 內的 span
            let price = 0;

            if (radio.value === 'slice') {
                price = basePrice;
            } else if (radio.value === 'whole') {
                price = basePrice * 7;
            }

            span.textContent = price;
        });
    }
</script> -->


<!-- 底部 -->
<div class="modal-footer" style="justify-content: space-between;">
    <div style="float: left; display: flex; gap: 8px">
        <div class="quantity">
            <button class="btn btn-brown" onclick="dec()">-</button>
            <span id="qty">1</span>
            <button class="btn btn-brown" onclick="inc()">+</button>
        </div>
        <div>
            Total: £<span id="total" class="price"><?= $row['price'];?></span>
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-brown" onclick="addToCart()">Add</button>
    </div>
</div>

<script>
    var basePrice = parseFloat($('#basePrice').val());
    var qty = 1;
    var total = basePrice;

    function totalUpdate(){
        total = qty * basePrice;
        $('#qty').html(qty);
        $('#total').html((qty * basePrice).toFixed(2));
    }

    function dec(){
        if(qty > 1){
            qty--
            totalUpdate();
        }
    }
    function inc(){
        qty++
        totalUpdate();
    }

    function addToCart(){
        // 得到id
        const id = $('#item_id').val();

        const data = {'id': id, 'qty': qty};

        // 取出購物車資料，沒有就生成陣列
        const cart = JSON.parse(localStorage.getItem('cart')) || [];

        // 2️⃣ 檢查這個商品是否已存在
        const existing = cart.find(i => i.id === data.id);

        if (existing) {
            // 如果有就只更新數量
            existing.qty += data.qty;
        } else {
            // 如果沒有就新增
            cart.push(data);
        }

        // 儲存 localStorage
        localStorage.setItem('cart', JSON.stringify(cart));

        // 呼叫主頁面的購物車更新
        window.parent.updateCart();

        // 關閉彈窗
        window.parent.$('#exampleModal').modal('hide');
    }
</script>