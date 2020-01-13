<?php


if (isset($_POST['submit'])) {

  require 'mysql_connect.php';
  $mess="";

    $to = 'balineanu@gmail.com';
    $subject = 'MAD-Medical Advisor' . $_POST['name'];
    $message = $_POST['name'] . " with the phone number ". $_POST['phone'] . " wrote the following:" . "\n\n" . $_POST['message'];
    //$message = getRequestURI();
    $from = $_POST['email'];
    $headers = "From:" . $from;
    mail($to, $subject, $message, $headers);

    if (mail($to, $subject, $message, $headers)) {
      echo $mess = "Email send";
        header('Location: contact.php');
        exit();

    }
    else {
      echo $mess = "error";
        header('Location: contact.php');
        exit();
        echo $mess = "error";

    }

    $conn->close();
}

?>
