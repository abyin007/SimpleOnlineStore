<?php

class Controller{
	
	

	public function login()
	{
		
	}
	
	public function register()
	{
		echo "result";
$db=mysql_connect("localhost","root","");
	mysql_select_db("simpleonlinestore",$db);
	
		$name=$_POST['name'];
		$username=$_POST['username'];
		
		$insert_query="INSERT INTO userdetails (name, username, emailId) VALUES ('$name', '$username','".$_POST['emailId']."')";
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
			echo "<b>Registration Failed : ".mysql_error()."</b>";
		}
	}	
}

?>