<html>
<body>
  <form action="sbpoy.php" method="post">

    <input type="number" name ="year" min="1900" max="2099" step="1" />
    <input type="number" name ="year2" min="1900" max="2099" step="1" />
<button type="submit" name="submit" value="search">search</button>
</form>
</body>

</html>



<?php
require("dbconn.php");

if(isset($_POST["year"]) && isset($_POST["year2"])){
  $year =$_POST["year"];

  $year2 =$_POST["year2"];

  $revenue = 0;
  $query= "SELECT quantiy, name, cost, price
  FROM orders
  join orderdetails on orders.id = orderdetails.order_id
  join product on product.id = orderdetails.product_ID
  where YEAR(date) between '$year' and '$year2'";
  $result= mysqli_query($db, $query) or die ("Couldnt execute query ....");
  while($row=MySQLI_fetch_array($result)){
    $revenue = $revenue + ($row['price']*$row['quantiy'] - $row['cost']*$row['quantiy']);
    echo " <div class='container-login100-form-btn m-t-20'>name: $row[name], price: $row[price], quantity: $row[quantiy], cost: $row[cost]</div><br>";
  }
  echo "revenue: $revenue";
}
 ?>
