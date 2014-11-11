<?php require_once("../includes/session.php"); ?>
<?php require_once("../includes/connection.php"); ?>
<?php require_once("../includes/functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin:Teachers</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
     <link href="css/style.css" rel="stylesheet">
   
  </head>

  <body>

    <div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item" href="admin_home.php">Home</a>
          <a class="blog-nav-item" href="admin_course.php">Courses</a>
          <a class="blog-nav-item" href="admin_students.php">Students</a>
          <a class="blog-nav-item active" href="admin_teachers.php">Teachers</a>
          <a class="blog-nav-item" href="admin_class.php">Classes</a>
          <a class="blog-nav-item" href="admin_post.php">Posts$Comments</a>
          <a class="blog-nav-item" href="admin_account.php">MyAccount</a>
          <a class="blog-nav-item" href="../public/logout.php">Logout</a>
       </nav>
      </div>
    </div>

    <br/>
    <br/>
    <br/>
    <div class="row">
    <div class="col-lg-12 col-md-offset-3">
    <?php

       $qu = "SELECT * from teacher";
       $run = mysqli_query($connection,$qu);

        echo' <div class="col-lg-6">';
        echo' <table class="table table-bordered">';
        echo' <thead>';
        echo' <tr class="success">';
        echo' <th>#</th>';
        echo' <th>TEACHER ID</th>';
        echo' <th>TEACHER NAME</th>';
        echo' <th>PASSWORD</th>';
        echo' <th>EMAIL</th>';
        echo' </tr>';
        echo' </thead>';
        echo' <tbody>';
        
        $i = 1;
        while($teachinfo = mysqli_fetch_array($run))
          {
                                        
            echo "<tr>
                <td>{$i}</td>
                <td>{$teachinfo['TR_ID']}</td>
                <td>{$teachinfo['TR_NAME']}</td>
                <td>{$teachinfo['PASSWORD']}</td>
                <td>{$teachinfo['EMAIL']}</td>
                </tr>";
            $i++;
          }

                             
        echo' </tbody>';
        echo' </table>';
        echo' </div>';

    ?>
    </div>
</div>
<div class="push"></div>
    <div class="blog-footer">
      <p>project by <a href="#">Sushmita-Sharan-Ashar</a></p>
    </div>
    <!--footer-->

   <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
  </body>
</html>