<?php
require('dbconn.php');
$query= "SELECT orderdetails.quantiy, orderdetails.product_ID, product.name, product.price, product.description from orderdetails inner join product on orderdetails.product_ID = product.id where product.store_id='$_GET[storeid]'";
$result= mysqli_query($db, $query) or die ("Couldnt execute query 0.");
while($row=MySQLI_fetch_array($result)){
echo " <div class='destination item'>
            <div class='destination_image'>
            </div>
            <div class='destination_content'>
              <div class='destination_title'><a href='events.html' id='rockclimbing'>name: $row[name]</a></div>
            price: $row[price] $,
              description: $row[description],
              quantity: $row[quantiy],
            </div>
          </div><hr><hr><hr>";
}

 ?>
