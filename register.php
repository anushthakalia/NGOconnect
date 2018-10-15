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
    <style>
    #exTab2{
      margin: 0 0 3px 0;
    }
    </style>
  </head>
  <body>

  <?php

  require 'connect.inc.php';
  require 'core.inc.php';

  if(!loggedin()){

    if (!empty($_POST['student-submit'])) {



        if(isset($_POST['email'])&&isset($_POST['firstname'])&&isset($_POST['surname'])&&isset($_POST['phone'])&&isset($_POST['pass'])&&isset($_POST['repass'])&&isset($_POST['college']))
        {
          $email = trim($_POST['email']);

          $password = trim($_POST['pass']);
          $password_again = trim($_POST['repass']);

          $firstname = trim($_POST['firstname']);
          $surname = trim($_POST['surname']);
          $phone= trim($_POST['phone']);
          $college= trim($_POST['college']);

          if(!empty($email)&&!empty($password)&&!empty($password_again)&&!empty($firstname)&&!empty($surname)&&!empty($phone)&&!empty($college))
          {
            if(strlen($email)>40||strlen($firstname)>40||strlen($surname)>40)
            {
              echo 'Please adhere to maxlength of fields.';
            }
            else
            {
              if($password!=$password_again)
              {
                echo 'Passwords do not match.';
              }
              else
              {
                $password_hash = md5($password);

                $query = "SELECT `email` FROM `student` WHERE `email`='".mysqli_real_escape_string($mysql_connect, $email)."'";
                $query_run = mysqli_query($mysql_connect, $query);
                $query_num_rows = mysqli_num_rows($query_run);
                if($query_num_rows>=1)
                {
                  echo 'The email '.$email.' already exists.';
                }
                else
                {
                  $fk_ngo_id = rand(1,2);
                  $query = "INSERT INTO `student` (id,password,firstname,surname,email,college,phone,fk_ngo_id) VALUES ('','".mysqli_real_escape_string($mysql_connect, $password_hash)."','".mysqli_real_escape_string($mysql_connect, $firstname)."','".mysqli_real_escape_string($mysql_connect, $surname)."','".mysqli_real_escape_string($mysql_connect, $email)."','".mysqli_real_escape_string($mysql_connect, $college)."','".mysqli_real_escape_string($mysql_connect, $phone)."','$fk_ngo_id')";
                  echo $query;
                  if($query_run = mysqli_query($mysql_connect, $query))
                  {
                    header('Location: main.php');
                  }
                  else
                  {
                    echo 'Sorry, we couldn\'t register you at this time. Try again later.';
                  }
                }
              }
            }
    }
      else
      {
        echo 'All fields are required.';
      }


    }

  }

    else if (!empty($_POST['ngo-submit'])) {


          if(isset($_POST['email'])&&isset($_POST['ngoname'])&&isset($_POST['address'])&&isset($_POST['regno'])&&isset($_POST['pass'])&&isset($_POST['repass']))
            {
              $email = trim($_POST['email']);

              $password = trim($_POST['pass']);
              $password_again = trim($_POST['repass']);

              $ngoname = trim($_POST['ngoname']);
              $address = trim($_POST['address']);
              $regno= trim($_POST['regno']);

              if(!empty($email)&&!empty($password)&&!empty($password_again)&&!empty($ngoname)&&!empty($address)&&!empty($regno))
              {
                if(strlen($email)>40||strlen($ngoname)>30||strlen($address)>50)
                {
                  echo 'Please adhere to maxlength of fields.';
                }
                else
                {
                  if($password!=$password_again)
                  {
                    echo 'Passwords do not match.';
                  }
                  else
                  {
                    $password_hash = md5($password);

                    $query = "SELECT `email` FROM `ngo` WHERE `email`='".mysqli_real_escape_string($mysql_connect, $email)."'";
                    $query_run = mysqli_query($mysql_connect, $query);
                    $query_num_rows = mysqli_num_rows($query_run);
                    if($query_num_rows>=1)
                    {
                      echo 'The email '.$email.' already exists.';
                    }
                    else
                    {
                      $rand_com = rand(1, 2);
                      $query = "INSERT INTO ngo VALUES ('','".mysqli_real_escape_string($mysql_connect, $email)."','".mysqli_real_escape_string($mysql_connect, $password_hash)."','".mysqli_real_escape_string($mysql_connect, $ngoname)."','".mysqli_real_escape_string($mysql_connect, $address)."','".mysqli_real_escape_string($mysql_connect, $regno)."','$rand_com')";
                      if($query_run = mysqli_query($mysql_connect, $query))
                      {
                        header('Location: main.php');
                      }
                      else
                      {
                        echo 'Sorry, we couldn\'t register you at this time. Try again later.';
                      }
                    }
                  }
                }
        }
          else
          {
            echo 'All fields are required.';
          }


        }





    }

    else if (!empty($_POST['company-submit'])) {

      if(isset($_POST['email'])&&isset($_POST['comname'])&&isset($_POST['phone'])&&isset($_POST['pass'])&&isset($_POST['repass']))
        {
          $email = trim($_POST['email']);

          $password = trim($_POST['pass']);
          $password_again = trim($_POST['repass']);

          $comname = trim($_POST['comname']);
          $phone= trim($_POST['phone']);

          if(!empty($email)&&!empty($password)&&!empty($password_again)&&!empty($comname)&&!empty($phone))
          {
            if(strlen($email)>40||strlen($comname)>30)
            {
              echo 'Please adhere to maxlength of fields.';
            }
            else
            {
              if($password!=$password_again)
              {
                echo 'Passwords do not match.';
              }
              else
              {
                $password_hash = md5($password);

                $query = "SELECT `email` FROM `company` WHERE `email`='".mysqli_real_escape_string($mysql_connect, $email)."'";
                $query_run = mysqli_query($mysql_connect, $query);
                $query_num_rows = mysqli_num_rows($query_run);
                if($query_num_rows>=1)
                {
                  echo 'The email '.$email.' already exists.';
                }
                else
                {
                  $rand_ngo = rand(1,2);
                  $query = "INSERT INTO company VALUES ('','".mysqli_real_escape_string($mysql_connect, $email)."','".mysqli_real_escape_string($mysql_connect, $password_hash)."','".mysqli_real_escape_string($mysql_connect, $comname)."','".mysqli_real_escape_string($mysql_connect, $phone)."','$rand_ngo')";
                  if($query_run = mysqli_query($mysql_connect, $query))
                  {
                    header('Location: main.php');
                  }
                  else
                  {
                    echo 'Sorry, we couldn\'t register you at this time. Try again later.';
                  }
                }
              }
            }
    }
      else
      {
        echo 'All fields are required.';
      }

    }

    }

}
  else if(loggedin()){
    header('Location: main.php');
  }

  ?>

    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.html">NGO::connect</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.html" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Internships</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.html">Volunteer</a>
                  <a class="dropdown-item" href="courses.html">Data Entry</a>
                  <a class="dropdown-item" href="courses.html">Web Development</a>
                </div>

              </li>

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
                <a class="nav-link" href="about.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
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
              <h1 class="mb-2">Register</h1>
              <p class="bcrumb"><a href="index.html">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Register</span></p>
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
                      <h2 class="mb-5">Register new Student account</h2>
                      <form action="<?php echo $current_file; ?>" method="post">

                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Email Address</label>
                            <input name = "email" type="text" id="name11" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Firstname</label>
                            <input name = "firstname" type="text" id="name12" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Surname</label>
                            <input name = "surname" type="text" id="name13" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Phone number</label>
                            <input name = "phone" type="text" id="name14" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">College / Company Name</label>
                            <input name = "college" type="text" id="name15" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Password</label>
                            <input name = "pass" type="password" id="name16" class="form-control py-2 ">
                          </div>
                        </div>
                        <div class="row mb-5">
                          <div class="col-md-12 form-group">
                            <label for="name">Re-type Password</label>
                            <input name = "repass" type="password" id="name17" class="form-control py-2">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input name = "student-submit" type="submit" value="Register" class="btn btn-primary px-5 py-2">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="2">
                      <h2 class="mb-5">Register new NGO account</h2>
                      <form action="<?php echo $current_file; ?>" method="post">

                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Email Address</label>
                            <input name = "email" type="text" id="name21" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">NGO name</label>
                            <input name = "ngoname" type="text" id="name22" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Address</label>
                            <input name = "address" type="text" id="name23" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Registration number</label>
                            <input name = "regno" type="text" id="name24" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Password</label>
                            <input name = "pass" type="password" id="name25" class="form-control py-2 ">
                          </div>
                        </div>
                        <div class="row mb-5">
                          <div class="col-md-12 form-group">
                            <label for="name">Re-type Password</label>
                            <input name = "repass" type="password" id="name26" class="form-control py-2">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input name = "ngo-submit" type="submit" value="Register" class="btn btn-primary px-5 py-2">
                          </div>
                        </div>
                      </form>
                    </div>
                    <div class="tab-pane" id="3">
                      <h2 class="mb-5">Register new Company account</h2>
                      <form action="<?php echo $current_file; ?>" method="post">
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Company name</label>
                            <input name = "comname" type="text" id="name31" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Representative email address</label>
                            <input name = "email" type="text" id="name32" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Representative Phone number</label>
                            <input name = "phone" type="text" id="name33" class="form-control py-2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 form-group">
                            <label for="name">Password</label>
                            <input name= "pass" type="password" id="name34" class="form-control py-2 ">
                          </div>
                        </div>
                        <div class="row mb-5">
                          <div class="col-md-12 form-group">
                            <label for="name">Re-type Password</label>
                            <input name = "repass" type="password" id="name35" class="form-control py-2">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-6 form-group">
                            <input name = "company-submit" type="submit" value="Register" class="btn btn-primary px-5 py-2">
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
<!-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" class="text-primary">Colorlib</a> -->
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
