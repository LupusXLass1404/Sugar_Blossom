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
            <button onclick="dec()">-</button>
            <span id="qty">1</span>
            <button onclick="inc()">+</button>
        </div>
        <div>
            Total: £<span id="total" class="price"></span>
        </div>
    </div>
    <div>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Add</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    </div>
</div>

<script>
    const basePrice = parseFloat($('#basePrice').val(););
    let qty = 1;


    function total(){
        $('#qty').html(qty);
        $('#total').html(qty*basePrice);
    }
    function add(){

    }
</script>