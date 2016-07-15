<?php error_reporting(E_ALL | E_WARNING | E_NOTICE);
ini_set('display_errors', TRUE);
/* Configuration Setting */

define('DB_NAME', 'studentDB');
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');

$link = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if (!$link) {
	die('Could not connect: ' . mysql_error());
}

/* Configuration Ended */

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

echo "Succe 
mysqli_close();
?>
