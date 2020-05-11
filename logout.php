<?php
@session_start();
if(isset($_SESSION["userpassword"])||isset($_SESSION["username"]))
{
	// remove all session variables
	session_unset();
	$result=session_destroy();
	if ($result)
			echo "<script language='JavaScript'>alert('You have been Logged out successfully!');</script>";
	else
			echo "<script language='JavaScript'>alert('Could not log you out.!');</script>";
	require "index.php";
}
?>
