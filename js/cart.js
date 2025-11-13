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

    if (cart) {
        cart.forEach(function (e) {
            const item = menuData.find(i => i.id == e.id);
            const prices = item.price * e.qty;
            total += Number(prices);
            tmp += `${item.name} x${e.qty} = £${prices.toFixed(2)}<br>`
        })
        $('#cart').html(tmp);
    }
    $('#cartTotal').text(total.toFixed(2));
}