<?php ob_start();

if (isset($ POST['submit'] )) {

    $to = "rgaust@yahoo.com";
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $txt = $_POST['message']
    $headers = "From: ".$email . "\r\n .

    mail($to, $subject, $txt, $headers );

    header("Location: Contact.htm");


}






?>
