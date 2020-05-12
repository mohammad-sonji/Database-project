<html>
<body>
<?php
require('dbconn.php');
$id=$_GET["submit"];
echo "<li><a href='createproduct.php?storeid=$id'>add product</a></li>";

$query= "SELECT * FROM product WHERE store_id='$id'";
$result= mysqli_query($db, $query) or die ("Couldnt execute query 0.");


while($row=MySQLI_fetch_array($result)){
echo '<img src="data:image/jpeg;base64,'.base64_encode( $row['picture'] ).'"/>';
echo " <div class='destination item'>
            <div class='destination_image'>
            </div>
            <div class='destination_content'>
              <div class='destination_title'><a href='events.html' id='rockclimbing'>$row[name]</a></div>
              $row[price] $,

              <div class='destination_subtitle'><form action='addproduct.php' method='post'><button type='submit' name='submit' value='$row[id]'>Add to shopping cart </button><input type='number'name='quantity' value='1'></form></div>
            </div>
          </div><hr><hr><hr>";
}


?>
</body>
</html>
