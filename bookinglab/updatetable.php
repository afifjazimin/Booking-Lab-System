<html>
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

.button {
 background-color: #FFFCE7; /* Green */
  border: none;
  color: black;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 0px 100px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

}

.button {
  background-color: black; 
  color: black; 
  border: 2px solid #D62828;
}

.button:hover {
  background-color: #D62828;
  color: white;
}



#text:hover{
color:red;
}

.input[type="submit"]{
    display: inline-block;
    position: relative;
    padding: 0.25em 1em;
    border-top: solid 2px black;
    border-bottom: solid 2px black;
    text-decoration: none;
    font-weight: bold;
    color: #03A9F4;
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
					<li><a href="table1.php">JADUAL TEMPAHAN</a></li>
					<li><a href="home.php">BORANG TEMPAH</a></li>
					<li style="float:right"><a class="active" href="logout.php">LOG OUT</a></li>
				</ul>
</div>

			<div id ="form">

<br><br>
					<h2>TEMPAHAN ANDA</h2>

<br><br>

<?php
session_start();
include('dbconn.php');  
if($_SESSION['username']){
} else{
header("location:table1.php");}
$username = $_SESSION['username'];

?>

<table border="0 px" width="100%">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Subjek</th>
			<th>Hari</th>
			<th>Tarikh </th>
			<th>Masa masuk</th>
			<th>Masa keluar</th>
			<th></th>
			<th></th>
			
		</tr>

<?php
$displayquery = "SELECT * FROM booking WHERE Nama='$username'";
$querydisplay = mysqli_query($connection, $displayquery);
        
while ($row = mysqli_fetch_array($querydisplay)){
?>

<tr>
	<td><?=$row['no']; ?></td>
	<td><?=$row['Nama']; ?></td>
	<td><?=$row['Subjek']; ?></td>
	<td><?=$row['Hari']; ?></td>
	<td><?=$row['Tarikh_tempah']; ?></td>
	<td><?=$row['Masa_masuk']; ?></td>
	<td><?=$row['Masa_keluar']; ?></td>
	<td><a href="update.php?update=<?php echo $row['no']; ?>">Kemaskini</a></td>
	<td><a href="cancel.php?cancel=<?php echo $row['no']; ?>" onclick="javascript:return confirm('Batal Tempahan?')";>Batal</a></td>
</tr>

<?php } ?>

</table>

<br><br>

</div>
		</div>


			<div id="footer">
					<p>Create By Afif Jazimin</p>
			</div>

	</body>
</html>