<?php

$db=mysql_connect("localhost","root","");
mysql_select_db("simpleonlinestore",$db);
//$arr=array($_POST);
//echo "$arr";
$name=$_POST['name'];
$username=$_POST['username'];
//$password=sha1($_POST['pwd']);

$insert_query="INSERT INTO userdetails (name, username, emailId, password) 
VALUES ('$name', '$username','".$_POST['emailId']."', '".sha1($_POST['password'])."')";
$result=mysql_query($insert_query);
echo "$result";

if($result==1)
{
	echo "</br><b>Hi ".$_POST['name'].", your registration is complete</b>";
	echo "</br></br><b><a href=\"login.php\">Click here</a></b> to login";	
	echo "<PRE>";
	print_r($_POST);
	echo "</PRE>";
}
else
{
	echo "</br>result: $result";
	echo "</br><b>Registration Failed : ".mysql_error()."</b>";
}
?>