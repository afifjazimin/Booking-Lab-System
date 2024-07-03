
<head>

<title>Sistem tempahan makmal komputer</title>
<style>
h1 {
	color:WHITE;
	font-family:arial;
	}
	h3 {
	color:black;
	font-family:arial;
	}
#header{
		text-align:center;
		margin-top:30px;
		background-color:black;
		margin-left:-30px;
		margin-top:-30px;
		margin-right:-8px;
		padding-bottom:40px;
		padding-top:30px;
		margin-bottom:10px;
}

#nav{
font-family:arial;
}

ul {
  list-style-type: none;
  margin: 10;
  padding: 0;
  overflow: hidden;

  background-color: black;
}

li {
  float: left;
  border-right:1px solid #bbb;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 30px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: red;
}

.active {
  background-color: orange;
}

#form{
	background-color:orange;
	border-radius:10px;
	font-family:arial;
	text-align:center;
	width:60%;
	height:95%;
	position:center;
	margin:0 auto;
	padding-bottom: 40px;
}

#form form{
	width:320px;
	margin:0 auto;
	font-color:black;
}

#form input[type=text]{
	width: 100%;
	text-align:center;
	height:4%;
	border: 3px solid #ccc;
	box-sizing: border-box;
	-webkit-transition: 0.5s;
	transition: 0.5s;
	
}

input[type=text]focus{
	border:3px solid red;
}

#form select{
	width: 100%;
	text-align:center;
	height:3.5%;
	border-radius:10px;
}

#form input[type="submit"]{
	width: 40%;
	text-align:center;
	height:4%;
	border-radius:10px;
}

#text:hover{
color:red;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #00000}

th {
  background-color: Black;
  color: white;
}

button{
	margin-top: 100px;
	margin-right: 50px;
	margin-left: 50px;
}

#footer{
		text-align:center;
		background-color:black;
		color:white;
		padding-top:20px;
		padding-bottom:20px;
		margin-top:20px;

}
</style>
	</head>
		<body bgcolor="white">
			<div id="header">
				<img src="content-writing-e1509826195377.png" width="100">
					<h1>SISTEM TEMPAHAN MAKMAL KOMPUTER</h1>
			
		</div>

<div id="nav">
				<ul>
					<li style="float:right"><a class="active" href="logout.php">LOG OUT</a></li>
				</ul>
</div>

			<div id ="form">

<br><br>
					<h2>JADUAL</h2>

<br><br>



<table border="0 px" width="100%">
		<tr>
			<th>No</th>
			<th>Nama </th>
			<th>Subjek</th>
			<th>Hari</th>
			<th>Tarikh </th>
			<th>Masa masuk</th>
			<th>Masa keluar</th>
			<th></th>
			
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
	<td><?=$row['no']; ?></td>
	<td><?=$row['Nama']; ?></td>
	<td><?=$row['Subjek']; ?></td>
	<td><?=$row['Hari']; ?></td>
	<td><?=$row['Tarikh_tempah']; ?></td>
	<td><?=$row['Masa_masuk']; ?></td>
	<td><?=$row['Masa_keluar']; ?></td>
	<td><a href="delete.php?delete=<?php echo $row['no']; ?>" onclick="javascript:return confirm('Batal Tempahan?')";>Padam</a></td>
</tr>

<?php } ?>

</table>
<br>
<form action="printtable.php" method="POST">
	<center><input type="submit" value="cetak jadual ?">
</form>
</div>
		</div>


			<div id="footer">
					<p>Create By Afif Jazimin</p>
			</div>

	</body>
</html>