<html>
<head>
<title>Sistem tempahan makmal komputer</title>
<style>
	

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
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
}

li {
    display:inlne;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: red;
}

#form{
background-color:orange;
border-radius:10px;
font-family:arial;
text-align:center;
width:60%;
height:60%;
position:center;
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
			<div id="nav">
				<ul>
					
				</ul>
			</div>
		</div>


		<div id ="form">

<br><br>
			<h2>LOG IN ADMIN</h2>

<br><br>
				<form action="logincheckadmin.php" method="POST">
					Username :<br>
					<input type="text" name="username" value="" required="required"  placeholder="Enter Username"> 
<br><br><br>
					Password :<br>
					<input type="password" name="password" value="" required="required"  placeholder="Enter Password"> 
<br><br><br>


					<center><input type="submit" class="button" value="log in"></center>
<br>
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