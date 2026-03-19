<?php

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "mygenius1717@gmail.com"; // yaha apna email likho

$subject = "New Quote Request";

$body = "Name: $name\n".
        "Phone: $phone\n".
        "Email: $email\n".
        "Message: $message";

$headers = "From: $email";

if(mail($to,$subject,$body,$headers)){
    echo "Message Sent Successfully";
} else {
    echo "Failed to send message";
}

?>
