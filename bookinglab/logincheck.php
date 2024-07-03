<?php
include('dbconn.php');

$username = $_POST['username'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql= "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $sql);

if(mysqli_num_rows($result)>0)
{
  while($row = mysqli_fetch_assoc($result))
  {
    $username = $row["username"];
    session_start();
    $_SESSION['username'] = $username;
  }
  header("Location: home.php");
}

else
{
  echo '<script>alert("Username atau Password salah");</script>';
  echo '<script>window.location.assign("login1.php");</script>';
}
?>