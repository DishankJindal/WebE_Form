<?php
/* Configuration Setting */

define('DB_NAME', 'studentDB');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$db_selected) {
	die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$SFN = $_POST['SFN'];
$SLN = $_POST['SLN'];
$MOBILE = $_POST['MOBILE'];
$CLASS = $_POST['CLASS'];
$FFN = $_POST['FFN'];
$FLN = $_POST['FLN'];
$FOCP = $_POST['FOCP'];
$MFN = $_POST['MFN'];
$MLN = $_POST['MLN'];
$MOCP = $_POST['MOCP'];
$SADDR = $_POST['SADDR'];

$sql = "INSERT INTO form (ID, SFN, SLN, MOBILE, CLASS, FFN, FLN, FOCP, MFN, MLN, MOCP, SADDR) VALUES ('', '$SFN', '$SLN',
   $MOBILE, $CLASS, '$FFN', '$FLN', '$FOCP', '$MFN', '$MLN', '$MOCP', '$SADDR')";

if (!mysql_query($sql)) {
	die('Error: ' . mysql_error());
}
echo "Successfully Submitted";
mysql_close();
?>
