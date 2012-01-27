<!--
    # Title: hslog_insert.php<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
     # Descripition: HSLog insert table helper for genomics database needed by HSLog form to insert data into the database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh', 'cgs-1953-asri');
if (!$conn)
  {
    die('Could not connect: ' . mysql_error());
  }

$sql="INSERT INTO HSLog (HS_num, SpeciesCode, TissCode, RecdDate, NA_num, File_num, TissRef, SNP, StudyCode, Stu_num,
CollectDate, BSNum, CollectBy, Subj_num, PTCode, SubjPrefix, SubjFirstName, SubjMiddleName, SubjLastName, SubjSuffix, SubjDegree,
CollabCode, CoInstCode, CoDegree, CoPrefix, CoFirstName, CoMiddleName, CoLastName, CoSuffix, InstCode, InstName, InstCity, InstState,
InstCountry, InstPhone, InstZipCode, Freezer, Rack, Box, Slot, KbdDate, UpdateDate, InKbd, UpdateUser, Comments) 

VALUES ('$_POST[HS_num]','$_POST[SpeciesCode]', '$_POST[TissCode]', '$_POST[RecdDate]', '$_POST[NA_num]', '$_POST[File_num]', '$_POST[TissRef]',
'$_POST[SNP]', '$_POST[SudyCode]', '$_POST[Stu_num]', '$_POST[CollectDate]','$_POST[BSNum]','$_POST[CollectBy]','$_POST[Subj_num]','$_POST[PTCode]',
'$_POST[SubjPrefix]', '$_POST[SubjFirstName]', '$_POST[SubjMiddleName]', '$_POST[SubjLastName]', '$_POST[SubjSuffix]', '$_POST[SubjDegree]',
'$_POST[CollabCode]', '$_POST[CoInstCode]', '$_POST[CoDegree]', '$_POST[CoPrefix]', '$_POST[CoFirstName]', '$_POST[CoMiddleName]', '$_POST[CoLastName]', '$_POST[CoSuffix]', '$_POST[InstCode]', '$_POST[InstName]', '$_POST[InstCity]', '$_POST[InstState]', '$_POST[InstCountry]', '$_POST[InstPhone]', '$_POST[InstZipCode]',
'$_POST[Freezer]', '$_POST[Rack]', '$_POST[Box]', '$_POST[Slot]', '$_POST[KbdDate]', '$_POST[UpdateDate]', '$_POST[InKbd]', '$_POST[UpdateUser]',
'$_POST[Comments]')";

$result= $conn->query($sql);

if (!isset($result))
  {
    die('Oopsie you got an error!' . mysql_error());
  }
echo "1 record added";
?>
