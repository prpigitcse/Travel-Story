<?php
session_start();

   session_destroy();
   unset($_SESSION['id']);
   echo "<script>location.href='index.php'</script>";
   die();

?>