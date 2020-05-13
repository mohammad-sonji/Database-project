<html>
<body>
<form action="sbpot.php" method="post">
<input type="month" name="month">
<input type="month" name="month2">
<button type="submit" name="submit" value="search">search</button>
</form>
</body>

</html>



<?php
require("dbconn.php");

if(isset($_POST["month"]) && isset($_POST["month2"])){
  $month = $_POST["month"];
  $date = explode('-', $month);
  $month = $date[1];
  $year = $date[0];

  $month2 = $_POST["month2"];
  $date2 = explode('-', $month2);
  $month2 = $date2[1];
  $year2 = $date2[0];

  $revenue = 0;
  $query= "SELECT quantiy, name, cost, price
  FROM orders
  join orderdetails on orders.id = orderdetails.order_id
  join product on product.id = orderdetails.product_ID
  WHERE MONTH(date) between '$month' and '$month2'
  AND YEAR(date) between '$year' and '$year2'";
  $result= mysqli_query($db, $query) or die ("Couldnt execute query ....");
  while($row=MySQLI_fetch_array($result)){
    $revenue = $revenue + ($row['price']*$row['quantiy'] - $row['cost']*$row['quantiy']);
    echo " <div class='container-login100-form-btn m-t-20'>name: $row[name], price: $row[price], quantity: $row[quantiy], cost: $row[cost]</div><br>";
  }
  echo "revenue: $revenue";
}
 ?>
