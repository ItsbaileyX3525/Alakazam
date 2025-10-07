<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    echo json_encode([ 
        'success' => false,
        'error' => 'BAD_METHOD'
    ]);
    exit();
}

session_start();

require_once("db_users.inc.php");

if (!isset($_POST["username"]) || !isset($_POST["password"]) || !isset($_POST["email"])) {
    echo json_encode([ 
        'success' => false,
        'error' => 'INVALID_POST'
    ]);
    exit();
}

$username = trim(filter_var($_POST["username"], FILTER_SANITIZE_STRING));
$password = $_POST["password"];
$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);

if (!$email || !$password || !$username) {
    echo json_encode([ 
        'success' => false,
        'error' => 'INVALID_DATA'
    ]);
    exit();
}

$hashed_password = password_hash($password, PASSWORD_BCRYPT);

$stmt = mysqli_prepare($conn, "INSERT INTO users (username, email, password) VALUES (?,?,?)");

if (!$stmt) {
    echo json_encode([
        'success' => false,
        'error' => 'DATABASE_ERROR'
    ]);
    exit();
}

$stmt->bind_param("sss", $username, $email, $hashed_password);

try {
    $stmt->execute();
} catch (mysqli_sql_exception $e) {
    switch ($e->getCode()) {
        case 1062:
            echo json_encode([
                'success' => false,
                'error' => 'USER_EXISTS'
            ]);
            break;
        default:
            echo json_encode([
                'success' => false,
                'error' => 'REGISTRATION_FAILED'
            ]);
            break;
    }
    $stmt->close();
    $conn->close();
    exit();
}

$userID = mysqli_insert_id($conn);

$stmt->close();
$conn->close();

$_SESSION["logged_in"] = true;
$_SESSION["userID"] = $userID;
$_SESSION["username"] = $username;
$_SESSION["email"] = $email;

echo json_encode([ 
    'success' => true,
    'error' => 'NONE'
]);
exit();
?>