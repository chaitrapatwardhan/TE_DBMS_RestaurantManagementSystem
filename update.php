<?php
session_start();
mysqli_connect("localhost" , "root" , "" , "project") or die("could not connect to databse");

$id = (int)$_SESSION["id"];

$username = mysql_real_escape_string($_POST["username"]);
$fname = mysql_real_escape_string($_POST["fname"]);
$email = mysql_real_escape_string($_POST["email"]);
$password = mysql_real_escape_string($_POST["password"]);


$query="UPDATE customer SET username = '$username', password = '$password' WHERE id='$id'";


mysql_query($query)or die(mysql_error());
if(mysql_affected_rows()>=1){
echo "<p>($id) Record Updated<p>";
}else{
echo "<p>($id) Not Updated<p>";
}
?> 