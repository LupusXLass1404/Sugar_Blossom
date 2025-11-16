<?php include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);

    // 取得菜單資料
    $menu = $Menu -> all(['sh'=>1]);

    $no = $Order -> count([], "Where DATE(created_at) = CURDATE()");
    $serial = str_pad($no+1, 3, '0', STR_PAD_LEFT);
    $today = date('Ymd');
    $order['order_number']= "{$today}_{$serial}";

    $order['user']=$_SESSION['user'];
    $order['customer_name']=$input['customer_name'];
    $order['customer_phone']=$input['customer_phone'];
    $order['item']=json_encode($input['item']);

    $total = 0;
    foreach($input['item'] as $item){
        $index = array_search($item['id'], array_column($menu, 'id'));
        $total += $menu[$index]['price'] * $item['qty'];
    }

    $order['total']=$total;

    $order['pickup']=$input['pickup'];
    $order['note']=$input['note'];

    $result = $Order->save($order);
    if($result){
        echo json_encode(['success' => true, 'message' => 'Login successful']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Checkout failed']);
    }
}