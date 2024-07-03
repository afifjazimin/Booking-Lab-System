<?php
session_start();
include('dbconn.php');  

$username = $_SESSION['username'];

$Subjek = $_POST['Subjek'];
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
	$sql = "INSERT INTO `booking` (`Nama`, `Subjek`, `Tarikh_tempah`, `Hari`, `Masa_masuk`, `Masa_keluar`) VALUES ('$username','$Subjek','$Tarikh_tempah','$Hari','$Masa_masuk','$Masa_keluar')";
	mysqli_query($connection, $sql);
	header("Location: table1.php");
}
?>