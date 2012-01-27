<!--
    # Title: inst_insert<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
    # Descripition: Institution insert table helper for genomics database needed by Institution form to insert data into the database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh', 'cgs-1953-asri');
if (!$conn)
  {
    die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO Institution (InstCode, KbdDate, InstFull, InKbd, InstShort, UpdateDate, InstSort, UpdateUser, EMail,
Website, Addr1, Addr2, City, State, ZipCode, Country, DayPhone, EvePhone, Fax, Comments)

VALUES ('$_POST[InstCode]', '$_POST[KbdDate]', '$_POST[InstFull]', '$_POST[InKbd]', '$_POST[InstShort]', '$_POST[UpdateDate]',
'$_POST[InstSort]', '$_POST[UpdateUser]', '$_POST[EMail]', '$_POST[Website]', '$_POST[Addr1]', '$_POST[Addr2]',
'$_POST[City]', '$_POST[State]', '$_POST[ZipCode]', '$_POST[Country]', '$_POST[DayPhone]', '$_POST[EvePhone]',
'$_POST[Fax]', '$_POST[Comments]')";

$result= $conn->query($sql);

if (!isset($result))
  {
    die('Oopsie you got an error!' . mysql_error());
  }
echo "1 record added";
?>
