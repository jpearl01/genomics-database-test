<?php
session_start();
ob_start();
// if session variable not set, redirect to login page
if (!isset($_SESSION['authenticated'])) {
  header('Location: http://10.255.6.123/genomics/login.php');
  exit;
}

include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
//Connect to the database
$conn = dbConnect('josh','cgs-1953-asri');
if (!isset($_GET['record'])){
  $sql = "SELECT * FROM HSLog WHERE HS_num = '38376'";
}
elseif (isset($_GET['record'])){
  $sql = "SELECT * FROM HSLog where HS_num = ".$_GET['record'];
}
$result = $conn->query($sql);
if(!isset($result)){ 
  die(mysqli_error()); 
}
$numRows = $result->num_rows;
$row = $result->fetch_assoc();
?>
<!DOCTYPE HTML>
<!--
    # Title: HSLog<BR>
    # Author: Matthew Schultz<BR>
    # Date: October 2011 <BR>
    # Descripition: HSLog for genomics database<BR>
-->
<html>
  <div id="main">
    <head>
      <link rel="stylesheet" href="/css/genomics.css">
      <title>HS LOG</title><?php if($numRows!=1){echo "<p class='warning'>Too many or few rows returned, incorrect HS_num?</font></p>";}?>
    </head>
    
    <spacer><h2>HS LOG CREATE</h2>
      <hr></spacer>
    
    <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
    <div id="restofcontent">
      <spacer><BR></spacer>
      <!--below ties this form to the hslog_insert helper-->
      <form action="hslog_insert.php" method="post">
	<hr>
	<table>
	  <tr>
	    <td>
	      <LABEL for="HS_num">HS_num. </LABEL>
	      <INPUT type="text" size="8" id="HS_num" name="HS_num"><BR>
	    </td>
	    <td>
	      <LABEL for="SpeciesCode">SpeciesCode: </LABEL>
	      <INPUT type="text" size="15" id="SpeciesCode" name="SpeciesCode"><BR>
	    </td>
	    <td>
	      <LABEL for="TissCode">TissueCode: </LABEL>
	      <INPUT type="text" id="TissCode" name="TissCode"><BR>
	    </td>
	    <td>
	      <LABEL for="Recd Date">RecdDate </LABEL>
	      <INPUT type="text" id="RecdDate" name="RecdDate"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="NA_num">NA_num. </LABEL>
	      <INPUT type="text" size="8" id="NA_num" name="NA_num"><BR>
	    </td>    
	    <td>
	      <LABEL for="File_num">File_num </LABEL>
	      <INPUT type="text" size="15" id="File_num" name="File_num"><BR>
	    </td>
	    <td>
	      <LABEL for="TissRef">TissueRef: </LABEL>
	      <INPUT type="text" id="TissRef" name="TissueRef"><BR>
	    </td>
	    <td>
	      <LABEL for="SNP">SNP: </LABEL>
	      <INPUT type="text" id="SNP" name="SNP"<BR>
            </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="StudyCode">StudyCode: </LABEL>
	      <INPUT type="text" size ="8" id="StudyCode" name="StudyCode"><BR>
	    </td>
	    <td>
	      <LABEL for="Stu_num">Stu_num </LABEL>
	      <INPUT type="text" id="Stu_num" name="Stu_num"><BR>
	    </td>
	    <td>
	      <LABEL for="Collect Date">CollectDate:</LABEL>
	      <INPUT type="text" id="CollectDate" name="CollectDate"><BR>
	    </td>
	    <td>
	      <LABEL for="BLANK">  </LABEL><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="BLANK">  </LABEL><BR>
	    </td>
	    <td>
	      <LABEL for="BSNum">BSNum: </LABEL>
	      <INPUT type="text" id="BSNum" name="BSNum"<BR>
	    </td>
	    <td>
	      <LABEL for="Collect By">CollectBy: </LABEL>
	      <INPUT type="text" id="CollectBy" name="CollectBy"<BR>
	    </td>
	    <td>
	      <LABEL for="BLANK">  </LABEL><BR>
	    </td>
	</table>
	<spacer><h3>SUBJECT</h3></spacer>
	<table>
	  <tr>
	    <td>
	      <LABEL for="Subj_num">Subj_num </LABEL>
	      <INPUT type="text" size="5" id="Subj_num" name="Subj_num"><BR>
	    </td>
	    <td>
	      <LABEL for="PTCode">PTCode: </LABEL>
	      <INPUT type="text" size="15" id="PTCode" name="PTCode"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="SubjPrefix">Prefix: </LABEL>
	      <INPUT type="text" size="5" id="SubjPrefix" name="SubjPrefix"><BR>
	    </td>
	    <td>
	      <LABEL for="SubjFirstName">First:</LABEL>
	      <INPUT type="text" size="13" id="SubjFirstName" name="SubjFirstName"><BR> 
	    </td>
	    <td>
	      <LABEL for="SubjMiddleName">Middle: </LABEL>
	      <INPUT type="text" size="13" id="SubjMiddleName" name="SubjMiddleName"><BR>
	    </td>
	    <td>
	      <LABEL for="SubjLastName">Last: </LABEL>
	      <INPUT type="text" size="13" id="SubjLastName" name="SubjLastName"<BR>
	    </td>
	    <td>
	      <LABEL for="SubjSuffix">Suffix: </LABEL>
	      <INPUT type="text" size="5" id="SubjSuffix" name="SubjSuffix"><BR>
	    </td>
	  </tr>
	  <tr>  
	    <td>
	      <LABEL for="SubjSex">Sex: </LABEL>
	      <INPUT type="text" size="1" id="SubjSex" name="SubjSex"><BR>
	    </td>
	    <td>
	      <LABEL for="SubjDOB">DOB: </LABEL>
	      <INPUT type="text" size="13" id="SubjDOB" name="SubjDOB"><BR>
	    </td>
	    <td>
	      <LABEL for="SubjSSN">SSN: </LABEL>
	      <INPUT type="text" size="13" id="SubjSSN" name="SubjSSN"><BR>
	    </td>
            <td>
	      <LABEL for="SubjDegree">Degree: </LABEL>
	      <INPUT type="text" size="13" id="SubjDegree" name="SubjDegree"><BR>
	    </td>
	  </tr>
	</table>
	<spacer><h3>COLLABORATOR</h3></spacer>
	<table>
	  <tr>
	    <td>
	      <LABEL for="CollabCode">CollabCode: </LABEL>
	      <INPUT type="text" size="5" id="CollabCode" name="CollabCode"><BR>
	    </td>
	    <td colspan="2">
	      <LABEL for="CoInstCode">CollabInst:</LABEL>
	      <INPUT type="text" size="30" id="CoInstCode" name="CoInstCode"<BR>
	    </td>
	    <td>
	      <LABEL for="CoDegree">Degree: </LABEL>
	      <INPUT type="text" size="15" id="CoDegree" name="CoDegree"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="CoPrefix">Prefix: </LABEL>
	      <INPUT type="text" size="5" id="CoPrefix" name="CoPrefix"><BR>
	    </td>
	    <td>
	      <LABEL for="CoFirstName">First:<BR> </LABEL>
	      <INPUT type="text" size="15" id="CoFirstName" name="CoFirstName"><BR>
	    </td>
	    <td>    
	      <LABEL for="CoMiddleName">Middle: </LABEL>
	      <INPUT type="text"  size="10" id="CoMiddleName" name="CoMiddleName"><BR>
	    </td>
	    <td>
	      <LABEL for="CoLastName">Last: </LABEL>
	      <INPUT type="text" size="13" id="CoLastName" name="CoLastName"><BR>
	    </td>
	    <td>
	      <LABEL for="CoSuffix">Suffix: </LABEL>
	      <INPUT type="text" size="5" id="CoSuffix" name="CoSuffix"><BR>
	    </td>	
	  </tr>
	</table>   
	<spacer><h3>INSTITUTION</h3></spacer>
	<table>
	  <tr>
	    <td>
	      <LABEL for="InstCode">Inst Code: </LABEL>
	      <INPUT type="text" size="6" id="InstCode" name="InstCode"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="InstName">Inst Name: </LABEL>
	      <INPUT type="text" size="30" id="InstName" name="InstName"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="InstCity">Inst City: </LABEL>
	      <INPUT type="text" size="30" id="InstCity" name="InstCity"><BR>
	    </td>
	    <td>
	      <LABEL for="InstState">Inst State: </LABEL>
	      <INPUT type="text" size="6" id="InstState" name="InstState"><BR>
	    </td>
	    <td>
	      <LABEL nowrap for="InstCountry">Inst Country</LABEL>
	      <INPUT type="text" size="30" id="InstCountry" name="InstCountry"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="InstPhone">Inst Phone: </LABEL>
	      <INPUT type="text" size="30" id="InstPhone" name="InstPhone"><BR>
	    </td>
	    <td>
	      <LABEL for="BLANK">  </LABEL>
	    </td>
	    <td>
	      <LABEL for="InstZipCode">InstZipCode: </LABEL>
	      <INPUT type="text" size="30" id="InstZipCode" name="InstZipCode"><BR>
	    </td>
	  </tr>
	</table>    
	<spacer><h3>LOCATION</h3></spacer>
	<table>
	  <tr>
	    <td>
	      <LABEL for="Freezer">Inst Freezer: </LABEL>
	      <INPUT type="text" size="10" id="Freezer" name="Freezer"><BR>
	    </td>
	    <td>
	      <LABEL for="Rack">Inst Rack: </LABEL>
	      <INPUT type="text" size="10" id="Rack" name="Rack"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="Box">Inst Box: </LABEL>
	      <INPUT type="text" size="10" id="Box" name="Box"<BR>
	    </td>
	    <td>
	      <LABEL for="Slot">Inst Slot: </LABEL>
	      <INPUT type="text" size="10" id="Slot" name="Slot"<BR>
	    </td>
	  </tr>
	</table>      
	<BR>
	<table>
	  <tr>
	    <td>
	      <LABEL for="KbdDate">KbdDate: </LABEL>
	      <INPUT type="text" size="10" id="KbdDate" name="KbdDate"><BR>
	    </td>
	    <td>
	      <LABEL for="UpdateDate">UpdateDate: </LABEL>
	      <INPUT type="text" size="10" id="UpdateDate" name="UpdateDate"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="InKbd:">InKbd: </LABEL>
	      <INPUT type="text" size="10" id="InKbd" name="InKbd"><BR>
	    </td>
	    <td>
	      <LABEL for="UpdateUser">UpdateUser: </LABEL>
	      <INPUT type="text" size="10" id="UpdateUser" name="UpdateUser"><BR>
	    </td>
	  </tr>
	</table>	
	<BR>
	<table>
	  <tr>
	    <td>
	      <LABEL for="Comments">Comments: </LABEL>
	      <TEXTAREA NAME=Comments name="Comments">
	      </TEXTAREA>
	    </td>
	  </tr>
	  <tr>
      	    <td>
	      <LABEL for="">.</LABEL>
      	      <input type="submit"><BR>
      	    </td>
    	  </tr>
	</table>
    </div>
</html>
<spacer> <?php include '/var/www/html/genomics/includes/genomics_footer.inc.php'; ?></spacer>

