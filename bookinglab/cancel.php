<?php
session_start();
include('dbconn.php');  
if($_SESSION['username']){
} else{
header("location:table1.php");}
$username = $_SESSION['username'];

if(isset($_GET['cancel'])) {
	$no = $_GET['cancel'];
	mysqli_query($connection, "DELETE FROM booking WHERE no=$no");
	echo '<script>alert("tempahan telah dibatalkan");</script>';
	header("Location: table1.php");
}