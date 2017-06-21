<?php
session_start();
//echo "<p align='right'> Bye" . "\n" . $_SESSION['user'] . "<br/>";
unset($_SESSION['user']);
echo "You have been logged out !!\n";
echo "<a href='index.php'>Home</a>";
?>
