<?php

if(!isset($_POST['submit'])){
    echo "error!!! you need to submit the form!";
}


$name = $_POST['name'];

$cus_email = $_POST["cusEmail"];

$message = $_POST['message'];

//validation


if(empty($name) || empty($cus_email) || empty($message)){
    echo "All fields are mandatory!!!!";
    exit;
}


$email_from = "salfixlk@gmail.com";
$email_subject = "New Form Submission";

$email_body = "Ypu have received a new message from the user $name.\n". "email address:$cus_email\n". "Here is the message:\n $message";
    
$to = "salfixlk@gmail.com";

$headers = "From:$email_from \r\n";


//sending the email

mail($to, $email_subject, $email_body, $headers);


?>\