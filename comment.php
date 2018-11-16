<?php
require_once('dbFunc.php');
$name = "guru";
$comment=$_POST['comment'];
$time=date("d F,Y");
$proimage = $_SESSION['proimage'];
$obj = new dbFunc();
if(isset($_POST['submit']));
{
    if(!(empty($comment))){
        $table = "comments";
        $field = array("body");
        $data = array($comment);
        $obj->Insertdata($table,$field,$data);
}
}
$row = $obj-> fetch_comment();
$count=count($row);
?>
<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page Title</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <script src="main.js"></script>
    </head>
<body>

      <h2 class='page-header'>Comments</h2>
      <?php
       if ($count >= 1) 
       {
           for($i=0;$i<$count;$i++)
           {
            

       echo "
             <div class='container'>
              <div class='row'>   
              <div class='col-md-8'>
              <section class='comment-list'>
          <!-- First Comment -->
          <article class='row'>
            <div class='col-md-2 col-sm-2 hidden-xs'>
              <figure class='thumbnail'>
                <img class=img-responsive' src='$proimage' />
                <figcaption class='text-center'>username</figcaption>
              </figure>
            </div>
            <div class='col-md-10 col-sm-10'>
              <div class='panel panel-default arrow left'>
                <div class='panel-body'>
                  <header class='text-left'>
                    <div class='comment-user'><i class='fa fa-user'></i> $name</div>
                    <time class='comment-date' ><i class='fa fa-clock-o'></i> $time</time>
                  </header>
                  <div class='comment-post'>
                    <p>
                   $row[$i]
                    </p>
                  </div>
                  <p class='text-right'><a href='#' class='btn btn-default btn-sm'><i class='fa fa-reply'></i> reply</a></p>
                </div>
              </div>
            </div>
          </article>
         
          </section>
          </div>
        </div>
        </div></div>

        ";}}
      ?>
      <div class="container">
        <div class='row'>
            <div class='col-md-8'>
            <h3>Comments</h3>
                <form method='POST' action='comment.php'>
                    <textarea name='comment' id='comment' class='form-control' cols='30' rows='10' maxlength='300'></textarea>
                   <br>
                    <input type='submit' name='submit' class='btn btn-danger' value='Submit'>
                </form>
            </div>
        </div>
        </div>
</body>
</html>