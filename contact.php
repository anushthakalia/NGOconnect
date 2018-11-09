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
              <li class="nav-item">
                <a class="nav-link" href="courses.php">Internships</a>

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
              <h1 class="mb-2">Contact Us</h1>
              <p class="bcrumb"><?php
             if(!loggedin()){

                 echo '<a href="index.php">Home</a>';

             }
             else{

              echo '<a href="main.php">Home</a>';

           }
           ?>  <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">Contact Us</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-8 pr-md-5">
            <form action="#" method="post">
                  <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="name">Name</label>
                      <input type="text" id="name" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="phone">Phone</label>
                      <input type="text" id="phone" class="form-control py-2">
                    </div>
                    <div class="col-md-4 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control py-2">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write Message</label>
                      <textarea name="message" id="message" class="form-control py-2" cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Send Message" class="btn btn-primary">
                    </div>
                  </div>
                </form>
          </div>
          <div class="col-md-4">

            <div class="block-23">
              <h3 class="heading mb-5">Contact Information</h3>
              <ul>
                <li><span class="icon ion-android-pin"></span><span class="text">Cluster Innovation Centre, University of Delhi</span></li>
                <li><a href="#"><span class="icon ion-ios-telephone"></span><span class="text">+91 9999 99999</span></a></li>
                <li><a href="#"><span class="icon ion-android-mail"></span><span class="text">info@ducic.ac.in</span></a></li>
                <li><span class="icon ion-android-time"></span><span class="text">Monday &mdash; Friday 8:00am - 5:00pm</span></li>
              </ul>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- END section -->

    <!-- <div id="map"></div> -->

     <?php
              if(!loggedin()){

                  echo '<div class="py-5 block-22">
                      <div class="container">
                        <div class="row align-items-center">
                          <div class="col-md-6 mb-4 mb-md-0 pr-md-5">
                            <h2 class="heading">Help the underprivileged</h2>
                            <p>Receive regular updates about internships at NGOs and do your part for the society.</p>
                          </div>
                          <div class="col-md-6">
                            <form action="#" class="subscribe">
                              <div class="form-group">
                                <input type="email" class="form-control email" placeholder="Enter email">
                                <input type="submit" class="btn btn-primary submit" value="Subscribe">
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>';

              }
              else{


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
