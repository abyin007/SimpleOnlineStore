<?php

$db=mysql_connect("localhost","root","");
mysql_select_db("simpleonlinestore",$db);

$username=$_POST['username'];
$password=sha1($_POST['password']);
$userData=array();
$userData['username']=$username;

$get_query="SELECT name, roll FROM userdetails WHERE username='$username' AND password='$password'";
//echo "$get_query";

$result=mysql_query($get_query);
$row = mysql_num_rows($result);
if(mysql_num_rows($result)>0){
echo "Errors= ".mysql_errno()."</br>";
echo "Errors= ".mysql_error()."</br>";
//if($result.)
$name=mysql_result($result, 0, "name");
$roll=mysql_result($result, 0, "roll");
$field_name=mysql_field_name($result,0);
$field_roll=mysql_field_name($result,1);
//$name=mysql_field_name($result,0);
echo "Errors= ".mysql_error()."</br>";
echo "result= $result</br>";
echo "name= $name </br>";
echo "roll= $roll </br>";
echo "field_name= $field_name</br>";
echo "field_roll= $field_roll</br>";
$userData['name']=$name;
$userData['roll']=$roll;
mysql_num_rows($result);

	
//	header('Location:userHome.php');
	
	session_start();
	$_SESSION['userData']=$userData;
	echo "</br>".session_id();
//	echo "</br>".session_id("qqqq"); // i am setting the session id to qqqq
	echo "</br>".session_id();
//	echo "</br>".session_name("ddd");
	echo "</br>".session_id();
	echo "</br>".$_SESSION['userData']['name'];
	
	echo "<PRE>";
	print_r($_SESSION);
	echo "</PRE>";
	
//	session($userData);
	echo "</br></br>Login Success: Go to <a href=\"userHome.php\">home</a> page";
	
	if($_SESSION['userData']['name'] != "" && $roll=="admin")
    {
    	//echo $_POST["username"]; 
       header('Location:adminHome.php');
    }
	else if($_SESSION['userData']['name'] != "")
    {
    	//echo $_POST["username"]; 
    //   header('Location:userHome.php');
    }
}
else{
	echo "</br></br>Login Failed";
}

?>