<!doctype html>
<html lang="en">
  <head>
    <title>NGO::CONNECT</title>
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
    require 'connect.inc.php';
    require 'core.inc.php';

    ?>

    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
           <?php
              if(!loggedin()){

                  echo '<a class="navbar-brand absolute" href="index.php">NGO::CONNECT</a>';
              }
              else{

               echo '<a class="navbar-brand absolute" href="main.php">NGO::CONNECT</a>';

            }
            ?>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Internships</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="courses.php">Volunteer</a>
                  <a class="dropdown-item" href="courses.php">Data Entry</a>
                  <a class="dropdown-item" href="courses.php">Web Development</a>
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
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
            <ul class="navbar-nav absolute-right">
              <li>
                <?php
              if(!loggedin()){
                  echo '<a href="main.php">Login</a> / <a href="register.php">Register</a>';
              }
              else{

                if(get_user()=='student'){
                  echo '<a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'; echo getuserfield('firstname'); echo " "; echo getuserfield('surname'); echo '</a>';

                }
                else if (get_user()=='ngo'){
                    echo '<a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'; echo getuserfield('ngoname'); echo '</a>';
                }
                else if (get_user()=='company'){
                    echo '<a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'; echo getuserfield('comname'); echo '</a>';
                }

                echo '<div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#">My Profile</a>
                  <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>';

            }
            ?>
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
              <h1 class="mb-2">Add an internship @ <?php echo getuserfield('ngoname');?></h1>

              <p></p>
              <!-- <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Contact Us</span></p> -->
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->
    <div class="site-section bg-light">

    <div class="container contact-form">
      <br>
                <form method="post">
                    <h1>Internship details</h1>
                   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                              <b>Internship title *</b>
                                <!-- <input type="text" name="txtDesignation" class="form-control" value="" /> -->
                                <select name="txtDesignation" class="form-control">
                                <option value=""></option>
                                <option value="Data Science">Data Science</option>
                                <option value="Programming">Programming</option>
                                <option value="Web Development">Web Development</option>
                                <option value="General Management">General Management</option>
                                <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <b>Internship sponsored by (Optional)</b>
                                <input type="text" name="txtCompany" class="form-control" placeholder="" value="" />
                            </div>
                            <div class="form-group">
                            <b>Internship Location *</b>
                                <!-- <input type="text" name="txtLocation" class="form-control" placeholder="" value="" /> -->
                                <select name="txtLocation" class="form-control">
                                <option value=""></option>
                                <option value="Delhi">Delhi</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <b>Internship Duration (in months) * </b>
                                <input type="number" name="txtDuration" class="form-control" placeholder="" value="" />
                            </div>
                            <div class="form-group">
                                <b>Contact email *</b>
                                <input type="text" name="txtEmail" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <b>Internship starts from *</b>
                                <input type="date" name="txtStartdate" class="form-control" value="" />
                            </div>
                            <div class="form-group">
                                <b>Internship application deadline *</b>
                                <input type="date" name="txtApplydate" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <b>Internship description (Max 500 Words) *</b>
                                <textarea name="txtDescription" class="form-control" placeholder="" style="width: 100%; height: 350px;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <input type="submit" name="btnSubmit" class="btnContact" value="Submit Internship" /> -->
                            <button type="submit" class="btn btn-primary px-5 py-2">Submit Internship</button>
                            <br>
                            <br>
                        </div>
                    </div>
                </form>
                <?php
                error_reporting(0);
                if(($_POST["txtDesignation"] == NULL) || ($_POST["txtDuration"] == NULL) ||
                    ($_POST["txtEmail"] == NULL) || ($_POST["txtStartdate"] == NULL) || ($_POST["txtApplydate"] == NULL) ||
                      ($_POST["txtDescription"] == NULL) || ($_POST["txtLocation"] == NULL)){
                        echo "<script>alert('Please fill all necessary entries.');</script>";
                        // echo "<b>Please fill all entries and try to submit again.</b>";
                } else{
                  mysqli_query($mysql_connect,'SET foreign_key_checks = 0');
                  $ngo_name = getuserfield("ngoname");
                  $insert_query = " INSERT INTO internship_details VALUES ('', '".$_POST["txtDesignation"]."', '$ngo_name',
                     '".$_POST["txtCompany"]."', '".$_POST["txtDescription"]."', '".$_POST["txtLocation"]."',
                      '".$_POST["txtStartdate"]."', '".$_POST["txtDuration"]."', '".$_POST["txtApplydate"]."', '', '', '  ') " ;
                  $test_query = mysqli_query($mysql_connect, $insert_query);
                  sleep(1);
                  #echo $insert_query;
                  echo "<script>alert('Entry successful!');document.location='main.php'</script>";
                }#echo $_POST["txtDesignation"];
                ?>
    </div>
  </div>


    <!-- END section -->

    <!-- <div id="map"></div> -->

     <?php
     if(!loggedin()){
       header('Location: index.php');
     }

     ?>


  <footer class="site-footer">
      <div class="container">
        <div class="row mb-3">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3>NGO::CONNECT</h3>
            <p>One stop platform for social internships. Give back to the society by taking up a task.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Quick Link</h3>
            <div class="row">
              <div class="col-md-6">
                <ul class="list-unstyled">
                   <?php
              if(!loggedin()){

                  echo '<li><a href="index.php">Home</a></li>';

              }
              else{

               echo '<li><a href="main.php">Home</a></li>';

            }
            ?>
                  <li><a href="about.php">About Us</a></li>
                  <li><a href="courses.php">Internships</a></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-unstyled">
                  <li><a href="#">Support</a></li>
                  <li><a href="contact.php">Contact</a></li>
                  <li><a href="#">Privacy</a></li>
                </ul>
              </div>
            </div>
          </div>
     
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


    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>


    <script src="js/main.js"></script>
  </body>
</html>
