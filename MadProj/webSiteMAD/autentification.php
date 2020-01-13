<?php
include 'login.php';


if(isset($_POST['submit'])){ //$_SERVER["REQUEST_METHOD"] == "POST"     isset($_POST['submit'])


  require 'mysql_connect.php';
  $message="";
  if(count($_POST)>0) {//if($_SERVER["REQUEST_METHOD"] == "POST")

  $query = "SELECT * FROM Users WHERE email='" . $_POST['email'] . "' and password = '". $_POST['password'] ."'";
  $result = $conn->query($query);
  $count  = $result->num_rows;//mysqli_num_rows($result)
  if($count==0) {

    echo $message = "Invalid email or password!";

  } else {

    while($row = $result->fetch_assoc()){
      //$message = "You are successfully authenticated! Welcome " . mb_strtoupper($row["username"]);
     $message = mb_strtoupper($row["username"]);

   }
   header('Location: indexs.php');
   exit();

     //echo $message;

  }

}

//$conn->close();



}

$conn->close();
