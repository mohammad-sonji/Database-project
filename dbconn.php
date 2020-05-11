<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>dbconn</title>
  </head>
  <body>
    <?php
    $db = mysqli_connect("localhost", "root", "");
    if (!$db) {
	     print "Error - Could not connect to MySQL";
	     exit;
	}
  $er = mysqli_select_db($db, "onlineshop");
  if (!$er) {
	    print "Error - Could not select this database";
	    exit;
	}
     ?>
  </body>
</html>
