<?php
    extract($_REQUEST);
    $file=fopen("users.txt","a");
    fwrite($file, $no ."|");
    fwrite($file, $username ."|");
    fwrite($file, $fullname ."|");
    fwrite($file, $mailadress ."|");
    fwrite($file, $password ."|");
    fwrite($file, $date ."|");
    fwrite($file, $avatar ."\n");

    fclose($file);
    header("location: signup.php");
 ?>
