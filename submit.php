<?php
    // Done in PHP because it makes life easy for hosting
    // Quick and dirty!
    $file = 'emails.txt';
    $email = $_POST['email'] . "\n";
    file_put_contents($file, $email, FILE_APPEND);
    echo 'Thanks!';
?>
