<?php

session_start();
if(isset($_POST['submit'])){
include("travdb.php");
$id =$_POST['id'];
$password =$_POST['Password'];
$r = new traveller();
$r->login($id,$password);
}


?>