<?php
session_start();

require('dbconn.php');
$id = $_SESSION['userid'];
$date = date('Y-m-d');
$time = date('H:i:s');
mysqli_query($db, "INSERT INTO orders (customer_id, date, order_time) VALUES ('$id', '$date', '$time')") or die ("Couldnt execute query 0.");
$qu = "SELECT id from orders where customer_id = '$id' and date='$date' and order_time='$time'";
$result= mysqli_query($db, $qu) or die ("Couldnt execute query");
$row=MySQLI_fetch_array($result);
$id2 = $row['id'];

$query= "SELECT name, id, picture, price, quantiy from product, shoppingcart where customer_id='$id' and product.id = shoppingcart.product_ID";
$result2= mysqli_query($db, $query) or die ("Couldnt execute query 0.");

while($row2=MySQLI_fetch_array($result2)){
  $q = "INSERT into orderdetails (order_id, quantiy, product_ID) values ('$id2', '$row2[quantiy]', '$row2[id]')";
  $r= mysqli_query($db, $q) or die ("Couldnt execute query .");
}

$qqq = "DELETE from shoppingcart where customer_id='$id'";
  $rrr= mysqli_query($db, $qqq) or die ("Couldnt execute query     .");
 ?>
