<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "test@constructionfanebtp.com";
    $to = "abdoutra62@gmail.com";
    $subject = "Essai de PHP Mail";
    $message = "PHP Mail fonctionne parfaitement";
    $headers = "De :" . $from;
    mail($to,$subject,$message, $headers);
    echo "L'email a été envoyé.";
?>
