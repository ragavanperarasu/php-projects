<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
}

require 'db.php'; // DB connection
$result = $conn->query("SELECT username, mobile, gender FROM users");
$loggedInUser = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Home - All Users</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body, html {
            margin: 0;
            font-family: 'Poppins', sans-serif;

            background-image: linear-gradient(123deg, #FFFFFF 0%, #00B2FF 100%), linear-gradient(236deg, #BAFF99 0%, #005E64 100%), linear-gradient(180deg, #FFFFFF 0%, #002A5A 100%), linear-gradient(225deg, #0094FF 20%, #BFF4ED 45%, #280F34 45%, #280F34 70%, #FF004E 70%, #E41655 85%, #B30753 85%, #B30753 100%), linear-gradient(135deg, #0E0220 15%, #0E0220 35%, #E40475 35%, #E40475 60%, #48E0E4 60%, #48E0E4 68%, #D7FBF6 68%, #D7FBF6 100%);
    background-blend-mode: overlay, overlay, overlay, darken, normal;
    background-size: "cover";
    background-repeat: no-repeat;
height: 100vh;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        .user-card {
            background: linear-gradient(to right, #00b09b, #96c93d);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
        }

        .logout-btn {
            background-color: #ff4b2b;
            border: none;
            padding: 10px 20px;
            color: white;
            border-radius: 6px;
            cursor: pointer;
            float: right;
            margin-top: -50px;
        }

        .logout-btn:hover {
            background-color: #ff1f00;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 30px;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f1f1f1;
        }

        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="user-card">
            <h2>Hello, <?= htmlspecialchars($loggedInUser['username']) ?> 👋</h2>
            <p>Mobile: <?= htmlspecialchars($loggedInUser['mobile']) ?> | Gender: <?= htmlspecialchars($loggedInUser['gender']) ?></p>
        </div>
        
        <form method="post" action="logout.php">
            <button type="submit" class="logout-btn">Logout</button>
        </form>

        <h3>All Registered Users</h3>
        <table>
            <tr>
                <th>Username</th>
                <th>Mobile</th>
                <th>Gender</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= htmlspecialchars($row['username']) ?></td>
                <td><?= htmlspecialchars($row['mobile']) ?></td>
                <td><?= htmlspecialchars($row['gender']) ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </div>
</body>
</html>
