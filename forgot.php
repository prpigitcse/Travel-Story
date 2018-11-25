<?php
include "travdb.php";
?>
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
<body style="background-image: url('images/nice1.jpg');background-size:cover;">
    <form  method="post" action="send.php">
      <div style="border:1px solid white;background-color:white;border-radius:20px;height:300px;width:500px;margin-top:100px;margin-left:400px;margin-right:400px;"><br>
        <div style="color:blue;font-size:30px; border:1px solid white;text-align:center;"><b>Forgot password</b></div><br>
        <p style="color:black;font-size:16px;margin-left:20px;">Fill in your e-mail to get an email with a reset link</p>
          <div style="font-size:18px;margin-left:20px;margin-right:20px;">
            <b>Email address</b><input type="text" class="form-control" name="Email"><br>
          </div> 
          <?php
              include "travdb.php";
              if(isset($_POST) & !empty($_POST)){
	            $Username = mysqli_real_escape_string($traveller, $_POST['Username']);
	            $sql = "SELECT * FROM `travregister` WHERE Username = '$Username'";
	            $res = mysqli_query($traveller, $sql);
	            $count = mysqli_num_rows($res);
	            if($count == 1){
		          echo "Send email to user with password";
	            }else{
		          echo "User name does not exist in database";
    	        }
            } 
          ?>
        <center>
             <button type="button" style="background-color:orange;color:white;border-radius:10px;font-size:20px;";>Send</button><br>
        </center>
         <br>
      </div>
    </form>
</body>
</html>