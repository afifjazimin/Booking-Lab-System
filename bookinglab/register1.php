<html>
<head>
<title>Sistem tempahan makmal komputer</title>
<style>
	
img{
	
}
	
h1 {
	color:white;
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
font-family:Arial;
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
margin:0 auto;
padding-bottom: 40px;
}

#form form{
	width:600px;
	margin:0 auto;
	font-color:black;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin-right: 100px;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=text]:focus {
  border: 3px solid #555;

}

input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}

input[type=password]:focus {
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
  border: 2px solid #4CAF50;
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
		<center><img src="content-writing-e1509826195377.png" width="100"></center>		
					<h1>SISTEM TEMPAHAN MAKMAL KOMPUTER</h1>
			
		</div>
<div id="nav">
				<ul>
					<li><a href="register1.php">REGISTER</a></li>
					<li><a href="login1.php">LOG IN</a></li>
				</ul>
			</div>

		<div id ="form">

<br><br>
			<h2>REGISTER FORM</h2>

<br><br>
				<form action="registerphp.php" method="POST">
					Username :<br>
					<input type="text" name="username" value="" required="required"  placeholder="Masukkan Nama Pengguna"> 
<br><br><br>
					Password :<br>
					<input type="password" name="password" value="" required="required"  placeholder="Masukkan Kata Laluan"> 
<br><br><br>
					Nama Penuh :<br>
					<input type="text" name="namapenuh" value="" required="required"  placeholder="Nama Penuh">
<br><br><br>
					No Kad Pengenalan :<br>
					<input type="text" name="nokp" value="" required="required"  placeholder="No Kad Pengenalan Cth: 000000000000">
<br><br><br>
					Jabatan :<br>
					<input type="text" name="jabatan" value="" required="required"  placeholder="Jabatan">
<br><br>
					<center><input type="submit" class="button" value="Register"></center>

				</form>
				
			<div id="text">
					<p><b>Sistem tempahan ini hanya boleh digunakan bagi pensyarah Kolej Vokasional Sepang sahaja</b></p>
			</div>
			
		</div>

<div id="footer">
					<p>Create By Afif Jazimin</p>
</div>

	</body>
</html>