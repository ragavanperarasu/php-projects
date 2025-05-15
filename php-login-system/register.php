<?php
require 'db.php';

$msg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    $stmt = $conn->prepare("INSERT INTO users (username, password, mobile, gender) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $password, $mobile, $gender);
    if ($stmt->execute()) {
        $msg = "User registered! <a href='login.php' style='text-decoration: none;color: #ff5722;'>Login now</a>";
    } else {
        $msg = "Error creating user.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <h2>Create New User</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required />
        <input type="password" name="password" placeholder="Password" required />
        <input type="text" name="mobile" placeholder="Mobile Number" required />
        <select name="gender" required>
            <option value="">Select Gender</option>
            <option>Male</option>
            <option>Female</option>
            <option>Other</option>
        </select>
        <button type="submit">Register</button>
        <div class="error"><?= $msg ?></div>
    </form>
</div>
</body>
</html>
