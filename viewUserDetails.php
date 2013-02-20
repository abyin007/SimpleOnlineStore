<?php

$db=mysql_connect("localhost","root","");
mysql_select_db("simpleonlinestore",$db);

session_start();
$query="SELECT * FROM userdetails WHERE username='".$_SESSION['userData']['username']."'";
echo "$query";
$result=mysql_query($query);
$get_array_result=mysql_fetch_array($result);
echo "</br>Name: ".$get_array_result['name'];
echo "</br>Username: ".$get_array_result['username'];
echo "</br>Email: ".$get_array_result['emailId'];
echo "</br>Password: ".$get_array_result['password'];

	echo "<PRE>";
	print_r($get_array_result);
	echo "</PRE>";

?>