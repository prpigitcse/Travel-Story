<?php
include("data.php");
$flag=0;
$title = $_POST["title"];
$description = $_POST["description"];
$photo=$_FILES['file']['name'];

$filepath="upload/".$photo;
$up=move_uploaded_file($_FILES["file"]["tmp_name"] , "$filepath");

if(!$up)
{
echo'image not uploaded';
}

$form_data = array(
    'title'=> $title,
    'description'=>$description,
    'photo'=>$filepath
    
  );

  $table_name = 'stories';
  $x = new Connect();
  $x->insertstories("$table_name",$form_data);
  
 
  
?>

