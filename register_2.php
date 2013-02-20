<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIMPLE OnlineStore : Register</title>
</head>
	
<body>
<b>Registration Page: Back end validation</b>
<p/>
<?php echo $_SERVER['PHP_SELF']; ?>
</br>
<?php echo htmlentities($_SERVER['PHP_SELF']); ?>
<table border=0 width=640 height=500 >
<!--<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">-->
<form action="validateRegistration.php" method="post">
<tr><td>Name: </td>
<td width="500">
	<input type="text" name="name" id="name" size='30' />
	<small><?php if(isset($_POST["name"])) echo ($_POST["name"] == "") ? "This field is required" : ""; ?></small>
</td>
</tr>
<tr><td>Email Id: <?php echo $_POST["username"]; ?></td>
<td>
	<input type="text" name="emailId" id="email" size='30'  />	
	<small><?php if(isset($_POST["emailId"])) echo ($_POST["emailId"] == "") ? "This field is required" : ""; ?></small>
</td>
</tr>
<tr><td>Username : </td>
<td>
	<input type="text" name="username" id="username" size='30'  />	
	<small><?php if(isset($_POST["username"])) echo ($_POST["username"] == "") ? "This field is required" : ""; ?></small>
</td>
</tr>
<tr><td>Password: </td>
<td>
	<input type="password" name="password" id="password" size='30'  />
	<small><?php if(isset($_POST["password"])) echo ($_POST["password"] == "") ? "This field is required" : ""; ?></small>
</td>
</tr>
<tr><td>Confirm Password: </td>
<td>
	<input type="password" name="confirm_password" id="confirm_password" size='30'  />
	<small><?php if(isset($_POST["confirm_password"])) echo ($_POST["confirm_password"] == "") ? "This field is required" : ""; ?></small>
</td>
</tr>
<td colspan='2' align='center'>
	<button value="Register" name="submit" >Register</button>
</td>

</form>
</table>

</body>
</html>