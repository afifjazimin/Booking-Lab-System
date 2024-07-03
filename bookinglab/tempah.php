<?php

session_start();//start the session
$username=$_SESSION['user'];

if($_SERVER['REQUEST_METHOD']="POST")
{
		$nokp = mysql_real_escape_string($_POST['nokp']);
		$tahun = mysql_real_escape_string($_POST['tahun']);
		$tarikh = mysql_real_escape_string($_POST['tarikh']);
		$masa = mysql_real_escape_string($_POST['masa']);
		
	mysqli_connect("localhost","root","") or die(mysql_error());//connect to server
	mysql_select_db("tempahan_lab") or die("cannot connect to database");//connect to database
	
		mysql_query("INSERT INTO tempah(nama, nokp, tahun, tarikh, masa) VALUES ('$username','$nokp','$tahun','$tarikh','$masa')");
		header("location.home.php");
	}
	else{
		header("location.home.php");
	}
	?>