<?php
    extract($_REQUEST);
    
    $file=fopen("customers.txt","a");
    fwrite($file, $no ."|");
    fwrite($file, $username ."|");
    fwrite($file, $fullname ."|");
    fwrite($file, $mailadress ."|");
    fwrite($file, $date ."\n");

    fclose($file);
    header("location: signup.php");
 ?>
