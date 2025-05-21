<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}

include 'conn.php';
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>All Students - KKR College</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">


  <style>

            * {
    font-family: "Chakra Petch", sans-serif;
    font-weight: 700;
    font-style: normal;
}

    body {
      background-image: linear-gradient(123deg, #FFFFFF 0%, #00B2FF 100%), linear-gradient(236deg, #BAFF99 0%, #005E64 100%), linear-gradient(180deg, #FFFFFF 0%, #002A5A 100%), linear-gradient(225deg, #0094FF 20%, #BFF4ED 45%, #280F34 45%, #280F34 70%, #FF004E 70%, #E41655 85%, #B30753 85%, #B30753 100%), linear-gradient(135deg, #0E0220 15%, #0E0220 35%, #E40475 35%, #E40475 60%, #48E0E4 60%, #48E0E4 68%, #D7FBF6 68%, #D7FBF6 100%);
    background-blend-mode: overlay, overlay, overlay, darken, normal;
    background-size: "cover";
    background-repeat: no-repeat;
height: 100vh;
    }
    .container {
      margin-top: 60px;

      /* From https://css.glass */
background: rgba(255, 255, 255, 0.14);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(11.3px);
-webkit-backdrop-filter: blur(11.3px);
border: 1px solid rgba(255, 255, 255, 0.3);

color:white;
padding:30px;
    }
    h2 {
      color:rgb(255, 255, 255);
    }
  </style>
</head>
<body>

<div class="container">
  <h2 class="mb-4 text-center">All Students</h2>
  <table class="table table-bordered table-striped">
    <thead class="table-dark">
      <tr>
        <th>RegNo</th>
        <th>Name</th>
        <th>DOB</th>
        <th>DS</th>
        <th>DBMS</th>
        <th>OOPS</th>
        <th>CN</th>
        <th>OS</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
          <td><?= htmlspecialchars($row['regno']) ?></td>
          <td><?= htmlspecialchars($row['name']) ?></td>
          <td><?= htmlspecialchars($row['dob']) ?></td>
          <td><?= $row['ds'] ?></td>
          <td><?= $row['dbms'] ?></td>
          <td><?= $row['oops'] ?></td>
          <td><?= $row['cn'] ?></td>
          <td><?= $row['os'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
