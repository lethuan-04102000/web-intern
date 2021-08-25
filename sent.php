<!DOCTYPE html>
<html>
<head>
    <title>Gửi thông tin khuyến mãi</title>
</head>
<body>

	<center>
		<h4 class="sent-notification"></h4>

		<form id="myForm">
			<h2>Gửi thông tin khuyến mãi</h2>

			<label>Name</label>
			<input id="name" type="text" placeholder="Enter Name">
                <br><br>
        <table>
            <h3>Thông tin của khách hàng</h3>
                <tr>
                    <th>fullname</th>
                    <th>Email</th>
                </tr>
            <?php
                $file = fopen("customers.txt","r");
                while(!feof($file)){
                    $content = fgets($file);
                    $carray = explode("|",$content);
                    list($id,$name,$mail,$adress,$date)=$carray;
                    ?>
                    <tr>
                        <td><?php echo($name) ?></td>
                        <td><?php echo($mail) ?></td>
                    </tr>
                <?php
                }
                ?>
        </table>
			<label>Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>
 
            <br><br>
			<label>Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject"> 
			<br><br>

			<p>Message</p>
			<textarea id="body" rows="5" placeholder="Type Message"></textarea>
			<br><br>

			<button type="button" onclick="sendEmail()" value="Send An Email">Submit</button> 
		</form>
	</center>

	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>

</body>
</html>