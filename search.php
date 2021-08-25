<?php
    if(isset($_REQUEST['ok'])){
        $seach =$_GET['search'];
        // echo($seach);
        if(empty($seach)){
            echo "nhap noi dung tim kiem";

        }else {
            $file = fopen("customers.txt","r");
            while(!feof($file)){
                $content = fgets($file);
                $carray = explode("|",$content);

                list($id,$name,$mail,$number,$date)=$carray;
                
                if($seach==$name || $seach==$date){
                    
                    echo $id ;
                    echo $name ;
                    echo $mail ;
                    echo $number ;
                    echo $date  ;
         
                }
                
                
            
            }
        }

    }
?>
