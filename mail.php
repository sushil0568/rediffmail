<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "s.mishra_0568@rediffmail.com";
    $to = "sushil.mishra0568@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";
    $headers = "From:" . $from;
    if(mail($to,$subject,$message, $headers))
    { 
        echo "mail send.";
    }else{
        echo "the email message not  sent.";
    }
?>