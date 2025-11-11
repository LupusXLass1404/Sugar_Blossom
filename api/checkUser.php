<?php include_once "db.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents("php://input"), true);

    $username = trim($input['username'] ?? '');
    $email = trim($input['email']) ?? '';

    if ($User -> count(['username'=>$username, 'email'=>$email])) {
        $_SESSION['reset_user_id'] = $username;
        $_SESSION['reset_token'] = bin2hex(random_bytes(16));
        echo json_encode([
            'success' => true,
            'redirect' => './index.php?do=resetPassword&token=' . $_SESSION['reset_token']
        ]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Username or email not found.']);
    }
}