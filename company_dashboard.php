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
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo getuserfield('comname')?></a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="#aboutModal" data-toggle="modal" data-target="#myModal">My Profile</a>
                  <a class="dropdown-item" href="logout.php">Log Out</a>
                </div>

              </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>

    <div class="container">
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">My Profile</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="images/user.jpg" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><?php echo getuserfield('comname')?></h3>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Email: </strong><?php echo getuserfield('email')?></p>
                    <p class="text-left"><strong>Phone: </strong><?php echo getuserfield('phone')?></p>
                    <br>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
    $num_ngo = return_ngo_number_div_comdash();
    global $ngo_data;
    $ngo_data = array();
    $ngo_data[] = get_ngo_data_comdash();
    // print_r($ngo_data);
    // echo $num_ngo;
    ?>

    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Your Partner NGOs</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate center">
        <div class="nonloop-block-12 owl-carousel">

          <?php for ($i=0; $i < $num_ngo; $i++):
            $ngo_name = $ngo_data[0][0]['ngoname'];
          ?>

          <div class="item">
            <div class="block-19">
                <figure>
                  <img src="images/<?php echo $ngo_name ?>.png" alt="Image" class="img-fluid">
                </figure>

                  <!-- <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
                  <div class="meta d-flex align-items-center">
                  </div> -->
                <div class="text">
                  <h2 class="heading"><a href="#"><?php echo ($ngo_name)?></a></h2>
                  <div class="meta d-flex align-items-center">
                  </div>
                </div>
              </div>
          </div>

          <?php endfor; ?>

        </div>
        <div class="container">
          <div class="row justify-content-center mb-5 element-animate">
            <div class="col-md-7 text-center section-heading">
              <p><a href="ngo_list.php" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Sponsor an NGO</a></p>
            </div>
          </div>
        </div>
      </div>


    </div>
    <!-- END section -->
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

    <script src="js/main.js"></script>
  </body>
</html>
