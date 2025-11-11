<?php include_once "db.php";

$input = json_decode(file_get_contents("php://input"), true);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($input['username'] ?? '');
    $password = $input['password'] ?? '';

    // 如果密碼為空
    if ($username === '' || $password === '') {
        echo json_encode(['success' => false, 'message' => 'Please fill in all fields']);
        exit;
    }

    if($User -> count(["username" => $username])){
        $row = $User -> find(["username" => $username]);
        $rowPassword = $row['password'];

        if(password_verify($password, $rowPassword)){
            echo json_encode(['success' => true, 'message' => 'Login successful']);

            $_SESSION['user'] = $username;
        } else {
            echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Invalid username or password']);
    }
}
