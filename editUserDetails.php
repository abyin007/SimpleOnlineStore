<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit userdetails</title>
</head>

<script type="text/javascript" src="user_register.js" >
</script>
<?php

$db=mysql_connect("localhost","root","");
mysql_select_db("simpleonlinestore",$db);

session_start();

$query="SELECT * FROM userdetails WHERE username='".$_SESSION['userData']['username']."'";
echo "$query";
$result=mysql_query($query);
$get_array_result=mysql_fetch_array($result);
?>-->

<body>
</br>
<b>Edit userdetails</b>
<p/>
<table border=0 width=640 height=200 >
<form action="editUserDetailsSubmit.php" method="post">
<tr><td>Name: </td>
<td width="500">
	<input type="text" name="name" id="name" size='30' value="<?php echo $get_array_result['name'] ?>" onblur="validate_name()"/>	
	<span id="err_name" ></span>
</td>
</tr>
<tr><td>Email Id: </td>
<td>
	<input type="text" name="emailId" id="email" size='30' value="<?php echo $get_array_result['emailId'] ?>" onblur="validate_email()" />	
	<span id="err_email" ></span>
</td>
</tr>
<td colspan='2' align='center'>
	<button value="Submit" name="submit" >Update</button>
</td>

</form>
</table>

</body>
</html>