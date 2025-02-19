<?php
session_start();

// Introduce weak authentication using cookies
if (!isset($_COOKIE['role']) || $_COOKIE['role'] !== "admin") {
    echo "<h2>Access Denied!</h2>";
    die("You are not authorized to view this page.");
}

echo "<h2>Welcome, Admin!</h2>";
echo "<p>Flag: selectCTF{cookie_hack_success}</p>";
?>
