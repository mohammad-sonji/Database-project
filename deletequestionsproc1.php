<?php
@session_start();
if(isset($_SESSION["userpassword"])||isset($_SESSION["username"])){


require('dbconn.php'); //code is given below (used for database connection)
$query =  "DELETE FROM yornquestions WHERE userid=$_SESSION[userid]";
$ret=mysqli_query( $db, $query) or die("Could not execute query: " .mysqli_error($db));
//$row = mysqli_fetch_assoc($ret);
}
        ?>
  <?php require("questions.php"); ?>
