<?php
require_once("dbconn.php");
if(isset($_GET['delete'])) {
	$no = $_GET['delete'];
	mysqli_query($connection, "DELETE FROM booking WHERE no=$no");
	header('location: homeadmin.php');
}