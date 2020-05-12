<html>
<body>
		<form action="createstore.php" method="post">
<input type="text" name="storename"placeholder="enter store name" required/>
<p><br></p>
<input type="text" name="storeaddress"placeholder="enter store address" required/>
<p><br></p>
<input type="text" name="storephone"placeholder="enter store phone" required/>
<p><br></p>

  <input type="submit" id="submit" name="submit" value="create store">


</form>

  <?php
  require("dbconn.php");
  session_start();
  $id = $_SESSION['userid'];

  if(isset($_POST["storename"]) && isset($_POST["storeaddress"]) && isset($_POST["storephone"])) {
    $name = $_POST["storename"];
    $address = $_POST["storeaddress"];
    $phone = $_POST["storephone"];

    $query = "INSERT into shop (owner_id, name, address, phone) values ('$id' , '$name', '$address', '$phone')";
    $result = mysqli_query($db, $query) or die ("Couldnt execute query.");
    header("Location: owner.php");

  }

   ?>
</body>

</html>
