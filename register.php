<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SIMPLE OnlineStore : Register</title>
</head>
<header><script type="text/javascript" src="user_register.js" />
</script></header>
<body>
<b>Registration Page: Front end validation</b>
<p/>

<table border=0 width=640 height=500 >
<form action="completeRegister.php" method="post">
<tr><td>Name: </td>
<td width="500">
	<input type="text" name="name" id="name" size='30' onblur="validate_name()"/>
	
	<span id="err_name" ></span>
</td>
</tr>
<tr><td>Email Id: </td>
<td>
	<input type="text" name="emailId" id="email" size='30' onblur="validate_email()" />	
	<span id="err_email" ></span>
</td>
</tr>
<tr><td>Username : </td>
<td>
	<input type="text" name="username" id="username" size='30' onblur="validate_username()" />	
	<span id="err_username" ></span>
</td>
</tr>
<tr><td>Password: </td>
<td>
	<input type="password" name="password" id="password" size='30' onblur="validate_passsword()" />
	<span id="err_passsword" ></span>
</td>
</tr>
<tr><td>Confirm Password: </td>
<td>
	<input type="password" name="confirm_password" id="confirm_password" size='30' onblur="validate_checkPasswords()" />
	<span id="err_checkPassword" ></span>
</td>
</tr>
<td colspan='2' align='center'>
	<button value="Register" name="submit" onclick="validate_all_details()" >Register</button>
</td>

</form>
</table>

</body>
</html>