<html>
<!-- <embed src="uploads/Anushtha_Kalia_resume.pdf" /> -->
<?php
require 'connect.inc.php';
require 'core.inc.php';

if(!loggedin()){
  header('Location: index.php');
}

?>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Theme Style -->
  <link rel="stylesheet" href="css/style.css">
  <script>
  $(document).ready(function(){
  $('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var name = button.data('name')
    var college = button.data('college')
    var email = button.data('email')
    var resume = button.data('resume')
    var modal = $(this)
    // modal.find('.modal-title').text(ngoname)
    modal.find('.modal-body #exampleModalName').text('Name: ' + name)
    modal.find('.modal-body #exampleModalCollege').text('College: ' + college)
    modal.find('.modal-body #exampleModalEmail').text('Email: ' + email)
    if(resume!=''){
    modal.find('.modal-footer #profbutton').attr('href','resume.php?name=' + resume)
  }
  });
  });
  </script>
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

  <div class="site-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-7 text-center section-heading">
          <h2 class="text-primary heading">List of applicants</h2>
        </div>
      </div>
    </div>
    <div class="container">
      <table class="table table-hover element-animate">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Internship</th>
            <th scope="col">Applicant name</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $rows = get_ngo_intcount_number_application();
            global $internship_push;
            $internship_push = array();
            $internship_push[] = get_ngo_intcount_application();
            // echo print_r($internship_push);
            for ($i=0; $i < $rows; $i++):
            $k = 1;
            $internship_name = $internship_push[0][$i]['Name'];
            $internship_id = $internship_push[0][$i]['internship_id'];
            $inner = get_internship_matchcount_number_application($internship_id);
            global $applicant_push;
            $applicant_push = array();
            $applicant_push[] = get_internship_matchcount_application($internship_id);
            for ($j=0; $j < $inner; $j++):
              $intern_id = $applicant_push[0][$j]['fk_intern_id'];
              $query_row_final = get_intern_name_application($intern_id);
              $student_name = $query_row_final['firstname'].' '.$query_row_final['surname'];
              $student_email = $query_row_final['email'];
              $student_college = $query_row_final['college'];
              $student_resume = $query_row_final['Resume'];

          ?>
          <tr data-toggle="modal" data-target="#exampleModal" data-name="<?php echo $student_name ?>" data-email="<?php echo $student_email ?>" data-college="<?php echo $student_college ?>" data-resume="<?php echo $student_resume ?>">
            <th scope="row"><?php echo $k; ?></th>
            <td><?php echo $internship_name?></td>
            <td><?php echo $student_name?></td>
          </tr>
          <?php $k = $k + 1;
        endfor;
        endfor; ?>
        </tbody>
      </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalName">Candidate Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
          <p class="text-left" id="exampleModalName"><strong>Name: </strong>Hi</p>
          <p class="text-left" id="exampleModalCollege"><strong>College: </strong>Hi</p>
          <p class="text-left" id="exampleModalEmail"><strong>Email: </strong>Hi</p>
          <br>
          </center>
        </div>
        <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <a href="#" class="btn btn-primary" id="profbutton" role="button">View Profile</a>
      </div>
      </div>
    </div>
  </div>
  </div>
  </body>

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
