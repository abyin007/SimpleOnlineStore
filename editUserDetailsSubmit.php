<?php
$db=mysql_connect("localhost","root","");
mysql_select_db("simpleonlinestore",$db);
session_start();

$update_query="UPDATE userdetails SET name='".$_POST['name']."', emailId='".$_POST['emailId']."' 
WHERE username='".$_SESSION['userData']['username']."'";
$result=mysql_query($update_query);

echo "$result";
if($result==1)
{
echo "Update successful. <a href=\"userHome.php\">Click here</a> to go to user home";
$_SESSION['userData']['name']=$_POST['name'];
}else
echo "Update Failed. <a href=\"editUserDetails.php\">Try again</a>";
?>