<!--
    # Title: com_insert<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
    # Descripition:  com_insert Company_insert helper form for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh', 'cgs-1953-asri');
if (!$conn)
  {
   die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO Company (Comp_num, CompName, CompPhone, CompFax, InKbd, KbdDate, Comments) 
VALUES ('$_POST[Comp_num]','$_POST[CompName]','$_POST[CompPhone]', '$_POST[CompFax]', '$_POST[InKbd]', NOW(), '$_POST[Comments]')";

$result= $conn->query($sql);

if (!isset($result))
   {
   die('Oopsie you got an error!' . mysql_error());
   }
echo "1 record added";

?>
