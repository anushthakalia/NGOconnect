<?php


    require 'connect.inc.php';
    require 'core.inc.php';



    if(loggedin()){
    	echo 'You are logged in. <a href="logout.php">LogOut</a>';
    	// 
    	echo getuserfield('ngoName');
    }
    else{
    	include 'login.php';
    }


 ?>