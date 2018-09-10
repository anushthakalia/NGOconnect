<?php


    require 'connect.inc.php';
    require 'core.inc.php';



    if(loggedin()){

        if(get_user()=='student'){
            include 'student_dashboard.php';
        }
        else if (get_user()=='ngo'){
            include 'ngo_dashboard.php';
        }
        else if (get_user()=='company'){
            include 'company_dashboard.php';
        }

    	
    	// 
    	//echo getuserfield('ngoName');
    }
    else{
    	include 'login.php';
    }


 ?>