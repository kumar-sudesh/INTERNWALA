<?php
session_start();

$dbh=new PDO('mysql:host=localhost;dbname=a_database','root','');
$email=$_POST['email'];
$pass=$_POST['pswd'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$_SESSION['user']=$fname;

$query='insert into stud(email,pass,fname,lname) values(?,?,?,?)';

$stmt=$dbh->prepare($query);

$stmt->bindparam(1,$email);
$stmt->bindparam(2	,$pass);
$stmt->bindparam(3	,$fname);
$stmt->bindparam(4	,$lname);

if($stmt->execute())
{
echo "<center>Inserted the values sucessfully";
echo "<a href='intern.php'>Go For InternShips</a></center>";

if(isset($_SESSION['user']))
{
echo "<p align='right'> Welcome" . "\n" .  $_SESSION['user'];
}
else
{
	echo "<p align='right'> Welcome" . "\n" . "Guest";
}

}
else
{
echo "Failed";
}
?>