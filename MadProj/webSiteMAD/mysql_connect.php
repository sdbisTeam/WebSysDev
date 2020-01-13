<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testDB";
//
$port = 3308;// chande port 3306 for mariadb

//create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);


//check connection
if($conn->connect_error){
  die("connection failed: " . $conn->connect_error);
}





/*
$sql = "INSERT INTO Diseases (continent, region, country, disease, treatment)
VALUES ('Europe','All', 'Romania', 'Measles', 'Measles vaccine')";


if($conn->query($sql) === TRUE ){

  echo "new record inserted scduccesfully" ;
}else{
  echo "error insert: " . $sql . "<br>" . $conn->error;
}




$query = "CREATE TABLE Diseases(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
continent VARCHAR(100) NOT NULL,
region VARCHAR(100) NOT NULL,
country VARCHAR(100) NOT NULL,
disease VARCHAR(150) NOT NULL,
treatment VARCHAR(150) NOT NULL
)";
$conn->query($query);




//sql create table
$sql = "CREATE TABLE Users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
scientist boolean not null DEFAULT false
)";

if($conn->query($sql) === TRUE){
  echo "table person created succesfully";
}else{
  echo "error crreating table: " . $conn->error;
}




//insert into mysql_list_tables    $sql = "INSERT INTO Users (username, password, email, scientist) VALUES ('clau','clau', 'clau_balineanu@yahoo.com', true)";
$sql = "INSERT INTO Users (username, password, email)
VALUES ('user1','user1', 'user1@email.com')";


if($conn->query($sql) === TRUE ){
  $last_id = $conn->insert_id;
  echo "new record inserted succesfully" . $last_id;
}else{
  echo "error insert: " . $sql . "<br>" . $conn->error;
}
*/
?>
