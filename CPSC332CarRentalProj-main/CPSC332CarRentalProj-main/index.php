<?php
session_start();
include("connection.php");
include("function.php");

  $user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title class="title">CTLY Car Rental</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel= "stylesheet" href="public/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">CTLY Car Rental</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
      <li class="nav-item">
        <a class="nav-link" href="catalogs.php">Hello, <?php echo $user_data['UserName']; ?> </a>
      </li>
        <a class="nav-link" href="#">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catalogs.php">Rent a car</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Home</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="catalogs.php">Cars</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.php">Login</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#login">Register</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php">Logout</a>
        </div>
      </li>
    </ul>
  </div>
</nav>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="public/images/hondacivic.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>2022 Honda Civic</h5>
        <p>The all-new 2022 Honda Civic Sedan turns up the fun, with a sporty ride, spacious cabin and available Bose audio.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/images/toyotacamry.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>2022 Toyota Camry</h5>
        <p>Connected Technology. Fold-Down Rear Seats. Push Button Start. Let's Go Places.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="public/images/ferrarienzo.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>2004 Ferrari Enzo</h5>
        <p>Marvel at the sleek, innovative design of the Ferrari Enzo that is sure to allure even the most die-hard car enthusiasts.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<section class="my-4">
  <div class="py-4">
      <h2 class="text-center" id="login">Login/Register</h2>
  </div>

  <div class="w=50 m-auto">
    <form action="about.php" method="post">
    <div class="form-group">
        <label>First Name:</label>  
        <input type="text" name="First Name:" class="form-control">
  </div>
      <div class="form-group">
        <label>Last Name:</label>
        <input type="text" name="Last Name:" class="form-control">
      </div>
      <div class="form-group">
        <label>Email:</label>  
        <input type="text" name="Email:" class="form-control">
      </div> 
      <div class="form-group">
        <label>Password:</label>  
        <input type="text" name="Password:" class="form-control">
      </div> 
      <div class="form-group">
        <label>Phone Number:</label>  
        <input type="text" name="Phone Number:" class="form-control">
      </div> 
      <div class="form-group">
        <label>Gender:</label>  
        <input type="text" name="Gender:" class="form-control">
      </div> 
      <div class="form-group">
        <label>UserName:</label>  
        <input type="text" name="UserName:" class="form-control">
      </div> 
      <div class="form-group">
        <label>Address:</label>  
        <input type="text" name="Address:" class="form-control">
      </div> 
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</section>  

</section class="my-4">
  <div class="py-4">
    <h2 class="text-center" id="about">About</h2>
  </div>
  <div class="container-fluid">
    <h3 class="text-center">CTLY</h3> <br> 
    <p class="text-center"></b> This website allows users to register a profile, retrieve information about cars available for rent, as well as grant them the option to rent them at hourly rates. 
  </div> 
</section>  

    

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>