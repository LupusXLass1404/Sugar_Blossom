<?php include_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($input['username'] ?? '');
    $password = $input['password'] ?? '';
    $email = trim($input['password']) ?? '';

    if ($username === '' || $password === '' || $email === '') {
        echo json_encode(['success' => false, 'message' => 'Please fill in all fields']);
        exit;
    }

    if ($User -> count(["username" => $username])) {
        echo json_encode(['success' => false, 'message' => 'Username already exists']);
        exit;
    }
    if ($User -> count(["email" => $email])) {
        echo json_encode(['success' => false, 'message' => 'This email is already registered']);
        exit;
    }

    // 加密
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $result = $User -> save([
        'username'=> $username,
        'password'=> $hashedPassword,
        'email'=> $email,
    ]);

    if ($result) {
        echo json_encode(['success' => true, 'message' => 'Register successful']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Register failed']);
    }

}