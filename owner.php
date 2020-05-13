
<html>

<body>
<div>
  <li><a href="createstore.php">create store</a></li>
  <li><a href="searchbymonth.php">search by month</a></li>
  <li><a href="sbpot.php">search by period of time</a></li>
  <li><a href="sby.php">search by year</a></li>
  <li><a href="sbpoy.php">search by period of years</a></li>
  <li><a href="sbp.php">search by product</a></li>

</div>
<div>
  <form action="showstoreowner.php" method="get"/>
  <?php
  require('dbconn.php');
  if (session_status() == PHP_SESSION_NONE) {
    session_start();
  }
  $id = $_SESSION['userid'];
  $query= "SELECT * FROM shop where owner_id = '$id'";
  $result= mysqli_query($db, $query) or die ("Couldnt execute query.");

  while($row=MySQLI_fetch_array($result)){
  echo " <div class='container-login100-form-btn m-t-20'> <button type='submit' name='submit'  class='login100-form-btn'
  value='$row[id]'>Store name:$row[name] | Store address:$row[address] | Store phone:$row[phone]</button>
  </div> <hr>";
  }
?>
</form>
</div>



</body>
</html>
