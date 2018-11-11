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
    <link rel="stylesheet" href="css/magnific-popup.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
    require 'connect.inc.php';
    require 'core.inc.php';

    if (!empty($_POST['search'])) {

      if(isset($_POST['term'])){
        $term = trim($_POST['term']);

        $query = "ALTER TABLE `internship_details` ADD FULLTEXT(`Name`,`Location`);";
        if($query_run = mysqli_query($mysql_connect, $query))
            {
              $query_search = "SELECT * FROM `internship_details` WHERE MATCH (`Name`,`Location`) AGAINST('$term' IN NATURAL LANGUAGE MODE)";
              if($query_run = mysqli_query($mysql_connect, $query_search)){
                $query_run = mysqli_query($mysql_connect, $query_search);
                $myarray = array(); # initialize the array first!
              while($row = mysqli_fetch_assoc($query_run))
              {
                  $myarray[] = $row; # add the row
              }
              $_SESSION['myarray'] = $myarray;
              header("Location: courses.php");
              }
              
            }
            else{
              echo 'Unsucessful';
            }

      }

    }

    ?>
   
    <header role="banner">

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand absolute" href="index.php">NGO::CONNECT</a>
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
            ?> </li>
            </ul>

          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->

    <section class="site-hero overlay" data-stellar-background-ratio="0.5" style="background-image: url(images/big_image_2.jpg);">
      <div class="container">
        <div class="row align-items-center justify-content-center site-hero-inner">
          <div class="col-md-10">

            <div class="mb-5 element-animate">
              <div class="block-17">
                <h2 class="heading text-center mb-4">Serve the Society. Intern at an NGO.</h2>
                <form action="<?php echo $current_file; ?>" method="post" class="d-block d-lg-flex mb-4">
                  <div class="fields d-block d-lg-flex">
                    <div class="textfield-search one-third"><input name="term" type="text" class="form-control" placeholder="Search for internships..."></div>
                   <!--  <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Domain</option>
                        <option value="">Data Analyst</option>
                        <option value="">Volunteer</option>
                        <option value="">Developer</option>
                      </select>
                    </div>
                    <div class="select-wrap one-third">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select name="" id="" class="form-control">
                        <option value="">Location</option>
                        <option value="">Delhi</option>
                        <option value="">Mumbai</option>
                        <option value="">Kolkata</option>
                      </select>
                    </div> -->
                  </div>
                  <input type="submit" name = "search" class="search-submit btn btn-primary" value="Search">
                </form>
                <p class="text-center mb-5"><b>We need people to help the society.</b></p>
                <p class="text-center"><a href="register.php" class="btn py-3 px-5">Register Now</a></p>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section element-animate">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-md-2">
            <div class="block-16">
              <figure>
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
                <a href="https://vimeo.com/45830194" class="play-button popup-vimeo"><span class="ion-ios-play"></span></a>

                <!-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> -->

              </figure>
            </div>
          </div>
          <div class="col-md-6 order-md-1">

            <div class="block-15">
              <div class="heading">
                <h2>Our Reach</h2>
              </div>
              <div class="text mb-5">
              <p>In keeping with its philosophy of ‘Real Work Real Change’, NGO-connect has been established to support the organisations which are looking for a dynamic India. Our aim is to connect the individuals and corporates to Non Governmenta Organisations in order to bring a change in the responsibilities of each in perceiving the society. </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section pt-3 element-animate">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-book"></span></div>
              <div class="media-body">
                <h3 class="heading">States</h3>
              <p>We have a coverage of over 15 states and are expanding into one of the largest social avenues.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-student"></span></div>
              <div class="media-body">
                <h3 class="heading">Projects</h3>
                <p>We at NGO-connect have projects in each field and cover most of them for the benefit of the society.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-diploma"></span></div>
              <div class="media-body">
                <h3 class="heading">Companies</h3>
                <p>From a startup to a conglomerate like TATA group we have most of them on board</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="media block-6 d-block">
              <div class="icon mb-3"><span class="flaticon-professor"></span></div>
              <div class="media-body">
                <h3 class="heading">Responsibilities</h3>
                <p>It is our responsibility of providing a transparent window for NGO's and corporates to do social work.</p>
                <p><a href="#" class="more">Read More <span class="ion-arrow-right-c"></span></a></p>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

