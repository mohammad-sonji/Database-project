
    <?php
  $pass = $_POST["password"];
  $username = $_POST["username"];
    if( isset($username) && isset($pass) ) {
  require('dbconn.php'); //code is given below (used for database connection)
  $query =  "SELECT * FROM login WHERE username='$username' AND password='$pass'";
  $ret=mysqli_query( $db, $query) or die("Could not execute query: " .mysqli_error($db));
  $row = mysqli_fetch_assoc($ret);
  if($row) {


    $query2="SELECT id FROM login WHERE username='$username'and password='$pass'";
    $result2 = mysqli_query($db, $query2) or die ("Couldnt execute query.");
    $id=MySQLI_fetch_assoc($result2);

    $query3="SELECT * FROM owner WHERE id='$id[id]'";
    $result3 = mysqli_query($db, $query3) or die ("Couldnt execute query.");
  $ret2=mysqli_query( $db, $query3) or die("Could not execute query: " .mysqli_error($db));
    $row2=mysqli_fetch_assoc($ret2);

if($row2){
  session_start();


             $_SESSION['userid']= $id['id'];
require("owner.php");

}
else{
  session_start();


             $_SESSION['userid']= $id['id'];
  require("index.php");

}


							//echo"You are a validated user, logged in successfully.";
	            // require("index.php");

  }

  else {
            ?>
			<script language='JavaScript'>alert('Invalid/Wrong Username or Password!');</script>
			<?php require("signup.php"); ?>
<?php
			}
                @mysqli_close($con);
	}

?>
