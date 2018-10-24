<?php
    require 'connect.inc.php';
    require 'core.inc.php';

    if (isset($_POST['student-apply'])){

     if(!loggedin()){
     $message = 'You need to Login/Register First!';
     echo "<script>
      alert($message);
      window.location.href='main.php';
      </script>";
   }
   else{

   $message = 'Applied! We have sent your resume to the NGO';
     echo "<script type='text/javascript'>alert(\"$message\");</script>"; 
   }
 }