<section class="site-section bg-light element-animate" id="section-counter">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <figure><img src="images/8.jpg" alt="Image placeholder" class="img-fluid"></figure>
          </div>
          <div class="col-lg-5 ml-auto">
            <div class="block-15">
              <div class="heading">
                <h2>Why it all matters?</h2>
              </div>
              <div class="text mb-5">
                <p>As we lose ourselves in the service of others, we discover our own lives and our own happiness</p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-student"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="151">0</strong>
                    <span>NGO's</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-university"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="90">0</strong>
                    <span>Companies</span>
                  </div>
                </div>

              </div>
              <div class="col-md-6">
                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-books"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="4551">0</strong>
                    <span>Interns</span>
                  </div>
                </div>

                <div class="block-18 d-flex align-items-center">
                  <div class="icon mr-4">
                    <span class="flaticon-mortarboard"></span>
                  </div>
                  <div class="text">
                    <strong class="number" data-number="355">0</strong>
                    <span>Projects</span>
                  </div>
                </div>
                
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Our Work</h2>
            <p>There is a kind of victory in good work, no matter how humble.</p>
            
          </div>
        </div>
      </div>
      <div class="container-fluid block-11 element-animate align-items-center">
        <div class="nonloop-block-11 owl-carousel">
          <div class="item">
            <div class="block-19">
                <div class="text">
                  <h2 class="heading"><a href="#">Education</a></h2>
                  <p class="mb-4">Mission Education is a national level programme of NGO-connect, which is committed to providing basic education and healthcare to underprivileged children. NGO-connect believes that whether you are addressing healthcare, poverty, population control, unemployment or human rights, there's no better place to start than in the corridors of education.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
                <div class="text">
                  <h2 class="heading"><a href="#">HealthCare</a></h2>
                  <p class="mb-4">The need of the hour is thus a two pronged approach – first to bring quality healthcare services to doorsteps of the needy and second to promote healthcare awareness and contemporary healthcare seeking behavior among the underprivileged. We have been able to integrate healthsector majors to our platform to bring in the support the healthcare needs.</p>
                  <div class="meta d-flex align-items-center">
                    <div class="number">
                    </div>
                  </div>
                </div>
              </div>
          </div>

          <div class="item">
            <div class="block-19">
              <div class="text">
                <h2 class="heading"><a href="#">Women Empowerment</a></h2>
                <p class="mb-4">Various studies, as well as our experience, have shown that when we work towards women empowerment, the whole society benefits. But unfortunately in India, far from being empowered, most women are denied even their basic rights like health, education, employment and a respectable status in society. We help in giving the women the desired rights by our platform.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="item">
            <div class="block-19">
              <div class="text">
                <h2 class="heading"><a href="#">Children Welfare</a></h2>
                <p class="mb-4">Various studies, as well as our experience, have shown that when we work towards children welfare, the whole society benefits. But unfortunately in India, far from being empowered, most children are denied even their basic rights. Let's use this platform for children rights and opportunities which make them self-sufficient.</p>
                <div class="meta d-flex align-items-center">
                  <div class="number">
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>

      
    </div>
    <!-- END section -->


    <div class="container site-section element-animate">
      <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center section-heading">
            <h2 class="text-primary heading">Supporters Speak</h2>
            <p>We believe that if we are able to keep our supporters happy, then we have been able to create a platform that is useful.</p>
          </div>
        </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(images/tata_new.png); object-fit: ">
                <div class="box">
                  <h2>TATA Sons</h2>
                  <p>Indian Conglomerate</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>The group believes corporate social responsibility (CSR) is a critical mission that is at the heart of everything that it does, how it thinks and what it is.Tata companies work towards empowering people by helping them develop the skills they need to succeed in a global economy</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/tata.png" alt="">
                  </div>
                  <div class="name align-self-center">TATA Sons <span class="position">Indian Conglomerate</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2 ">
            <div class="flipper">
              <div class="front" style="background-image: url(images/auro.jpg); object-fit: contain;">
                <div class="box">
                  <h2>Aurobindo Pharma</h2>
                  <p>Commited to healthier life</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>Aurobindo Pharma's aim is to provide relevant and reliable education to women and children in different parts of India. This program was initiated to introduce non-academic traditional trade to the society which has been overlapped by science and technology.</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/auro.jpg" alt="">
                  </div>
                  <div class="name align-self-center">Aurobindo Pharma <span class="position">Commited to healthier life</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>

        <div class="col-md-6 col-lg-4">
          <div class="block-2">
            <div class="flipper">
              <div class="front" style="background-image: url(images/wipro_new.png);">
                <div class="box">
                  <h2>Wipro</h2>
                  <p>Applying Thoughts</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>At Wipro, we think that it is critical to engage with the social and ecological challenges that face
                    humanity. It is our conviction that the engagement with social issues must be deep, meaningful
                    and formed on the bedrock of long term commitment. We believe in the vision of our founder Mr. Azim Premji who has spent his life for others. </p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/wipro.png" alt="">
                  </div>
                  <div class="name align-self-center">Wipro <span class="position"></span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
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
            <h3>NGO::CONNECT</h3>
            <p>One stop platform for social internships. Give back to the society by taking up a task.</p>
          </div>
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
            <h3 class="heading">Quick Links</h3>
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
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>