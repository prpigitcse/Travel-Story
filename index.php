<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">
    <script src="js/bootstrap.min.js"></script>
    
</head>
<body style="background-image: url('images/nice3.jpg');background-size:cover;">
    <form  method="post" action="login.php">
      <div class="col-sm-4 col-md-offset-4" style="background-color:white;border:1px solid white;border-radius:20px;height:450px;width:400px;margin-top:100px;"><br>
         <div style="background-color:lightgrey;color:black; border:1px solid white;border-radius:10px;text-align:center;"><h4><b>Login Form</b></h4></div><br>
         <div style="background-color:lightskyblue;color: white; border:1px solid white;border-radius:10px;text-align:center;"><h4><a href="facebook.html">Login with Facebook</a></h4></div><br>
         <center><p style="color:black;font-size:18px;">OR</p></center>
         <b>Username</b><input type="text" class="form-control" name="username"><br>
         <b>Password</b><input type="password" class="form-control" name="Password"><br>
         <p style="color:lightskyblue;font-size:16px;"><a href="forgot.php">Forgot password?</a></p>
         <p style="color:lightskyblue;font-size:16px;"><a href="register.php">New? Create a new account?</a></p>
         <center>
         <button type="submit" name="submit" style="background-color:orange;color:white;border-radius:10px;font-size:20px;";>Log in</button><br>
        </center>
        <br>
      </div>
    </form>
</body>
</html>
