<?php
$conn_error = 'Could not connect';

$mysql_host='localhost';
$mysql_user='root';
$mysql_pass=NULL;

$mysql_db='NGOconnect';
$mysql_connect = mysqli_connect($mysql_host,$mysql_user,$mysql_pass);

if(!@mysqli_connect($mysql_host,$mysql_user,$mysql_pass) || !@mysqli_select_db($mysql_connect, $mysql_db)){
	die($conn_error);
}


?>
