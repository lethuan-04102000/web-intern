<?php
require_once 'includes.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $login = (new Login())->logout();
    die;
}
?>



<!DOCTYPE html>
<html>
<head>
    <title>Thông tin khác hàng</title>
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
    <style>
        table {
  width:100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
  text-align: left;
}
#t01 tr:nth-child(even) {
  background-color: #eee;
}
#t01 tr:nth-child(odd) {
 background-color: #fff;
}
#t01 th {
  background-color: black;
  color: white;
}
    </style>
</head>
<body>
        <section class="loginform cf">
            <center>
                <br>
                <?php
                if (!isset($_SESSION['is_auth'])) :
                    echo '<b>login Required! you will redirect to login page</b>';
                    header("refresh:3; url=login.php");
                    die;
                else:
                    $r = '<b>' . 'Welcome ' . $_SESSION['username'] . ' to Dasboard </b>';

                    $r .= '
                <form action='. $_SERVER['PHP_SELF'] .' method="post" accept-charset="utf-8">
                    <input type="submit" value="Click here for logout">
                </form>';
                    echo $r;
                endif;
                ?>
                <br>
            </center>
        </section>

    <table>
        <h3>Thông tin của khách hàng</h3>
     
    <tr>
        <th>id</th>
        <th>fullname</th>
        <th>Email</th>
        <th>number phone</th> 
        <th>Date of birth </th>
    </tr>
        <?php
        $file = fopen("customers.txt","r");
        while(!feof($file)){
            $content = fgets($file);
            $carray = explode("|",$content);
            list($id,$name,$mail,$adress,$date)=$carray;
            ?>
            <tr>
                <td><?php echo($id) ?></td>
                <td><?php echo($name) ?></td>
                <td><?php echo($mail) ?></td>
                <td><?php echo($adress) ?></td>
                <td><?php echo($date) ?></td>
            </tr>
        <?php
        }
        ?>
    
    </table>

  
    <div class="container">
 
        <form action="search.php" method="GET">
            <input type="text" name="search">
            <button type="submit" name="ok">Search</button>
        </form>
        

    </div>
    <div class="container">
 
    <form action="sent.php" method="GET">
  
        <button type="submit" name="ok">Gửi thông tin khuyến mãi</button>
    </form>
 

</div>
</body>
</html>