<?php

session_start();
include "config.php";
$username=$_POST['username'];
$password=$_POST['password'];

$query = mysql_query("SELECT * FROM admin where username='$username' and password='$password'") or die (mysql_error());
$conn = mysql_num_rows($query);
$hasil=mysql_fetch_array($query);

if($conn==0){
echo"<center><h1>Login Gagal</h1></center>";
include "login.php";
}else{
$_SESSION['username'] = $username;
header("Location:home.php");
}
?>