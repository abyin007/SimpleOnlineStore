<?php

//session_id("qqqq");
session_start(); //it required before destroying
echo "</br>".$_SESSION['userData']['name'];
session_destroy();
//session_unset();
echo "</br>".$_SESSION['userData']['name'];
header('Location:home.php');

?>