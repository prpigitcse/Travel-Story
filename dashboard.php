<?php


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
      <div class="row">
          <div class="col-md-6">
               <div class="col-xs-12 col-md-12 text-center">
                   <img class="travel_img" src='images/travel1.jpg'>
               </div>
               <div class="col-md-12 text-center">
                  <div class="col-md-12">
                       <div class="col-xs-6 col-md-4">
                            <img class="travel_simg" src='images/travel2.jpg' >
                       </div>
                       <div class="col-xs-6 col-md-4">
                             <img class="travel_simg" src='images/travel3.jpg' >
                       </div>
                       <div class="col-xs-6 col-md-4">
                             <img class="travel_simg" src='images/travel2.jpg' >
                       </div>
                       <div class="col-xs-6 col-md-4">
                             <img class="travel_simg" src='images/travel3.jpg' >
                       </div>
                       <div class="col-xs-6 col-md-4">
                             <img class="travel_simg" src='images/travel2.jpg' >
                       </div>
                       <div class="col-xs-6 col-md-4">
                             <img class="travel_simg" src='images/travel3.jpg' >
                       </div>
                  </div>
            </div>
       </div>
                  <div class="col-md-6">
                     <div class="story">
                        <h2 class="text-center">Place</h2>

                     </div>
                  </div>          
              
   </div>
</body>
</html>