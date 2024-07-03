<?php 
session_start();
if(isset($_SESSION['username'])){
	session_destroy();
	echo "<Script>location.href='user&admin.php'</Script>";
}

else
{
	echo "<Script>location.href='user&admin.php'</Script>";
}
?>