<?php

    $name = $_POST['Name'];
    $phoneNumber = $_POST['Phone_number'];
    $email = $_POST['Email'];
    $msg = $_POST['Message'];
    if ($name && $phoneNumber && $email && $msg) {
        echo 'failure';
        exit;
    }

    $fMessage = 'Name: ' . $name . "\n";
    $fMessage .= 'Email: ' . $email . "\n";
    $fMessage .= 'Message: ' . $msg . "\n";
    $fMessage .= 'Phone Number: ' . $phoneNumber . "\n";
    $fMessage = wordwrap($fMessage);
    mail("legithack78@gmail.com", "Legit Hack Contact Form Message",$fMessage);
    echo 'success';
?>