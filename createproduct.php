<html>
<body>
	<?php	echo "<form action='createproduct.php?storeid=$_GET[storeid]' method='post'>"; ?>
<input type="text" name="productname"placeholder="enter product name" required/>
<p><br></p>
<input type="text" name="productprice"placeholder="enter product price" required/>
<p><br></p>
<input type="text" name="productcost"placeholder="enter product cost" required/>
<p><br></p>
<input type="text" name="productdescription"placeholder="enter product desciption" required/>
<p><br></p>
  <input type="submit" id="submit" name="submit" value="create store">


</form>

  <?php
  require("dbconn.php");
  session_start();
  $id = $_SESSION['userid'];
  if(isset($_POST["productname"]) && isset($_POST["productprice"]) && isset($_POST["productcost"]) && isset($_POST["productdescription"])) {
    $sid = $_GET["storeid"];
    $name = $_POST["productname"];
    $price = $_POST["productprice"];
    $cost = $_POST["productcost"];
    $description = $_POST["productdescription"];
    // $_imagePost = file_get_contents($_FILES['_imagePost']['tmp_name']);

    $query = "INSERT into product (store_id, name, price, cost, description) values ('$sid' , '$name', '$price', '$cost', '$description')";
    $result = mysqli_query($db, $query) or die ("Couldnt execute query.");
    header("Location: showstoreowner.php?submit=$sid");

  }

   ?>
</body>

</html>
