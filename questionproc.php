<?php
$sports = $_POST["sports"];
$social = $_POST["social"];
$gaming = $_POST["gaming"];
$read = $_POST["height"];
$terms = $_POST["terms"];
$computer = $_POST["computer"];
$travel = $_POST["travel"];
$sing = $_POST["sing"];
$arabic = $_POST["arabic"];
$rhythm = $_POST["rhythm"];
$cause = $_POST["cause"];

require('dbconn.php');
@session_start();
if(isset($_SESSION['userpassword'])&&isset($_SESSION['username'])&&isset($_SESSION['userid'])){
            $userid = $_SESSION['userid'];
  $query = "INSERT INTO yornquestions (userid, sports, social, gaming, height, terms, computer, travel, sing, arabic, rhythm, cause) VALUES ('$userid', '$sports', '$social', '$gaming', '$read', '$terms','$computer','$travel','$sing','$arabic','$rhythm','$cause')";
  $result = mysqli_query($db, $query) or die ("Couldnt execute query.");
  if(!$result) {
echo "error";
  }
  else {
            header("Location: questions.php");
  }
}
else{echo"You have to be logged in";}
?>
