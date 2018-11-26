<?php
include "travdb.php";
$flag=0;
if(isset($_POST['btnregister'])){
$Name=$_POST['username'];
$Email=$_POST['email'];
$Mobileno=$_POST['mobileno'];
$Password=$_POST['password'];
$Confirm=$_POST['confirm'];

function check($str,$value){
  if($str==''){
    $msg="Please Enter ".$value;
    display($msg);
    $flag=1;
  }
}
check($Name,'username');
check($Email,'email');
check($Mobileno,'mobileno');
check($Password,'password');
check($Confirm,'confirm');





$pwd_pattern="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{1,12}$/";
  $password=$_POST['password'];
  $confirm_password=$_POST['confirm'];
  // echo $password;
  // echo $confirm_password;
  if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{1,12}$/",$password)){
     if(!strcmp($password,$confirm_password)){
        //  echo "Error in validating password";
        $msg="Error in validating password";
         $flag=1;
        //  display($msg);
        echo '<br><br><div style="color:black;background:red;width:100%;height:35px;text-align:center;padding-top:10px;">Error in validating Password:
        Password should contain 1 lowercase ,1upper case,1 digit and one special charecter</div>';

     }
    }
  else{
    $msg="Your password is valid";
    // display($msg);
    
    }
  echo "<br/>";
  $password=md5($password);



if($_POST['password'] !== $_POST['confirm'])
 {
  
  $msg="Password mis-matched";
  $flag=1;
  // display($msg);
  echo '<br><br><div style="color:black;background:red;width:100%;height:35px;text-align:center;padding-top:10px;">Password mis-matched</div>';
 }
  
//     echo "<h2>Submited Form</h2>";
//     echo "Username"." : ".$Name;
//     echo "<br>";
//     echo "<br>";
//     echo "Email"." : ".$Email;
//     echo "<br>";
//     echo "<br>";
//     echo "Mobileno". " : ".$Mobileno;
//     echo "<br>";
//     echo "<br>";

if(!$flag){
  $travellerinfo= array(
    'Username' => $Name,
    'Email' => $Email,
    'Mobile_no' => $Mobileno,
    'Password' => $Password
    );
 
  $table_name='travellerinfo';
  $obj= new traveller();
  $obj->insert($table_name, $travellerinfo);

}  
}
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

<body style="background-image: url('images/nice2.jpg');background-size:cover;">
    <form  method="post" action="">
      <div  style="border:1px solid white;border-radius:20px;background-color:white;height:600px;width:500px;margin-top:30px;margin-left:400px;"><br>
        <div style="color:blue;font-size:34px; border:1px solid white;text-align:center;"><b>Registration</b></div><br>
        <div style="font-size:18px; margin-left:20px;margin-right:20px;">
            <span>Required field</span>
            <b>User name</b><input type="text" class="form-control" name="username"><br>
            <b>Email address</b><input type="email" class="form-control" name="email"><br>
            <b>Mobile no</b><input type="text" class="form-control" maxlength=14 name="mobileno"><br>
            <b>Password</b><input type="password" class="form-control" name="password"><br>
            <b>Confirm password</b><input type="password" class="form-control"  name="confirm">
            <br>
         
            <center>
               <button type="submit" name="btnregister" style="background-color:orange;color:white;border-radius:10px;font-size:20px;text-align:center;">Submit</button><br>
            </center> 
       </div><br>
       <center>
          <div><p style="color:black;font-size:18px; margin-left:20px;">Already have an account?<a style="color:lightskyblue;font-size:18px;" href="index.php"> Login</a></p></div>
       </center>
      </div>
      <?php
        function display($msg){
      ?> 
      <div class="col-md-4 col-md-offset-5" style="color:white;">
       <?php
           echo $msg; 
       ?>
      </div>
      <?php
      }
      ?>
    </form>
</body>
</html>




<!-- echo '<br><br><div style="color:white;background:green;width:200px;height:35px;text-align:center;padding-top:15px;">password matched</div>';
echo '<br><br><div style="color:black;background:#7CFC00;width:100%;height:35px;text-align:center;padding-top:15px;">Thank you,Form has been submited</div>'; -->
