<?php include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);

    $password = $input['password'] ?? '';
    $token = $input['token'] ?? '';

    if ($_SESSION['reset_token'] === $token) {
        $row = $User -> find(['username'=>$_SESSION['reset_user_id']]);
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $result = $User -> save(['id'=>$row['id'], 'password'=>$hashedPassword]);
        if($result){
            unset($_SESSION['reset_user_id'], $_SESSION['reset_token']);
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false, 'message' => 'Reset failed']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Reset failed']);
    }
}