
    <?php
    $Bday = $_POST["Bday"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $Ownerorcustomer = $_POST["Ownerorcustomer"];
    require('dbconn.php');

    $sql_u="SELECT  * FROM login WHERE username='$username'";
    $res_u= mysqli_query($db,$sql_u) or die  (mysqli_error($db));

    if(mysqli_num_rows($res_u)>0){
      echo "Username already taken";
    }

    else{
      $query = "INSERT INTO login (username, password) VALUES ('$username', '$password')";
      $result = mysqli_query($db, $query) or die ("Couldnt execute query.");

      $query2="SELECT id FROM login WHERE username='$username'and password='$password'";
      $result2 = mysqli_query($db, $query2) or die ("Couldnt execute query.");

if($Ownerorcustomer==0){
  $id=MySQLI_fetch_assoc($result2);
$query3="INSERT INTO customer (id,b_date,address,phone) VALUES ('$id[id]','$Bday','$address','$phone')";
$result3 = mysqli_query($db, $query3) or die ("Couldnt execute query.");
}
else{
  $id=MySQLI_fetch_assoc($result2);
$query3="INSERT INTO owner (id,b_date,address,phone) VALUES ('$id[id]','$Bday','$address','$phone')";
$result3 = mysqli_query($db, $query3) or die ("Couldnt execute query.");
}





      if(!$result) {
        header("Location: http://localhost/Database%20project/login.php");
      }
      else {
                header("Location: http://localhost/Database%20project/index.php");
      }
    }


    ?>
