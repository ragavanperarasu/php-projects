<?php
session_start();
require 'db.php';

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $res = $stmt->get_result();
    if ($res->num_rows === 1) {
        $user = $res->fetch_assoc();
        $_SESSION['user'] = $user;
        header("Location: home.php");
    } else {
        $error = "Invalid username or password!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <button type="submit">Login</button>
        <div class="error"><?= $error ?></div>
    </form>
    <p style="text-align:center; margin-top:15px; color: crimson">
        <a href="register.php" style="text-decoration: none;color: #ff5722;">Create New User</a>
    </p>
</div>
</body>
</html>
