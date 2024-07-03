<html>

<head>

<title>Sistem Tempahan Makmal Komputer 1</title>
<style>
img {
	margin-top :9%;
}

h1{
	font-family: arial;
}

table {
  border-collapse: collapse;
  margin-top: 4%;
}





table, td, th {
  border: 1px solid black;
  text-align: center;
}
</style>

</head>
<body>
<center><img src="kvs.png" width="10%"></center><br>
<center><h1>Jadual Tempahan Makmal Komputer 1</h1></center>

<center><table border="1 px" width="80%" h>
		<tr>
			
			<th>Nama </th>
			<th>Subjek</th>
			<th>Hari</th>
			<th>Tarikh </th>
			<th>Masa masuk</th>
			<th>Masa keluar</th>
			
			
		</tr>

<?php
include("dbconn.php");
session_start();
if($_SESSION['username']){
} else{
header("location:table1.php");}
$username = $_SESSION['username'];

$query = mysqli_query($connection,"SELECT * FROM booking");
while($row = mysqli_fetch_array($query)){

?>
<tr>
	
	<td><?=$row['Nama']; ?></td>
	<td><?=$row['Subjek']; ?></td>
	<td><?=$row['Hari']; ?></td>
	<td><?=$row['Tarikh_tempah']; ?></td>
	<td><?=$row['Masa_masuk']; ?></td>
	<td><?=$row['Masa_keluar']; ?></td>
</tr>

<?php } ?>

</table></center>

<br>
<center><button onclick="myFunction()">cetak</button></center>

<script>
function myFunction() {
  window.print();
}
</script>



</body>
</html>