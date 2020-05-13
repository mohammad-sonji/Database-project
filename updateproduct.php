
 <html>
 <body>
 	<?php	echo "<form action='updateproduct.php?sid=$_GET[sid]' method='post'>"; ?>
 <input type="text" name="productname"placeholder="enter product name" required/>
 <p><br></p>
 <input type="text" name="productprice"placeholder="enter product price" required/>
 <p><br></p>
 <input type="text" name="productcost"placeholder="enter product cost" required/>
 <p><br></p>
 <input type="text" name="productdescription"placeholder="enter product desciption" required/>
 <p><br></p>
   <input type="submit" id="submit" name="submit" value="update product">


 </form>

   <?php
   require("dbconn.php");
   session_start();
   $id = $_SESSION['userid'];
   if(isset($_POST["productname"]) && isset($_POST["productprice"]) && isset($_POST["productcost"]) && isset($_POST["productdescription"])) {
     $sid = $_GET["sid"];
     $name = $_POST["productname"];
     $price = $_POST["productprice"];
     $cost = $_POST["productcost"];
     $description = $_POST["productdescription"];
     // $_imagePost = file_get_contents($_FILES['_imagePost']['tmp_name']);

     $query = "UPDATE product set name = '$name', price = '$price', cost = '$cost', description = '$description' where store_id = '$sid'";
     $result = mysqli_query($db, $query) or die ("Couldnt execute query.");
     header("Location: showstoreowner.php?submit=$sid");

   }

    ?>
 </body>

 </html>
