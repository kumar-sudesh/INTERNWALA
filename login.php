<?php
session_start();

$pass=$_POST['password'];
$name=$_POST['username'];
$_SESSION['uname']=$name;

if(isset($_SESSION['uname']))
{
echo "<p align='right'> Welcome Back " . "\n" .  $_SESSION['uname'];
echo "\t<a href='logout.php'>Logout</a>";
include('header.php');
include('intern1.php');
include('footer.php');
}
else
{
	echo "<p align='right'> Welcome" . "\n" . "Guest";
}

?>
