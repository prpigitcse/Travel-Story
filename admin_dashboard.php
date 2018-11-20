<?php
    include("db.php");
    $obj=new db();
    $conn=$obj->dbconnector();

    $res = mysqli_query($conn, "SELECT * FROM user_details");

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link rel="stylesheet" href="admin.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="wrapper">
   <div class="container-fluid">
      <div class="row">
         <div class=" col-xs-12 col-md-6 text-center search">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
               <input type="text" name="employeeid"  size="30" placeholder="Search by place"/>
               <button type="submit" class="search_btn" id="search" name="search">Search</button><br /><br />
            </form>
         </div>
         <div class="col-xs-12 col-md-6 dashboard-header">
            <div class="col-md-12 text-right">
                <button class="button"><a href="edit.php">Edit Profile</a></button>
                <button class="button"><a href="logout.php">Logout</a></button>
            </div>
         </div>
      </div>
      <?php
       while($row=mysqli_fetch_array($res)){
             $user_id=$row['user_id'];
            $res1 = mysqli_query($conn, "SELECT * FROM travel_details where user_id=$user_id");
            while($row1=mysqli_fetch_array($res1)){
            $banner_image=$row1['banner_images'];
            $banner_path=$banner_image;

            $sub_image=$row1['sub_images'];
            $sub_image_data  = $sub_image;
            $sub_image_final = explode(",", $sub_image_data);

            $story_id=$row1['story_id'];

            $res2 = mysqli_query($conn, "SELECT * FROM story where story_id=$user_id");
            while($row2=mysqli_fetch_array($res2)){

            $description=$row2['description'];
            
           
      ?>
      
      <div class="row">
      <div class="col-md-12 main-container">
          <div class="col-md-6">
               <div class="col-xs-12 col-md-12 text-center">
                   <img class="travel_img" src=<?php echo $banner_path;?>>
               </div>
               <div class="col-md-12 text-center">
                  <div class="col-md-12">
                      <?php
                       foreach($sub_image_final as $sub_images)
                       {
                           ?>
                        <div class="col-xs-6 col-md-4">
                        <img class="travel_simg" src=<?php echo $sub_images;?> >
                        </div>
                        <?php
                       }
                       ?>
                  </div>
            </div>
       </div>
                  <div class="col-md-6">
                     <div class="story">
                        <h2 class="text-center"><?php echo $description ?></h2>

                     </div>
                  </div> 
                  <?php
       }
    }
}
                  ?>
              
   </div>
</div>
</body>
</html>