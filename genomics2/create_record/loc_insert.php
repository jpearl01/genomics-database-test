<!--
    # Title: Location<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
    # Descripition: Location insert table helper for genomics database needed by Location form to insert data into the database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh', 'cgs-1953-asri');
if (!$conn)
  {
   die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO Location (Freezer, Rack, Slot, Box, Comments) 
VALUES ('$_POST[Freezer]', '$_POST[Rack]', '$_POST[Slot]',  '$_POST[Box]',  '$_POST[Comments]')";

$result= $conn->query($sql);

if (!isset($result))
   {
   die('Oopsie you got an error!' . mysql_error());
   }
echo "1 record added";

?>
