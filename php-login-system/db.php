<?php
$conn = new mysqli("localhost", "root", "Ragavan@2004", "login_system");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
