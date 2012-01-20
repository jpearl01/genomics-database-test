<!--
    # Title: Oligo Plate Location<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
    # Descripition: Oligo Plate Location for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh', 'cgs-1953-asri');
if (!$conn)
  {
   die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO OligoPlateLocation (PlateName, StudyCode, OrderPlateNum, Freezer, Rack_num, OrderNum, Slot_num, Status, InKbd, 
UpdateUser, KbdDate, UpdateDate, Comments)

VALUES ('$_POST[PlateName]', '$_POST[StudyCode]', '$_POST[OrderPlateNum]', '$_POST[Freezer]', '$_POST[Rack_num]', '$_POST[OrderNum]', '$_POST[Slot_num]', '$_POST[Status]', '$_POST[InKbd]', '$_POST[UpdateUser]', '$_POST[KbdDate]', '$_POST[UpdateDate]', '$_POST[Comments]')";


$result= $conn->query($sql);

if (!isset($result))
   {
   die('Oopsie you got an error!' . mysql_error());
   }
echo "1 record added";

?>
