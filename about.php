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

      require 'core.inc.php';
    ?>

    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <?php
             if(!loggedin()){

                 echo '<a class="navbar-brand absolute" href="index.php">NGO::connect</a>';

             }
             else{

              echo '<a class="navbar-brand absolute" href="main.php">NGO::connect</a>';

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
              <h1 class="mb-2">About Us</h1>
              <p class="bcrumb"><a href="index.php">Home</a> <span class="sep ion-android-arrow-dropright px-2"></span>  <span class="current">About Us</span></p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/care-volunteers-read-with-children.800.jpg" alt="Image placeholder" class="img-fluid">
              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="text mb-5">
              <p>NGOconnect is a platform where students can find meaningful Internships with various Non Governmental Organisations working to improve various aspects of our.</p>
              <div class="heading">
                <h2>Our Vision</h2>
              </div>
              <p>We like to change things. We believe in human potential. We believe in opportunities. This platform is a culmination of these believes. We constantly work on finding new ways to drive the positivity of action. We are focused on building the future where students can experience real opportunities to give back to the society while they continue their education and build a smarter future. We thrive to build a platform which helps the younger generation use their skills for making a better India.</p>

              </div>

            </div>

          </div>

        </div>

      </div>
    </section>
    <!-- END section -->

    <!-- <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">School Services</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit qui neque sint eveniet tempore sapiente.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-book"></span></div>
              <div class="media-body">
                <h3 class="heading">Knowledge is power</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-student"></span></div>
              <div class="media-body">
                <h3 class="heading">Senior High School</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
              <div class="media-body">
                <h3 class="heading">College of Arts &amp; Sciences</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-professor"></span></div>
              <div class="media-body">
                <h3 class="heading">Unmatched Proffessor</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit mess.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- END section -->

    <div class="container site-section element-animate">
      <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Why Join Our Community</h2>
            <p>At NGOconnect we promise to offer you a huge variety of opportunities to learn, grow and simultaneouly do your part for the social good.</p>
          </div>
        </div>
      <div class="block-3 d-md-flex pt-5">
        <div class="image" style="background-image: url('images/img_1.jpg'); "></div>
        <div class="text">
          <!-- <h4 class="subheading">Nice text here</h4> -->
          <h2 class="heading">Experienced Mentors</h2>
          <p>At NGOconnect we make sure our interns work under the guidance of highly skilled and qualified mentors, so that they gain the most during their time at the NGO.</p>
        </div>
      </div>
      <div class="block-3 d-md-flex">
        <div class="image order-2" style="background-image: url('images/img_2.jpg'); "></div>
        <div class="text order-1">
          <!-- <h4 class="subheading">Nice text here</h4> -->
          <h2 class="heading">Attractive Incentives</h2>
          <p>Not only you learn and work for social good during your internship, the top performing interns at every NGO get some compensation like goodies, discount coupons etc. for their hardwork. </p>
        </div>
      </div>
      <div class="block-3 d-md-flex">
        <div class="image" style="background-image: url('images/person-on-computer.jpg'); "></div>
        <div class="text">
          <!-- <h4 class="subheading">Nice text here</h4> -->
          <h2 class="heading">Easy to use Interface and Round-the-clock Support</h2>
          <p>The whole process of finding internships, or listing them is super easy at NGOconnect. Just a few clicks and you're done. Also, we provide round the clock support through or facebook page. You can find us at facebook.com/NGOconnect. Feel free to drop a message there and we'll be happy to resolve all your technical (and also non-tehnical) queries.</p>
        </div>
      </div>
    </div>


    <div class="site-section element-animate">
      <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center section-heading">
              <h2 class="text-primary heading">Frequently Asked Questions</h2>
              <p>Still have some doubts??. These FAQs might be able to answer them..</p>
            </div>
          </div>
        <div class="row">
          <div class="col-md-12">
            <div class="accordion block-8" id="accordion">
              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">I am a student willing to work for social welfare, how do I get started?<span class="icon"></span></a>
                </h3>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>It's simple just register on our Home Page as a student, fill out your preferences upon which you'd be suggested with availible opportunities. You can then go ahead apply to one or more of these internships.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">I am a NGO representative looking for volunteers to help our cause, how can I find them?<span class="icon"></span></a>
                </h3>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>It's simple just register on our Home Page as an NGO. Next step is to list down the various types of opportunities you've to offer along with skills and number of interns required. Later you can simply go through the profile of interested students and select one or more out of them.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">Do I need to pay any charges?  <span class="icon"></span></a>
                </h3>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>No..Nope..Nada..Nothing<br>It's totally free for everyone, whether you're a student looking to learn something or do some social good OR you're a NGO which is working for improving the status of a section of our society and is in search of some young and fresh minds who can help in some new and innovative ways. Nobody needs to pay anything for using NGOconnect.</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

              <div class="accordion-item">
                <h3 class="mb-0 heading">
                  <a class="btn-block" data-toggle="collapse" href="#collapseFour" role="button" aria-expanded="false" aria-controls="collapseFour">Who should I contact for more information?<span class="icon"></span></a>
                </h3>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                  <div class="body-text">
                    <p>Still have some doubts!!<br>Don't worry....<br>Feel free to call us on +91 99999 99999 (Mon to Fri 10AM to 6PM)<br>Or write to us at letstalk@ngoconnect.in</p>
                  </div>
                </div>
              </div> <!-- .accordion-item -->

            </div>
          </div>
        </div>
      </div>
    </div>

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
