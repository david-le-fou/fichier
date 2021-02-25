<?php
     $to      = 'david@example.com';
     $subject = 'Envoi mail par david';
     $message = 'Bonjour ! david le fou';
     $headers = 'From: enjana@example.com' . "\r\n" .
     'Reply-To: enjana@example.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $subject, $message, $headers);
 ?>
