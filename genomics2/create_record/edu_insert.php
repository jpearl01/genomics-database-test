<!--
    # Title: edu_insert<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
    # Descripition: Education insert table helper for genomics database needed by Education form to insert data into the database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh', 'cgs-1953-asri');
if (!$conn)
  {
   die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO Education (EduCode, Description, InKbd, KbdDate) 
VALUES ('$_POST[EduCode]','$_POST[Description]','$_POST[InKbd]', NOW())";

$result= $conn->query($sql);

if (!isset($result))
   {
   die('Oopsie you got an error!' . mysql_error());
   }
echo "1 record added";

?>
