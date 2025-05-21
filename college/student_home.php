<?php
include 'conn.php';
$regno = $_POST['regno'];
$dob = $_POST['dob'];
$sql = "SELECT * FROM students WHERE regno='$regno' AND dob='$dob'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Result - KKR College</title>
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
      max-width: 700px;
      margin-top: 50px;
      background: white;
      padding: 30px;


/* From https://css.glass */
background: rgba(255, 255, 255, 0.14);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(11.3px);
-webkit-backdrop-filter: blur(11.3px);
border: 1px solid rgba(255, 255, 255, 0.3);

color:white;
    }
    h2 {
      color:rgb(253, 253, 253);
    }
    .table {
      margin-top: 20px;
    }
    .invalid {
      text-align: center;
      padding: 50px;
      color: wheat;
      font-size: 1.2rem;
    }
  </style>
</head>
<body>

<div class="container">
<?php
if (mysqli_num_rows($result) == 1) {
  $row = mysqli_fetch_assoc($result);
  echo "<h2 class='text-center mb-4'>Welcome, <strong>" . htmlspecialchars($row['name']) . "</strong></h2>";
  echo "<p><strong>Register Number:</strong> " . htmlspecialchars($row['regno']) . "</p>";

  echo "<table class='table table-bordered table-striped'>";
  echo "<thead class='table-dark'><tr><th>Subject</th><th>Mark</th></tr></thead><tbody>";
  echo "<tr><td>Data Structures</td><td>" . $row['ds'] . "</td></tr>";
  echo "<tr><td>DBMS</td><td>" . $row['dbms'] . "</td></tr>";
  echo "<tr><td>OOPS</td><td>" . $row['oops'] . "</td></tr>";
  echo "<tr><td>Computer Networks</td><td>" . $row['cn'] . "</td></tr>";
  echo "<tr><td>Operating Systems</td><td>" . $row['os'] . "</td></tr>";
  echo "</tbody></table>";
} else {
  echo "<div class='invalid'>❌ Invalid Register Number or Date of Birth. Please try again.</div>";
}
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
