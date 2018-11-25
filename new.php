<?php
session_start();
if(isset($_SESSION['id'])){
$id = $_SESSION['id'];
$password = $_SESSION['password'];
$mobile =  $_SESSION['Mobile_no'];
$email =  $_SESSION['email'];
echo "<button class='btnstyle' type='button'  name='logout' ><a href='logout.php' style='color:#5cb85c;font-size:18px;'>logout</a></button>";

echo $id;
echo $password;
echo $mobile;
echo $email;
}

else{
header("Location:index.php");    
}
?>