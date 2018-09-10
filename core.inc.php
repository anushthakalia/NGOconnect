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

function getuserfield($field)
{
	global $mysql_connect;
	$query = "SELECT ".$field." FROM ".$_SESSION['table']." WHERE ".$_SESSION['table_id']."='".$_SESSION['user_id']."'";
	//echo $_SESSION['table_id'];
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


?>