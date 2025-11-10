<?php include_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $account = trim($input['account'] ?? '');
    $password = $input['password'] ?? '';

    // 如果密碼為空
    if ($account === '' || $password === '') {
        echo json_encode(['success' => false, 'message' => 'Please fill in all fields']);
        exit;
    }

    if($Admin -> all(["account" => $account, 'password' => $password])){
        $_SESSION['admin'] = $account;
        echo json_encode(['success' => true, 'message' => 'Login successful']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid account or password']);
    }
}
