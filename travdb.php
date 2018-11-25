<?php
class traveller {

   private $server = "localhost";
   private $user = "root";
   private  $Password = "1";
   private  $dbname="travregister";
   private  $dbc;


  public function __construct()  {
       $this->dbc = new mysqli($this->server,$this->user,$this->Password,$this->dbname);
       return $this->dbc;

   }


   public function insert($table_name, $data)
   {

        $string = "INSERT INTO ".$table_name." (";
        $string .= implode(",", array_keys($data)) . ') VALUES (';
        $string .= "'" . implode("','", array_values($data)) . "')";
        try{
          $res =  mysqli_query($this->dbc, $string);
        //   print_r($res);
          header("Location:index.php");
       }catch(Exception $e){
            echo $e->getMessage(); die;
        }


       }

    
       public  function login($id,$password){
           
        $check = mysqli_query($this->dbc, "SELECT * FROM travellerinfo WHERE id='$id' AND `Password`='$password'");
        $row = mysqli_fetch_assoc($check);
        $_SESSION['id']= $row['id'];
        $_SESSION['password']=$row['Password'];
        $_SESSION['Mobile_no']=$row['Mobile_no'];
        $_SESSION['email']=$row['Email'];
        $_SESSION['Username']=$row['Username'];

        
        if(isset($row)){
 
            echo "<script>location.href='new.php'</script>";
    }
    else{
 
             header("Location: index.php");
            //  echo "<script>alert('invalid password and email')</script>";
 
 
    }
 
 }

}