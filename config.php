<?php
$server = "sql302.infinityfree.com";
$username = "if0_36383710";
$password = "7VAaRdZwvu";
$db_name = "if0_36383710_kitty";

$conn = new mysqli($server, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$conn->autocommit(true);
?>