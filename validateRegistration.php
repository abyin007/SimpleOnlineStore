<?php
//header('Location:register_2.php');
$db=mysql_connect("localhost","root","");
mysql_select_db("simpleonlinestore",$db);

$username=$_POST['username'];
//$_POST['name']="";
//echo "Errors= ".$_POST['username'];
$password=$_POST['password'];
$emailId=$_POST['emailId'];
$name=$_POST['name'];
$confirm_password=$_POST['confirm_password'];

echo "Errors= ".$_POST['username'];
$get_username="SELECT * FROM userdetails WHERE username='$username'";
$result=mysql_query($get_username);
echo "Errors= ".$_POST['username'];
if($_POST['emailId']=="")
{
	echo "Errors= ".$_POST['emailId'];
}
header('Location:register_2.php');

if(!isset($username) && !isset($password) && !isset($emailId) && !isset($name) && !isset($confirm_password))
{
	header('Location:register_2.php');
}
?>