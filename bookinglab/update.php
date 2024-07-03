<html>
<head>

<title>Sistem tempahan makmal komputer</title>
<style>
h1 {
	color:WHITE;
	font-family:arial;
	}

h2 {
	color:Black;
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
	height:100%;
	position:center;
	margin:0 auto;
	padding-bottom: 40px;
}

#form form{
	margin:0 auto;
	font-color:black;
}

input[type=text] {
  width:80%;
  height:45px;
  padding: 12px 20px;
  margin-right: 10px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;

}

input[type=date] {
  width:80%;
  height:45px;
  padding: 12px 20px;
  margin-right: 10px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=date]:focus {
  border: 3px solid #555;

}

select {
  width:80%;
  height:45px;
  padding: 12px 20px;
  margin-right: 10px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

select {
  border: 3px solid #555;

}

input[type=time] {
  width:80%;
  height:45px;
  padding: 12px 20px;
  margin-right: 10px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=time]:focus {
  border: 3px solid #555;

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
					<h2>BORANG KEMASKINI </h2>

<br><br>
<?php
include("dbconn.php");
session_start();
if($_SESSION['username']){
} else{
header("location:table1.php");}
$username = $_SESSION['username'];

$id = $_GET['update'];

$display = "SELECT * FROM booking WHERE no = '$id'";
$res = mysqli_query($connection, $display);

while($row = mysqli_fetch_array($res)){
?>

<form method="POST" action="Btnupdate.php">
					
					<input type="hidden" name="no" value="<?php echo $row['no']; ?>">
					
<br>
					Tarikh tempah :<br>
					<input type="date" name="Tarikh_tempah" value="<?php echo $row['Tarikh_tempah'];  ?>" placeholder="Tarikh tempah"> 
<br><br><br>
					Hari :<br>
						<select name="Hari">
							<option value="Isnin">Isnin</option>
							<option value="Selasa">Selasa</option>
							<option value="Rabu">Rabu</option>
							<option value="Khamis">Khamis</option>
							<option value="Jumaat">Jumaat</option>
						</select>

<br><br><br>

					Masa Masuk :<br>
					<input type="time" name="Masa_masuk" value="<?php echo $row['Masa_masuk']; ?>" placeholder="Masa masuk">

<br><br><br>

					Masa keluar :<br>
					<input type="time" name="Masa_keluar" value="<?php echo $row['Masa_keluar']; ?>" placeholder="Masa keluar">
<br><br><br><br>

			<center><input type="submit" class="button" name="update" value="update"></center>
<br>
</form>

<?php } ?>



		</div>

			<div id="footer">
					<p>Create By Afif Jazimin</p>
			</div>

	</body>
</html>