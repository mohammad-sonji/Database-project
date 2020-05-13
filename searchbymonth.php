<html>
<body>
<form action="searchbymonth.php" method="post">
<input type="month" name="month">
<button type="submit" name="submit" value="search">search</button>
</form>
</body>

</html>



<?php
require("dbconn.php");

if(isset($_POST["month"])){
  $month = $_POST["month"];
  $date = explode('-', $month);
  $month = $date[1];
  $year = $date[0];
  $revenue = 0;
  $query= "SELECT quantiy, name, cost, price
  FROM orders
  join orderdetails on orders.id = orderdetails.order_id
  join product on product.id = orderdetails.product_ID
  WHERE MONTH(date) = '$month' AND YEAR(date) = '$year'";
  $result= mysqli_query($db, $query) or die ("Couldnt execute query ....");
  while($row=MySQLI_fetch_array($result)){
    $revenue = $revenue + ($row['price']*$row['quantiy'] - $row['cost']*$row['quantiy']);
    echo " <div class='container-login100-form-btn m-t-20'>name: $row[name], price: $row[price], quantity: $row[quantiy], cost: $row[cost]</div><br>";
  }
  echo "revenue: $revenue";
}
 ?>
