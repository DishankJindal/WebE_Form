<?php error_reporting(0);

  $con=mysql_connect("localhost","root","root")
    or die("Couldn't connect to serve");

  $db =mysql_select_db("webEForm",$con)
    or die("Couldn't select database");
?>
