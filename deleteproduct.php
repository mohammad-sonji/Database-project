  <?php
  require("dbconn.php");
  session_start();
  $id = $_SESSION['userid'];
  $pid = $_POST['submit'];
  $sid=$_GET['sid'];
    $query = "DELETE from product where id='$pid'";
    $result = mysqli_query($db, $query) or die ("Couldnt execute query.");
    header("Location: showstoreowner.php?submit=$sid");


   ?>
