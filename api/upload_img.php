<?php include_once"./db.php";
// dd($_FILES);
$db=ucfirst($_GET['do']);

if(!empty($_FILES['img'])){
    $img = $_FILES['img'];
    $_POST['img']=$img['name'];

    // 在改圖片名之前先建立資料
    $$db->save($_POST);

    // 之後取得id再來變更檔名
    $id = isset($_POST['id']) ? $_POST['id'] : $$db -> lastId();
    $imgName = $_GET['do'] . "_$id" . ".jpg";
    move_uploaded_file($img['tmp_name'], "../upload/".$imgName);

    // 儲存名字改變後的資料
    $$db->save(["id" => $id, "img" => $imgName]);
}
// dd($_POST);

to("../admin.php?do={$_GET['do']}");
