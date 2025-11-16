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
    var total = 0;

    if (cart) {
        cart.forEach(function (e) {
            const item = menuData.find(i => i.id == e.id);
            const prices = item.price * e.qty;
            total += Number(prices);
            tmp += `
                <div class="cart-item">
                    <img class="item-image" src="upload/${item.img}">
                    <div class="item-info">
                        <div class="item-row">
                            <p class="item-title">${item.name}</p>
                            <div class="item-price">£${prices.toFixed(2)}</div>
                        </div>
                        <div class="item-row">
                            <div class="item-note">${item.type}</div>
                            <div class="item-qty">x<span class="qty">${e.qty}</span></div>
                        </div>
                    </div>
                    <button class="delete-btn" onclick="delCart(${item.id})">&times;</button>
                </div>
            `
        })
        $('#cart').html(tmp);
    }
    $('#cartTotal').text(total.toFixed(2));
}

function delCart(id) {
    // 取出購物車資料
    let cart = JSON.parse(localStorage.getItem('cart'));

    // 刪除指定資料
    cart = cart.filter(item => item.id != id);
    console.log(cart);

    // 存回
    localStorage.setItem('cart', JSON.stringify(cart));

    // 更新
    updateCart();
}