<?php
require_once("db_messages.inc.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    session_start();
    header("Content-Type: application/json");

    if (!isset($_SESSION["logged_in"]) || !$_SESSION["logged_in"]) {
        echo json_encode(
            [
                "success" => false,
                "message" => "NOT_LOGGED_IN"
            ]
            );
        exit;
    }

    $character_name = $_POST["character_name"] ?? '';
    $comment_text = trim($_POST['comment_text'] ?? '');
    $user_id = $_SESSION['userID'] ?? 0;
    $username = $_SESSION['username'] ?? '';

    if (empty($character_name) || empty($comment_text)) {
        echo json_encode(
            [
                "success" => false,
                "message" => "Character name or comment are empty"
            ]
        );
        exit;
    }

    if (strlen($comment_text) > 350) {
        echo json_encode(
            [
                "success"=> false,
                "message"=> "Comment is too long (max 350 chars)"
            ]
        );
        exit;
    }

    try {
        $stmt = $conn->prepare("INSERT INTO comments (character_name, user_id, username, comment_text) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $character_name, $user_id, $username, $comment_text);
        $stmt->execute();

        echo json_encode([
            "success"=> true,
            "message"=> "Comment posted successfully",
            "comment" => [
                "username" => htmlspecialchars($username),
                "comment_text" => htmlspecialchars($comment_text),
                "created_at" => date("M j, Y g:i A"),
            ]
        ]);
    } catch (Exception $e) {
        echo json_encode([
            "success" => false,
            "message" => "Error inserting comment: " . $e->getMessage()
        ]);
        exit;
    }
}

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    header("Content-Type: application/json");

    $character_name = $_GET["character_name"] ?? '';

    if (empty($character_name)) {
        echo json_encode([
            'success'=> false,
            'message'=> 'Character name required.'
        ]);
        exit;
    }

    try {
        $stmt = $conn->prepare("SELECT username, comment_text, created_at FROM comments WHERE character_name = ? ORDER BY created_at DESC");
        $stmt->bind_param("s", $character_name);
        $stmt->execute();
        $result = $stmt->get_result();
        $comments = [];
        while ($row = $result->fetch_assoc()) {
            $comments[] = $row;
        }

        //idk why but chazza recommends this --- Nvm i understand it now
        $formatted_comments = array_map(function($comment) {
            return [
                'username' => htmlspecialchars($comment["username"]),
                'comment_text' => nl2br(htmlspecialchars($comment["comment_text"])),
                'created_at' => date('M j, Y g:i A', strtotime($comment['created_at'])),
            ];
        }, $comments);
    
        echo json_encode([
            "success" => true,
            "comments" => $formatted_comments
        ]);
    } catch (Exception $e) {
        error_log("Comment fetch failed: " . $e->getMessage());
        echo json_encode(['success' => false, 'message' => 'Failed to fetch comments']);
    }
    exit;
}

?>