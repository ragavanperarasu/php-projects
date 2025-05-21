<?php include 'conn.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exam Result</title>
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
    .result-form {
      max-width: 500px;
      margin: 50px auto;

      background: rgba(255, 255, 255, 0.14);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(11.3px);
-webkit-backdrop-filter: blur(11.3px);
border: 1px solid rgba(255, 255, 255, 0.3);

      padding: 30px;

    }
    .result-form h2 {
      color:rgb(255, 255, 255);
      margin-bottom: 25px;
      text-align: center;
    }
    .btn-custom {
      background-color: #004aad;
      color: white;
    }
    .btn-custom:hover {
      background-color:rgb(255, 255, 255);
    }
    .container{
              max-width: 700px;
      margin-top: 50px;
      background: white;
      padding: 30px;


/* From https://css.glass */
background: transparent;

    }
    label{
        color:white;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="result-form">
      <h2>Check Exam Result</h2>
      <form method="POST" action="student_home.php">
        <div class="mb-3">
          <label for="regno" class="form-label">Register Number</label>
          <input type="text" class="form-control" name="regno" id="regno" required>
        </div>
        <div class="mb-3">
          <label for="dob" class="form-label">Date of Birth</label>
          <input type="date" class="form-control" name="dob" id="dob" required>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-custom w-100">Get Result</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
