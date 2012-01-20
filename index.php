<?php
session_start();
ob_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
  header('Location: http://10.255.6.123/genomics/login.php');
  exit;
}
$dbname = 'genomics_test';

if(!mysql_connect('localhost', 'apache', 'apache')){
	echo 'Could not connect to mysql';
	exit;
}

$sql = "SHOW TABLES FROM $dbname";
$result = mysql_query($sql);

if (!$result){
    echo "DB Error, could not list tables\n";
    echo 'MySQL Error: '.mysql_error();
    exit;
}

while($row = mysql_fetch_row($result)){
    $currentEntry="Table: {$row[0]}";
     echo "<a href=\"test.php?itemName=$currentEntry\">$currentEntry<a/><br>";
}

mysql_free_result($result);
?>
