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

if (!isset($_POST["email"]) || !isset($_POST["password"])) {
    echo json_encode([ 
        'success' => false,
        'error' => 'INVALID_POST'
    ]);
    exit();
}

$email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
$password = $_POST["password"];

if (!$email || !$password) {
    echo json_encode([ 
        'success' => false,
        'error' => 'INVALID_DATA'
    ]);
    exit();
}

$stmt = mysqli_prepare($conn, "SELECT userID, username, email, password FROM users WHERE email = ?");

if (!$stmt) {
    echo json_encode([
        'success' => false,
        'error' => 'DATABASE_ERROR'
    ]);
    exit();
}

$stmt->bind_param("s", $email);

if (!$stmt->execute()) {
    echo json_encode([
        'success' => false,
        'error' => 'LOGIN_FAILED'
    ]);
    $stmt->close();
    $conn->close();
    exit();
}

$result = mysqli_stmt_get_result($stmt);
$row = mysqli_fetch_assoc($result);

if (!$row) {
    echo json_encode([ 
        'success' => false,
        'error' => 'INVALID_CREDENTIALS'
    ]);
    $stmt->close();
    $conn->close();
    exit();
}

$stored_hash = $row["password"];
$verified = password_verify($password, $stored_hash);

if (!$verified) {
    echo json_encode([ 
        'success' => false,
        'error' => 'INVALID_CREDENTIALS'
    ]);
    $stmt->close();
    $conn->close();
    exit();
}

$stmt->close();
$conn->close();

$_SESSION["logged_in"] = true;
$_SESSION["userID"] = $row["userID"];
$_SESSION["username"] = $row["username"];
$_SESSION["email"] = $row["email"];

echo json_encode([ 
    'success' => true,
    'error' => 'NONE'
]);
exit();
?>