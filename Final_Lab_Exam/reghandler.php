<?php 
  require_once('db.php');

  $empName = $_POST['employername'];
  $compName = $_POST['companyname'];
  $contactno = $_POST['contactno'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $con = dbConnection();
  

  if (empty($empName) || empty($compName) || empty($contactno) ||empty($username) || empty($password)) {
    echo "Fields cannot be empty";
  }
  else {
    $query = "INSERT INTO users VALUES ('','$empName','$compName','$contactno','$username','$password','employer')";
    mysqli_query($con, $query);
    echo "Success";
  }

  
?>