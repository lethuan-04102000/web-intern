<?php
    use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        
        require_once "PHPMailer/PHPMailer.php";
        require_once "PHPMailer/SMTP.php";
        require_once "PHPMailer/Exception.php";

        $mail = new PHPMailer();

        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "crisleekiller@gmail.com"; //enter you email address
        $mail->Password = 'Lethuan2000'; //enter you email password
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $file = fopen("customers.txt","r");
        while(!feof($file)){
            $content = fgets($file);
            $carray = explode("|",$content);
            list($id,$name,$email,$adress,$date)=$carray;

            
             $mail->addAddress("$email");
        }
        // $mail->addAddress("lvthuan.18it4@vku.udn.vn");
        $mail->Subject = ("$email ($subject)");
        $mail->Body = $body;

        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
