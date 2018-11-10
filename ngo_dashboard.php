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
                <a class="nav-link dropdown-toggle" href="courses.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo getuserfield('ngoname')?></a>
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
                        <h3 class="media-heading"><?php echo getuserfield('ContactName')?></h3>
                        <h6 class="media-heading"><?php echo getuserfield('ngoname')?></h6>
                        </center>
                        <hr>
                        <center>
                        <p class="text-left"><strong>Your email: </strong><?php echo getuserfield('ContactEmail')?></p>
                        <p class="text-left"><strong>Address: </strong><?php echo getuserfield('address')?></p>
                        <p class="text-left"><strong>NGO email: </strong><?php echo getuserfield('email')?></p>
                        <p class="text-left"><strong>Registration Number: </strong><?php echo getuserfield('regno')?></p>
                        <br>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $num_students = return_intern_number_li_ngdash();
    global $intern_data;
    $intern_data = array();
    $intern_data[] = get_intern_data_ngdash ();
    #print_r($intern_data);
    #echo $num_students;
    ?>

    <?php
    $num_company = return_company_number_div_ngdash();
    global $company_data;
    $company_data = array();
    $company_data[] = get_company_data_ngdash();
    #print_r($company_data);
    #echo $num_students;
    ?>

    <?php
    $num_posts = return_internship_number_div_ngdash();
    global $internship_data;
    $internship_data = array();
    $internship_data[] = get_internship_data_ngdash();
    #print_r($internship_data);
    #echo $num_students;
    ?>

<!-- END section -->

<div class="site-section bg-light">
  <div class="container">
    <div class="row justify-content-center mb-5 element-animate">
      <div class="col-md-7 text-center section-heading">
        <h2 class="text-primary heading">Your Internships</h2>
      </div>
    </div>
  </div>
  <div class="container-fluid block-11 element-animate center">
    
    <div class="container">
    <table class="table table-hover element-animate">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Profile</th>
          <th scope="col">Duration</th>
          <th scope="col">Location</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i=0; $i < $num_posts; $i++):
          $internship_name = $internship_data[0][$i]['Name'];
          $internship_dur = $internship_data[0][$i]['Duration'];
          $internship_loc = $internship_data[0][$i]['Location'];
        ?>
        <tr data-toggle="modal" data-target="#exampleModal" data-conname="<?php echo $ngo_contact_name ?>" data-conemail="<?php echo $ngo_contact_email ?>" data-email="<?php echo $ngo_email ?>" data-name="<?php echo $ngo_name ?>">
          <th scope="row"><?php echo $i+1; ?></th>
          <td><?php echo $internship_name?></td>
          <td><?php echo $internship_dur?></td>
          <td><?php echo $internship_loc?></td>
        </tr>
        <?php endfor; ?>
      </tbody>
    </table>
  </div>
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-7 text-center section-heading">
          <br>
          <p><a href="new_internship_form.php" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>Add an internship</a>
          <a href="#" class="btn btn-primary py-2 px-4"><span class="ion-ios-book mr-2"></span>See Applications</a></p>
        </div>
      </div>
    </div>
  </div>


<br><br><br>

<div class="container">
  <div class="row justify-content-center mb-5 element-animate">
    <div class="col-md-7 text-center section-heading">
      <h2 class="text-primary heading">Your Partner Companies</h2>
    </div>
  </div>
</div>
<div class="container-fluid block-11 element-animate center">
  <div class="nonloop-block-12 owl-carousel">

    <?php for ($i=0; $i < $num_company; $i++):
      $company_name = $company_data[0][0]['comname'];
    ?>

    <div class="item">
      <div class="block-19">
          <figure>
            <img src="images/<?php echo $company_name ?>.jpg" alt="Image" class="img-fluid">
          </figure>
          <div class="text">
            <h2 class="heading"><div style="text-align:center"><a href="#"><?php echo ($company_name)?></a></div></h2>
            <div class="meta d-flex align-items-center">
            </div>
          </div>
        </div>
    </div>

    <?php endfor; ?>

  </div>
</div>

<br><br><br>

<div class="container">
  <div class="row justify-content-center mb-5 element-animate">
    <div class="col-md-7 text-center section-heading">
      <h2 class="text-primary heading">Your Interns</h2>
    </div>
  </div>
</div>
<div class="container-fluid block-11 element-animate center">
  

  <div class="container">
    <table class="table table-hover element-animate">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">College</th>
          <th scope="col">Profile</th>
        </tr>
      </thead>
      <tbody>
        <?php for ($i=0; $i < $num_students; $i++):
      $intern_id = $intern_data[0][$i]['id'];
      global $internship_data;
      $internship_data = array();
      $internship_data[] = return_internship_info_div_ngdash($intern_id);
      $internship_descr = $internship_data[0][0]['Name'];
      $intern_name = $intern_data[0][$i]['firstname']." ".$intern_data[0][$i]['surname'];
      $intern_college = $intern_data[0][$i]['college'];
      $intern_phone = $intern_data[0][$i]['phone'];
    ?>
        <tr data-toggle="modal" data-target="#exampleModal" data-conname="<?php echo $ngo_contact_name ?>" data-conemail="<?php echo $ngo_contact_email ?>" data-email="<?php echo $ngo_email ?>" data-name="<?php echo $ngo_name ?>">
          <th scope="row"><?php echo $i+1; ?></th>
          <td><?php echo $intern_name?></td>
          <td><?php echo $intern_college?></td>
          <td><?php echo $internship_descr?></td>
        </tr>
        <?php endfor; ?>
      </tbody>
    </table>
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
