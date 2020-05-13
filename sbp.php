<html>
<body>
<form action="sbp.php" method="post">
<input type="text" name ="pname"/>
<button type="submit" name="submit" value="search">search</button>
</form>
</body>

</html>



<?php
require("dbconn.php");

if(isset($_POST["pname"])){
  $pname =$_POST["pname"];
  $query= "SELECT quantiy, name, cost, price
  FROM orders
  join orderdetails on orders.id = orderdetails.order_id
  join product on product.id = orderdetails.product_ID
  WHERE name = '$pname'";
  $result= mysqli_query($db, $query) or die ("Couldnt execute query ....");
  while($row=MySQLI_fetch_array($result)){
    echo " <div class='container-login100-form-btn m-t-20'>name: $row[name], price: $row[price], quantity: $row[quantiy], cost: $row[cost]</div><br>";
  }
}
 ?>
