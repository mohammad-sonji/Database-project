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

              <div class='destination_subtitle'><form action='deleteproduct.php' method='post'><button type='submit' name='submit' value='$row[id]'>delete </button><input type='number'name='quantity' value='1'></form></div>
              <div class='destination_subtitle'><form action='updateproduct.php' method='post'><button type='submit' name='submit' value='$row[id]'>update </button><input type='number'name='quantity' value='1'></form></div>

            </div>
          </div><hr><hr><hr>";
}


?>
</body>
</html>
