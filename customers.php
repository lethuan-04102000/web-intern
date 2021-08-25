

<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style media="screen">
  body{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
    background-image: url(bg.jpg);
    background-size: cover;
  }
  .box{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    width: 400px;
    padding: 40px;
    background: rgba(0, 0, 0, 0.6);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0, 0, 0, 0.5);
    border-radius: 10px;
  }
  .box h2{
    margin: 0 0 30px;
    padding: 0px;
    color: #fff;
    text-align: center;
  }
  .box .input-box{
    position: relative;
  }
  .box .input-box input{
    width: 100%;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    margin-bottom: 30px;
    border: none;
    outline: none;
    background: transparent;
    border-bottom: 1px solid #fff;
  }
  .box .input-box label{
    position: absolute;
    top: 0;
    left: 0;
    letter-spacing: 1px;
    padding: 10px 0px;
    font-size: 16px;
    color: #fff;
    transition: .5s;
  }
  .box .input-box input:focus ~ label,
  .box .input-box input:valid ~ label{
    top: -18px;
    left: 0px;
    color: #03a9f4;
    font-size: 12px;
  }
  .box input[type="submit"]{
    background: transparent;
    border: none;
    outline: none;
    color: #fff;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
  }
  .box input[type="submit"]:hover{
    background-color: #3067b9;
  }
  .btnlogin{
    margin-left: 150px;
    border: none;
    outline: none;
    color: #fff;
    background: #227be3;
    padding: 10px 20px;
    border-radius: 5px;
    cursor:pointer;
    text-decoration: none;
  }

  </style>
  <title>Sign Up</title>
</head>
<body>
  
  <div class="box">
    <h2>ĐĂNG KÝ KHÁCH HÀNG</h2>
    <form action="configcustomer.php">
    <div class="input-box">
        <input type="text" name="no"  autocomplete="off" required>
        <label for="">id</label>
      </div>
      <div class="input-box">
        <input type="text" name="username"  autocomplete="off" required>
        <label for="">fullname</label>
      </div>
      <div class="input-box">
        <input type="text" name="fullname"  autocomplete="off" required>
        <label for="">email</label>
      </div>
      <div class="input-box">
        <input type="email" name="mailadress"  autocomplete="off" required>
        <label for="">numberphone</label>
      </div>
      <div class="input-box">
        <input type="date" name="date"  autocomplete="off" required>
        <label for="">date</label>
      </div>

     <input type="submit" value="Save">
     <a class="btnlogin" href="login.php">Login</a>
    </form>
  </div>
</body>
</html>
