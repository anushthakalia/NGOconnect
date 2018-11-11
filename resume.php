<!doctype html>
<html>
<!-- <embed src="uploads/Anushtha_Kalia_resume.pdf" /> -->
<?php
require 'connect.inc.php';
require 'core.inc.php';
// echo $_SESSION['table_id'];
?>
<body style="margin:0px;padding:0px;overflow:hidden">
	<div class = 'container'>
    <iframe src=<?php echo 'uploads/'.$_GET['name']?> frameborder="0" style="position: absolute;overflow:hidden;height:100%;width:100%" height="100%" width="100%"></iframe>
	</div>
</body>
</html>
