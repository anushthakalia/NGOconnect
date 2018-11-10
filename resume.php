<html>
<!-- <embed src="uploads/Anushtha_Kalia_resume.pdf" /> -->
<?php
require 'connect.inc.php';
require 'core.inc.php';


global $mysql_connect;
$query = "SELECT * FROM `student` WHERE `id`='".$_SESSION['user_id']."'";
$field = 'Resume';
$prefix = 'uploads/';
// echo $_SESSION['table_id'];
if($query_run = mysqli_query($mysql_connect, $query))
{
	$query_run = mysqli_query($mysql_connect, $query);
	$query_row = mysqli_fetch_assoc($query_run);
	$filename = $query_row[$field];

}

?>

<iframe src="<?php echo $prefix.$query_row['Resume'];?>" style="width: 100%;height: 100%;border: none;"></iframe>
</html>