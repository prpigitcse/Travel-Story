<?php  
session_start();  
require_once 'dbConnect.php';  

    class dbFunc {  
        private $db;
        public function __construct() {  
            $this->db = new dbConnect();   
        }  
    
        function Insertdata($table,$field,$data)
        {
            $field_values= implode(',',$field);
            $data_values=implode("','",$data);
        
            $sql= "INSERT INTO $table (".$field_values.")
        VALUES ('".$data_values."') ";
            $result = mysqli_query($this->db->conn,$sql);
            if($result)
            {
            }
            else
            {
                echo "Error: " . $sql . "" . mysqli_error($this->db->conn);
                exit(1);
            }
        }
        function fetch_comment()
        {
            $sql = " Select body from comments order by id DESC;";
            $result = mysqli_query($this->db->conn, $sql);      
            if($result)
            {
                $solutions = array();
                while($row = mysqli_fetch_assoc($result)) 
                {
                  $solutions[] = $row['body'];
                }
            return $solutions;
            }
            else
            {
                echo "Error: " . $sql . "" . mysqli_error($this->db->conn);
                exit(1);
            }
        }
    }
?>  