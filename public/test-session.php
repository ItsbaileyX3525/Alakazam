<?php
session_start();

echo "<h1>Session Debug</h1>";
echo "<pre>";
echo "Logged in: " . (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true ? "YES" : "NO") . "\n\n";
echo "Session Data:\n";
print_r($_SESSION);
echo "</pre>";

if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true) {
    echo "<p style='color: green; font-size: 20px;'>✅ You ARE logged in!</p>";
    echo "<p>You should see the comment form on the anime pages.</p>";
} else {
    echo "<p style='color: red; font-size: 20px;'>❌ You are NOT logged in!</p>";
    echo "<p>Please <a href='/login'>log in</a> first.</p>";
}
?>
