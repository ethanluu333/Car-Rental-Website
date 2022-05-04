<?php
  session_start();
  include("connection.php");
  include("function.php");

  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    $firstname = $_POST['First_Name:'];
    $lastname = $_POST['Last_Name:'];
    $email = $_POST['Email:'];
    $password = $_POST['Password:'];
    $phonenumber = $_POST['Phone_Number:'];
    $gender = $_POST['Gender:'];
    $username = $_POST['UserName:'];
    $address = $_POST['Address:'];

    if(!empty($username) && !empty($password) && !is_numeric($username))
    {
      $query = "INSERT INTO user (First_Name, Last_Name, Email, Password, Phone_Number, Gender, UserName, Address) VALUES ('$firstname', '$lastname', '$email', '$password', '$phonenumber', '$gender', '$username', '$address')";
      mysqli_query($con, $query);

      header("Location: index.php");
      die;
    }
    else
    {
      echo "Please enter valid information!";
    }
  }
?>