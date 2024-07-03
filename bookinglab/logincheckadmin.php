<?php
include('dbconn.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql= "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    $username = $row["username"];
    session_start();
    $_SESSION['username'] = $username;
  }
  header("Location: homeadmin.php");
}

else
{
  echo "invalid username or password";
}
?>