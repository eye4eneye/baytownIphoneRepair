<?php
if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "terrencew1995@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact-us-thank-you.html");
  }

  if(empty($name) || empty($mailFrom)) {
     header('Location: 404error.html');
     exit(0);
 }

 else{
     header('Location: index.html');
     exit(0);
 }
 ?>
