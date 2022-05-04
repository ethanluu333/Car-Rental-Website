<?php
session_start();
include("connection.php");
include("function.php");

  $user_data = check_login($con);

  $_SESSION['Car_ID'] = 0;
  $_SESSION['Hourly_Rate'] = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title class="title">CTLY Car Rental</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <a class="nav-link" href="index.php#top">Home<span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="catalogs.php">Rent a car</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categories
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="index.php#top">Home</a>
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
<h1 class="h1">Rent a Car</h1>
<?php
    $con = mysqli_connect('localhost', 'root');

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
      }

    mysqli_select_db($con, 'car_rental');

   
    $query = "SELECT * FROM car INNER JOIN car_rates ON car.Car_ID=car_rates.C_ID;"; 
    $result = $con->query($query);
?>

<div class="panels">
    <?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            $Hourly_rate = $row['Hourly_Rate'];
            $Car_ID =  $row['Car_ID'];
            echo "<br>". "<img src = '". $row['Picture']."'class='w3-round-large' alt='Cars' style='width:30%' >" . "<br>";
            echo "<br> Make: ". $row["Make"]. "<br>"; 
            echo "<br> Model: ". $row["Model"]. "<br>";
            echo "<br> Year: ". $row["Year"]. "<br>";
            echo "<br> Color: ". $row["Color"]. "<br>";
            echo "<br> Price: $". $row["Price"]. "<br>";    
            echo "<br> Hourly Rates: $". $row["Hourly_Rate"]. "<br>";      
            echo "<br> Description: ". $row["Description"]. "<br>";             
            echo "<br> In Stock: ". $row["Stock"]. "<br>";
            $_SESSION['Car_ID'] = $Car_ID;
            $_SESSION['Hourly_Rate'] = $Hourly_rate;
            echo "<br> <li class='navbar__btn'><a href='rent.php?Car_ID=<?php echo $Car_ID ?>?Hourly_Rate=<?php echo $Hourly_rate ?>' class='button'> Request Rental</a></li>'";
        }
    }
    else {
        echo "0 results";

    }
    $con->close();  
  ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>