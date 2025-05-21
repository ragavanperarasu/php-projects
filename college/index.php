<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KKR College</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <style>
* {
    font-family: "Chakra Petch", sans-serif;
    font-weight: 700;
    font-style: normal;
}
    nav{
        border-radius: 10px;
        margin: 0px 40px;
        /* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);

    }

h2{
            /* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);

margin:50px 0px;
padding:30px;
}

.gla{
            /* From https://css.glass */
background: rgba(255, 255, 255, 0.2);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5px);
-webkit-backdrop-filter: blur(5px);
border: 1px solid rgba(255, 255, 255, 0.3);

margin:50px 0px;
padding: 0 30px;
}

  </style>

</head>
<body>
<header>
  <!-- Header title section with a custom blue color -->
  <div style="background-color: #004aad; color: white;" class="text-center py-3">
    <h1>KKR University College</h1>
  </div>

  <!-- Navigation bar with a different custom color -->
  <nav class="nav justify-content-start py-2" >
    <a class="nav-link text-white" href="index.php">Home</a>
    <a class="nav-link text-white" href="#dep">Departments</a>
    <a class="nav-link text-white" href="#feci">Facilities</a>
    <a class="nav-link text-white" href="login.php">Login</a>
    <a class="nav-link text-white" href="result.php">Exam Result</a>
    <a class="nav-link text-white" href="#contact">Contact Us</a>
  </nav>
</header>



  <div id="collegeCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide1.jpg" class="d-block w-100" alt="Campus View" style="height: 70vh; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block">
          <h5>State-of-the-Art Campus</h5>
          <p>Experience world-class infrastructure and education.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide2.jpg" class="d-block w-100" alt="Library" style="height: 70vh; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Modern Library</h5>
          <p>50,000+ books, journals, and digital resources.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide3.jpg" class="d-block w-100" alt="Lab Facilities" style="height: 70vh; object-fit: cover;">
        <div class="carousel-caption d-none d-md-block">
          <h5>Hi-Tech Laboratories</h5>
          <p>Hands-on learning with industry-grade equipment.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#collegeCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#collegeCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container my-5">
    <div class="mb-4 gla">
      <h2>About Us</h2>
      <p>KKR College, established in 1990, is a premier institution offering high-quality education in engineering, science, and technology. Our mission is to empower students through knowledge and innovation.</p>
    </div>

    <div class="mb-4 gla" id="dep">
      <h2>Departments</h2>
      <ul>
        <li>Computer Science and Engineering (CSE)</li>
        <li>Electronics and Communication Engineering (ECE)</li>
        <li>Electrical and Electronics Engineering (EEE)</li>
        <li>Mechanical Engineering (MECH)</li>
        <li>Civil Engineering (CIVIL)</li>
      </ul>
    </div>

    <div class="mb-4 gla" id="feci">
      <h2>Facilities</h2>
      <ul>
        <li>Modern Classrooms with Smart Boards</li>
        <li>Fully Equipped Laboratories</li>
        <li>Central Library with 50,000+ Books</li>
        <li>Wi-Fi Enabled Campus</li>
        <li>Separate Hostels for Boys and Girls</li>
        <li>Indoor & Outdoor Sports Complex</li>
      </ul>
    </div>

    <div class="mb-4 gla">
      <h2>Achievements</h2>
      <ul>
        <li>100+ Campus Placements Every Year</li>
        <li>Collaboration with 20+ Global Universities</li>
        <li>State-Level Sports Champions</li>
        <li>Published 500+ Research Papers</li>
      </ul>
    </div>

    <div class="mb-4 gla" id="contact">
      <h2>Contact Us</h2>
      <p>KKR College, Trichy Road, Coimbatore - 641105<br>Email: info@kkrcollege.edu.in | Phone: +91-9876543210</p>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
