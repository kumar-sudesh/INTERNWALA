<?php
$dbh=new PDO('mysql:host=localhost;dbname=a_database','root','');
$org=$_POST['oname'];
$email=$_POST['email'];
$pass=$_POST['pswd'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];

$query='insert into emp(org,email,pass,fname,lname) values(?,?,?,?,?)';

$stmt=$dbh->prepare($query);

$stmt->bindparam(1,$org);
$stmt->bindparam(2,$email);
$stmt->bindparam(3	,$pass);
$stmt->bindparam(4	,$fname);
$stmt->bindparam(5	,$lname);

if($stmt->execute())
{
echo "<center>Inserted the values sucessfully";
echo "<a href='index.php'>Go Back</a></center>";
header('loaction:index.php');
}
else
{
echo "Failed";
}
?>