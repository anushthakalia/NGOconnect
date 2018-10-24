<!doctype html>
<html lang="en">
  <head>
    <title>Free Education Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <?php

    if (!empty($_POST['student-submit'])) {
           if (isset($_POST['email']) && isset($_POST['password'])){
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if(!empty($email) && !empty($password))
            {
              $password_hash = md5($password);
              $query = "SELECT `id` FROM `student` WHERE `email`='".mysqli_real_escape_string($mysql_connect, $email)."' AND `password`='".mysqli_real_escape_string($mysql_connect, $password_hash)."'";
              if($query_run = mysqli_query($mysql_connect, $query))
              {
                $query_run = mysqli_query($mysql_connect, $query);
                
                $query_num_rows = mysqli_num_rows($query_run);
                if($query_num_rows==0)
                {
                  echo 'Invalid email/password.';
                }
                else if($query_num_rows==1)
                {
                  $query_row = mysqli_fetch_assoc($query_run);
                  $user_id = $query_row['id'];
                  $_SESSION['user_id'] = $user_id;
                  $_SESSION['table']='student';
                  $_SESSION['table_id'] = 'id';
                  // echo 'logged in';
                  header('Location: main.php');
                }
              }
            }
            else
            {
              echo 'You must enter an email and password.';
            }

         }
         else{
          echo 'Not set';
         }

    }

    else if (!empty($_POST['ngo-submit'])) {

        if (isset($_POST['email']) && isset($_POST['password'])){
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if(!empty($email) && !empty($password))
            {
              $password_hash = md5($password);
              $query = "SELECT `ngoid` FROM `ngo` WHERE `email`='".mysqli_real_escape_string($mysql_connect, $email)."' AND `password`='".mysqli_real_escape_string($mysql_connect, $password_hash)."'";
              if($query_run = mysqli_query($mysql_connect, $query))
              {
                $query_run = mysqli_query($mysql_connect, $query);
                
                $query_num_rows = mysqli_num_rows($query_run);
                if($query_num_rows==0)
                {
                  echo 'Invalid email/password.';
                }
                else if($query_num_rows==1)
                {
                  $query_row = mysqli_fetch_assoc($query_run);
                  $user_id = $query_row['ngoid'];
                  $_SESSION['user_id'] = $user_id;
                  $_SESSION['table']='ngo';
                  $_SESSION['table_id'] = 'ngoid';
                 // echo 'logged in';
                  header('Location: main.php');
                }
              }
            }
            else
            {
              echo 'You must enter an email and password.';
            }

         }
         else{
          echo 'Not set';
         }

       //do something here;
    }

    else if (!empty($_POST['company-submit'])) {

          if (isset($_POST['email']) && isset($_POST['password'])){
            
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            if(!empty($email) && !empty($password))
            {
              $password_hash = md5($password);
              $query = "SELECT `comid` FROM `company` WHERE `email`='".mysqli_real_escape_string($mysql_connect, $email)."' AND `password`='".mysqli_real_escape_string($mysql_connect, $password_hash)."'";
              if($query_run = mysqli_query($mysql_connect, $query))
              {
                $query_run = mysqli_query($mysql_connect, $query);
                
                $query_num_rows = mysqli_num_rows($query_run);
                if($query_num_rows==0)
                {
                  echo 'Invalid email/password.';
                }
                else if($query_num_rows==1)
                {
                  $query_row = mysqli_fetch_assoc($query_run);
                  $user_id = $query_row['comid'];
                  $_SESSION['user_id'] = $user_id;
                  $_SESSION['table'] = 'company';
                  $_SESSION['table_id'] = 'comid';
                  // echo 'logged in';
                  header('Location: main.php');
                }
              }
            }
            else
            {
              echo 'You must enter a username and password.';
            }

         }
         else{
          echo 'Not set';
         }

       //do something here;
    }



    ?>
    
    <header role="banner">
     
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.php">NGO::connect</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Internships</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.php">Volunteer</a>
                  <a class="dropdown-item" href="courses.php">Data Entry</a>
                  <a class="dropdown-item" href="courses.php">Web Development</a>
                </div>

              </li> -->

              <!-- li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categories</a>
                <div class="dropdown-menu" aria-labelledby="dropdown05">
                  <a class="dropdown-item" href="#">HTML</a>
                  <a class="dropdown-item" href="#">WordPress</a>
                  <a class="dropdown-item" href="#">Laravel</a>
                  <a class="dropdown-item" href="#">JavaScript</a>
                  <a class="dropdown-item" href="#">Python</a>
                </div>

              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="courses.php">Internships</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <a href="main.php">Login</a> / <a href="register.php">Register</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero site-sm-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-sm-inner">
          <div class="col-md-7 text-center">
  
            <div class="mb-5 element-animate">
              <h1 class="mb-2">Log in</h1>
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Log in</span></p>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    
    <section class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7">
            <div class="form-wrap">

              <div id="exTab2" class="container"> 
                <ul class="nav nav-tabs row mb-5">
                  <li class="active">
                    <a  href="#1" data-toggle="tab" class="col-md-4 col-lg-4 mb-lg-0">Student</a>
                  </li>
                  <li><a href="#2" data-toggle="tab" class="col-md-4 col-lg-4 mb-lg-0">NGO</a>
                  </li>
                  <li><a href="#3" data-toggle="tab" class="col-md-4 col-lg-4 mb-lg-0">Industry</a>
                  </li>
                </ul>

                <div class="tab-content row">
                  <div class="tab-pane active" id="1">

                    <h2 class="mb-4">Student Login</h2>
                    <form name = "student" action="<?php echo $current_file; ?>" method="POST">
                      <div class="row">
                        <div class="col-md-12 form-group">
                          <label for="name">Email</label>
                          <input name = "email" type="text" id="name1" class="form-control py-2">
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-12 form-group">
                          <label for="name">Password</label>
                          <input name = "password" type="password" id="pass1" class="form-control py-2">
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <input type="submit" name = "student-submit" value="Login" class="btn btn-primary px-5 py-2">
                        </div>
                      </div>
                    </form>

                  </div>

                  <div class="tab-pane" id="2">

                    <h2 class="mb-4">NGO Login</h2>
                    <form name = "ngo" action="<?php echo $current_file; ?>" method="post">
                      <div class="row">
                        <div class="col-md-12 form-group">
                          <label for="name">Email</label>
                          <input name = "email" type="text" id="name2" class="form-control py-2">
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-12 form-group">
                          <label for="name">Password</label>
                          <input name = "password" type="password" id="pass2" class="form-control py-2">
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <input type="submit" name = "ngo-submit" value="Login" class="btn btn-primary px-5 py-2">
                        </div>
                      </div>
                    </form>

                  </div>

                  <div class="tab-pane" id="3">

                    <h2 class="mb-4">Company Login</h2>
                    <form name = "company" action="<?php echo $current_file; ?>" method="post">
                      <div class="row">
                        <div class="col-md-12 form-group">
                          <label for="name">Email</label>
                          <input name = "email" type="text" id="name3" class="form-control py-2">
                        </div>
                      </div>
                      <div class="row mb-5">
                        <div class="col-md-12 form-group">
                          <label for="name">Password</label>
                          <input name = "password" type="password" id="pass3" class="form-control py-2">
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="col-md-6 form-group">
                          <input type="submit" name = "company-submit" value="Login" class="btn btn-primary px-5 py-2">
                        </div>
                      </div>
                    </form>

                  </div>

                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<footer class="site-footer">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3>NGO::connect</h3>
            <p>One stop platform for social internships. Give back to the society by taking up a task.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Internships</a></li>
                  <li><a href="#">Pages</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">News</a></li>
                  <li><a href="#">Support</a></li>
                  <li><a href="#">Contact</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>
     <!--      <div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
            <h3 class="heading">Blog</h3>
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Consectetur Adipisicing Elit</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  --> 
            <!-- <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Dolore Tempora Consequatur</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
            <div class="block-21 d-flex mb-4">
              <div class="text">
                <h3 class="heading mb-0"><a href="#">Perferendis eum illum</a></h3>
                <div class="meta">
                  <div><a href="#"><span class="ion-android-calendar"></span> May 29, 2018</a></div>
                  <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                  <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                </div>
              </div>
            </div>  
          </div> -->
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Contact Information</h3>
            <div class="block-23">
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Cluster Innovation Centre, University of Delhi</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+91 9999 99999</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@ducic.ac.in</span></a></li>
                <!-- <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li> -->
              </ul>
            </div>
          </div>
        </div>
        <div class="row pt-5">
          <div class="col-md-12 text-center copyright">
            
            <p class="float-md-left"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a>
 --><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <p class="float-md-right">
              <a href="#" class="fa fa-facebook p-2"></a>
              <a href="#" class="fa fa-twitter p-2"></a>
              <a href="#" class="fa fa-linkedin p-2"></a>
              <a href="#" class="fa fa-instagram p-2"></a>

            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->
    
    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery-migrate-3.0.0.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>

    <script src="js/main.js"></script>
  </body>
</html>