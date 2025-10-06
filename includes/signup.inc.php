<?php
header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    echo json_encode([ 
        'success' => false,
        'error' => 'BAD_METHOD'
    ]);
}

require_once("db_users.inc.php");

?>