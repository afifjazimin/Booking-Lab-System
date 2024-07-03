<?php
session_start();
include('dbconn.php');  
if($_SESSION['username']){
} else{
header("location:table1.php");}
$username = $_SESSION['username'];

if(isset($_POST['update'])){
	$no = $_POST['no'];
	$Tarikh_tempah = $_POST['Tarikh_tempah'];
	$Hari = $_POST['Hari'];
	$Masa_masuk = $_POST['Masa_masuk'];
	$Masa_keluar = $_POST['Masa_keluar'];

$sqli = "SELECT * FROM booking WHERE  Tarikh_tempah = '$Tarikh_tempah' AND ('$Masa_masuk' >= Masa_masuk AND '$Masa_masuk' < Masa_keluar OR (Masa_masuk >= '$Masa_masuk' AND Masa_masuk < '$Masa_keluar')) ";
$result = mysqli_query($connection, $sqli);
$num = mysqli_num_rows($result);


if($num == 1){
	echo '<script>alert("Tarikh dan masa telah dipilih oleh pengguna lain. Sila rujuk jadual tempahan.");</script>';
	echo '<script>window.location.assign("table1.php");</script>';
}
else{
	$query = "UPDATE booking SET  Tarikh_tempah = '$Tarikh_tempah', Hari = '$Hari', Masa_masuk = '$Masa_masuk', Masa_keluar = '$Masa_keluar' WHERE no = $no"; 
		$result = mysqli_query($connection, $query);
		header("Location: table1.php");
}
}	
?>

