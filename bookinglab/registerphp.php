<?php 
include('dbconn.php');

$username = $_POST['username'];
$password = $_POST['password'];
$pwd = MD5($password);
$namapenuh = $_POST['namapenuh'];
$nokp = $_POST['nokp'];
$jabatan = $_POST['jabatan'];

$sqli = "SELECT * FROM user WHERE username = '$username'";
$result = mysqli_query($connection, $sqli);
$num = mysqli_num_rows($result);

if($num == 1){
	echo '<script>alert("Username telah diambil");</script>';
	echo '<script>window.location.assign("register1.php");</script>';
}

else{
	$sql = "INSERT INTO user (username, password, namapenuh, nokp, jabatan) VALUES ('$username','$pwd','$namapenuh','$nokp','$jabatan')";
	mysqli_query($connection, $sql);
	header("Location: login1.php");
}
?>