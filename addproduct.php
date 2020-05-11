<?php
require('dbconn.php');
session_start();
if(isset($_SESSION['userid'])){
$id=$_SESSION['userid'];
$quantity=$_POST['quantity'];
$product_id=$_POST['submit'];
$query="INSERT INTO shoppingcart(customer_id,product_ID,quantiy) VALUES ('$id','$product_id','$quantity') ";
$result= mysqli_query($db, $query) or die ("Couldnt execute query.");
echo "Product added to shopping cart";
}
else{
  require('login.php');
}
?>
