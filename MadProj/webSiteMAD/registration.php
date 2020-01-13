<?php



require 'mysql_connect.php';
$message="";

if(isset($_POST['submit'])){


  //require 'mysql_connect.php';
  //$message="";
  if(count($_POST)>0) {//if($_SERVER["REQUEST_METHOD"] == "POST")

    $query1 = "SELECT * FROM Users WHERE email='" . $_POST['email'] . "' and password = '". $_POST['password'] ."'";
    $result1 = $conn->query($query1);
    $count1  = $result1->num_rows;//mysqli_num_rows($result)
    if($count1>0) { echo "email used!!!";
    }else{

  $query = "insert into users(username, password, email) values('" . $_POST['name'] . "','". $_POST['password'] . "','". $_POST['email'] ."')";
  $result = $conn->query($query);

  if($result==true) {
    header('Location: login.php');

  } else {
    echo "error insert: " . $query . "<br>" . $conn->error;
  }
}
}// count post

//$conn->close();



}//submit

$conn->close();


?>
