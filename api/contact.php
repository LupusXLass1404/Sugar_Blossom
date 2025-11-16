<?php include_once "db.php";

$result = $Contact->save($_POST);

if($result){
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

