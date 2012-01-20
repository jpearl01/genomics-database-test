<!--
    # Title: col_insert.php<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
    # Descripition: Collaborator insert table helper for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh', 'cgs-1953-asri');
if (!$conn)
  {
   die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO Collaborator (CollabCode, UpdateDate, InstCode, InKbd, KbdDate, UpdateUser, Prefix, FirstName, MiddleName, LastName, Suffix, Specialty, Degree, Title, Dept, EMail, WebSite, Addr1, Addr2, City, State, ZipCode, Country, DayPhone, EvePhone, Fax, Comments) 

VALUES ('$_POST[CollabCode]','$_POST[UpdateDate]','$_POST[InstCode]', '$_POST[InKbd]' , NOW(), '$_POST[UpdateUser]' , '$_POST[prefix]', '$_POST[FirstName]', '$_POST[MiddleName]', '$_POST[LastName]', '$_POST[Suffix]', '$_POST[Specialty]', '$_POST[Degree]', '$_POST[Title]', '$_POST[Dept]', '$_POST[EMail]', '$_POST[WebSite]', '$_POST[Addr1]', '$_POST[Addr2]', '$_POST[City]', '$_POST[State]', '$_POST[ZipCode]', '$_POST[Country]', '$_POST[DayPhone]', '$_POST[EvePhone]', '$_POST[Fax]', '$_POST[Comments]')";

$result= $conn->query($sql);

if (!isset($result))
   {
   die('Oopsie you got an error!' . mysql_error());
   }
echo "1 record added";

?>
