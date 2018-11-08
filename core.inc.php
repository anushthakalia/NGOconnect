<?php

require 'connect.inc.php';
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
$http_referer = @$_SERVER['HTTP_REFERER'];

function loggedin(){
	if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
		return true;
	}

	return false;
}

function get_user(){
	return $_SESSION['table'];
}

function getuserfield($field)
{
	global $mysql_connect;
	$query = "SELECT ".$field." FROM ".$_SESSION['table']." WHERE ".$_SESSION['table_id']."='".$_SESSION['user_id']."'";

	// echo $_SESSION['table_id'];
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$query_row = mysqli_fetch_assoc($query_run);
		$return_field = $query_row[$field];
		return $return_field;

	}
	else{
		echo 'Unsucessful';
	}
}

function return_internship_number_div_stdash()
{
	global $mysql_connect;
	$intern_student_id = getuserfield('id');
	$query = "SELECT * FROM internship_details WHERE fk_intern_select_id=$intern_student_id";
	#echo $query;
	//echo $_SESSION['table_id'];
	#echo $intern_student_id;
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$return_field = mysqli_num_rows($query_run);
		return $return_field;
	}
	else{
		echo 'Unsucessful';
	}
}

// <<<<<<< Updated upstream
function get_internship_data_stdash()
{
	global $mysql_connect;
	$intern_student_id = getuserfield('id');
	$query = "SELECT * FROM internship_details WHERE fk_intern_select_id='$intern_student_id'";
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$internship_push = array();
		$result = mysqli_query($mysql_connect, $query);
		while($row = mysqli_fetch_assoc($result)){
			$row = array_map('stripslashes', $row);
			$internship_push[] = $row;
		}
		return $internship_push;
	}
	else{
		echo 'Unsucessful';

	}
}

function return_intern_number_li_ngdash()
{
	global $mysql_connect;
	$intern_ngo_id = getuserfield('ngoid');
	$query = "SELECT * FROM student WHERE fk_ngo_id=$intern_ngo_id";

	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$return_field = mysqli_num_rows($query_run);
		return $return_field;
	}
	else{
		echo 'Unsucessful';
	}
}

function get_intern_data_ngdash()
{
	global $mysql_connect;
	$intern_ngo_id = getuserfield('ngoid');
	$query = "SELECT * FROM student WHERE fk_ngo_id=$intern_ngo_id";
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$internship_push = array();
		$result = mysqli_query($mysql_connect, $query);
		while($row = mysqli_fetch_assoc($result)){
			$row = array_map('stripslashes', $row);
			$internship_push[] = $row;
		}
		return $internship_push;
	}
	else{
		echo 'Unsucessful';
	}
}

function return_internship_number_div_ngdash()
{
	global $mysql_connect;
	$internship_ngo_id = getuserfield('ngoid');
	$query = "SELECT * FROM internship_details WHERE fk_ngo_id=$internship_ngo_id";

	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$return_field = mysqli_num_rows($query_run);
		return $return_field;
	}
	else{
		echo 'Unsucessful';
	}
}

function get_internship_data_ngdash()
{
	global $mysql_connect;
	$internship_ngo_id = getuserfield('ngoid');
	$query = "SELECT * FROM internship_details WHERE fk_ngo_id=$internship_ngo_id";
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$internship_push = array();
		$result = mysqli_query($mysql_connect, $query);
		while($row = mysqli_fetch_assoc($result)){
			$row = array_map('stripslashes', $row);
			$internship_push[] = $row;
		}
		return $internship_push;
	}
	else{
		echo 'Unsucessful';
	}
}

function return_company_number_div_ngdash()
{
	global $mysql_connect;
	$ngo_id = getuserfield('ngoid');
	$query = "SELECT * FROM company WHERE fk_ngo_id=$ngo_id";

	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$return_field = mysqli_num_rows($query_run);
		return $return_field;
	}
	else{
		echo 'Unsucessful';
	}
}

function get_company_data_ngdash()
{
	global $mysql_connect;
	$ngo_id = getuserfield('ngoid');
	$query = "SELECT * FROM company WHERE fk_ngo_id=$ngo_id";
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$internship_push = array();
		$result = mysqli_query($mysql_connect, $query);
		while($row = mysqli_fetch_assoc($result)){
			$row = array_map('stripslashes', $row);
			$internship_push[] = $row;
		}
		return $internship_push;
	}
	else{
		echo 'Unsucessful';
	}
}


function return_ngo_number_div_comdash()
{
	global $mysql_connect;
	$com_id = getuserfield('comid');
	$query = "SELECT * FROM ngo WHERE fk_comid=$com_id";

	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$return_field = mysqli_num_rows($query_run);
		return $return_field;
	}
	else{
		echo 'Unsucessful';
	}
}

function get_ngo_data_comdash()
{
	global $mysql_connect;
	$com_id = getuserfield('comid');
	$query = "SELECT * FROM ngo WHERE fk_comid=$com_id";
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$internship_push = array();
		$result = mysqli_query($mysql_connect, $query);
		while($row = mysqli_fetch_assoc($result)){
			$row = array_map('stripslashes', $row);
			$internship_push[] = $row;
		}
		return $internship_push;
	}
	else{
		echo 'Unsucessful';
	}
}
// =======
function get_intern($title, $location, $tag){
	global $mysql_connect;
	if ($title!=null){
	$query = "SELECT * FROM `internship_details` WHERE `Name`='".$title."'";
	// echo $query;
	}
	else if ($location!=null){
		$query = "SELECT * FROM `internship_details` WHERE `Location`='".$location."'";
	}
	else if ($tag!=null){
		$query = "SELECT * FROM `internship_details` WHERE `Tags`='".$tag."'";
	}
	else{
		$query = "SELECT * FROM `internship_details`";
	}
	//echo $_SESSION['table_id'];
	if($query_run = mysqli_query($mysql_connect, $query))
	{
		$query_run = mysqli_query($mysql_connect, $query);
		$myarray = array(); # initialize the array first!
		while($row = mysqli_fetch_array($query_run))
		{
		    $myarray[] = $row; # add the row
		}
		// $return_field = $query_row[$field];
		return $myarray;

	}
	else{
		echo 'Unsucessful_2';}

}

// >>>>>>> Stashed changes

?>
