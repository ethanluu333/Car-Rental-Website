<?php

session_start();
include("connection.php");
include("function.php");

  $user_data = check_login($con);
  $Car_ID = $_SESSION['Car_ID'];
  $Hourly_rate = $_SESSION['Hourly_Rate'];


  $query = "INSERT INTO transaction (User_ID, Car_ID, Value, Rate_Type) VALUES ($user_data[User_ID], $Car_ID, $Hourly_rate, 'Hour')";
  echo "<pre>Debug: $query</pre>\m";
  mysqli_query($con, $query);


 header("Location: catalogs.php");
?>
