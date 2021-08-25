<?php
$file = fopen("customers.txt","r");
while(!feof($file)){

    $content = fgets($file);
    $carray = explode("|",$content);
    list($id,$name,$mail,$adress,$date)=$carray;
    echo($id );
    echo($name);
    echo($mail);
    echo($adress);
    echo($date);
}
?>