<?php
echo $_POST["username"]; 
//session_id("qqqq"); // used to get the already set session. and this must be before session_start
session_start();
// following code will redirect to login if the user clicked logout and then click back button
if(isset($_SESSION['userData']['name'])){
	echo "session is set";
} else {
	echo "session is NOT set";
	header('Location:home.php');
}
echo "Roll= ".$_SESSION['userData']['roll'];
echo "<PRE>";
	print_r($_SESSION);
	echo "</PRE>";

echo "</br> Welcome <b>Mr.".$_SESSION['userData']['name']
	 ."</b> or should i call u by user username Mr.<b>".$_SESSION['userData']['username']."</b>";

	 echo "</br><a href=\"viewUserDetails.php\">View User Details</a>";
	 echo "</br><a href=\"editUserDetails.php\">Edit User Details</a>";
	 
	 echo "</br></br></br> You can logout by clicking <a href=\"logout.php\">here</a>";
?>