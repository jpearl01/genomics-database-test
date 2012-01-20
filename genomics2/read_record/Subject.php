<!DOCTYPE HTML>
<!--
    # Title: Subject<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Subject base table for genomics database<BR>
-->
<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
    $sql = "SELECT * FROM Subject WHERE Subj_num = '1004'";
  }
elseif (isset($_GET['record'])){
    $sql = "SELECT * FROM Subject WHERE Subj_num = \"".$_GET['record']."\"";
}

$result = $conn->query($sql);

if(!isset($result)){ 
    die(mysqli_error()); 
}
$numRows = $result->num_rows;
$row = $result->fetch_assoc();
?>

<html>
  <div id="main">
    <head>
      <title>Subject</title><?php if($numRows!=1){echo "<p class='warning'><font color='red'> Too many/few rows returned, incorrect Subj_num?</font></p>";}?>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>

      <spacer><h2>SUBJECT</h2>
      <hr></spacer>     
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
	
	<table>
	    <tr>
	      <td>
		<LABEL for="StudyCode">Study Code </LABEL>
		<INPUT type="text" size="20" id="StudyCode" value="<?php echo $row['StudyCode'] ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="CollabCode">CollabCode: </LABEL>
		  <INPUT type="text" size="15" id="CollabCode" value="<?php echo $row['CollabCode'] ?>"><BR>
		  </td>
	      <td>
	          <LABEL for="InstCode">Inst Code: </LABEL>
	          <INPUT type="text" id="InstCode" value="<?php echo $row['InstCode'] ?>"><BR>
	      </td>
	    <tr>
	  </table>
	  <BR>
	  <table>
	    <tr>
	      <td>
		<LABEL for="Subj_num">Subj#. </LABEL>
		<INPUT type="text" size="8" id="Subj_num" value="<?php echo $row['Subj_num'] ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="GroupID">Group ID: </LABEL>
		  <INPUT type="text" size="15" id="GroupID" value="<?php echo $row['GroupID'] ?>"><BR>
		  </td>
	      <td>
	          <LABEL for="FamilyName">FamilyName: </LABEL>
	          <INPUT type="text" id="FamilyName" value="<?php echo $row['FamilyName'] ?>"><BR>
	      </td>
	      <tr>
	      <td>
		<LABEL for="AffectStat">AffectStat: </LABEL>
		<INPUT type="text" size="8" id="AffectStat" value="<?php echo $row['AffectStat'] ?>"><BR>
	      </td>    
	      <td>
		  <LABEL for="PersonNumber">Person#. </LABEL>
		  <INPUT type="text" size="15" id="PersonNumber" value="<?php echo $row['PersonNumber'] ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="OldSubjNums">OldSubjNum: </LABEL>
		  <INPUT type="text" size="15" id="OldSubjNums" value="<?php echo $row['OldSubjNums'] ?>"><BR>
	      </td>
	    </tr>
	  </table>
	  <BR>
	  <table>
	      <td>
		<LABEL for="Prefix">Prefix:</LABEL>
		<INPUT type="text" size ="5" id="Prefix" value="<?php echo $row['Prefix'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="FirstName">First:</LABEL>
		<INPUT type="text" size="13" id="FirstName" value="<?php echo $row['FirstName'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="MiddleName">Middle:</LABEL>
		<INPUT type="text" size="13" id="MiddleName" value="<?php echo $row['MiddleName'] ?>"><BR>
	      </td>
	      <td>
	      <td>
		<LABEL for="LastName">Last:</LABEL>
		<INPUT type="text" size="13" id="LastName" value="<?php echo $row['LastName'] ?>"><BR>
	      </td>
	      <td>
	      <td>
		<LABEL for="Suffix">Suffix:</LABEL>
		<INPUT type="text" size="5" id="Suffix" value="<?php echo $row['Suffix'] ?>"><BR>
	      </td>
	      <td>
	  </table>
	  <BR>
	  <table>
	      <tr>
	      <td>
		<LABEL for="Degree">Degree:</LABEL>
		<INPUT type="text" id="Degree" value="<?php echo $row['Degree'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="Sex">Sex</LABEL>
		    <INPUT type="text" id="Sex" value="<?php echo $row['Sex'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="DOB">DOB: </LABEL>
		    <INPUT type="text" id="DOB" value="<?php echo $row['DOB'] ?>"><BR>
		  </td>
	        </tr>
	        <tr>
		  <td>
		    <LABEL for="SSN">SSN:</LABEL>
		    <INPUT type="text" id="SSN" value="<?php echo $row['SSN'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="PtCode">PT Code: </LABEL>
		    <INPUT type="text" id="PtCode" value="<?php echo $row['PtCode'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="BLANK">  </LABEL><BR> 
		  </td>
		</tr>
		<tr>  
		  <td>  
		    <LABEL for="Addr1">Address 1:</LABEL>
		    <INPUT type="text" size="30" id="Addr1" value="<?php echo $row['Addr1'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="Addr2">Address 2:</LABEL>
		    <INPUT type="text" size="30" id="Addr2" value="<?php echo $row['Addr2'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="City">City:</LABEL>
		    <INPUT type="text" id="City" value="<?php echo $row['City'] ?>"><BR>
		  </td>
		  </tr>
		  <tr>
		  <td>
		    <LABEL for="Country">Country: </LABEL>
		    <INPUT type="text" id="Country" value="<?php echo $row['Country'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="State">State:</LABEL>
		    <INPUT type="text" id="State" value="<?php echo $row['State'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="ZipCode">Zip:</LABEL>
		    <INPUT type="text" id="ZipCode" value="<?php echo $row['ZipCode'] ?>"><BR>
		  </td>
		</tr>
		<tr>
		  <td>
		    <LABEL for="AcctNum">AccountNum: </LABEL>
		    <INPUT type="text" id="AcctNum" value="<?php echo $row['AcctNum'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="DayPhone">Day Phone: </LABEL>
		    <INPUT type="text" id="DayPhone" value="<?php echo $row['DayPhone'] ?>"><BR>
		  </td>
		  <tr>
		  <td>
		    <LABEL for="RoomNum">Room Num: </LABEL>
		    <INPUT type="text" id="RoomNum" value="<?php echo $row['RoomNum'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="EvePhone">Eve Phone: </LABEL>
		    <INPUT type="text" id="EvePhone" value="<?php echo $row['EvePhone'] ?>"><BR>
		  </td>
		  <tr>
		  <td>
		    <LABEL for="InKbd">In Kbd:: </LABEL>
		    <INPUT type="text" id="InKbd" value="<?php echo $row['InKbd'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="Fax">Fax: </LABEL>
		    <INPUT type="text" id="Fax" value="<?php echo $row['Fax'] ?>"><BR>
		  </td>
		  <tr>
		  <td>
		    <LABEL for="KbdDate">Kbd Date: </LABEL>
		    <INPUT type="text" id="KbdDate" value="<?php echo $row['KbdDate'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="EMail">E-mail: </LABEL>
		    <INPUT type="text" id="EMail" value="<?php echo $row['EMail'] ?>"><BR>
		  </td>
		  </tr>
		  <tr>
		  <td>
		    <LABEL for="UpdateUser">UpdateUser: </LABEL>
		    <INPUT type="text" id="UpdateUser" value="<?php echo $row['UpdateUser'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="Proband">Proband: </LABEL>
		    <INPUT type="text" id="Proband" value="<?php echo $row['Proband'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="SibPair">SibPair: </LABEL>
		    <INPUT type="text" id="SibPair" value="<?php echo $row['SibPair'] ?>"><BR>
		  </td>
		  </tr>
		  <tr>
		  <td>
		    <LABEL for="UpdateDate">UpdateDate: </LABEL>
		    <INPUT type="text" id="UpdateDate" value="<?php echo $row['UpdateDate'] ?>"><BR>
		  </td>
		  </tr>
	      </table>
	      <BR>
	      <table>
		<tr>
		<td>
		  <LABEL for="DeleteMsg">Delete Msg: </LABEL>
		  <TEXTAREA NAME=DeleteMsg value="<?php echo $row['DeleteMsg'] ?>">
		  </TEXTAREA>
		</td>
		</tr>
	      </table>
	      <BR>
	      <table>
		<tr>
		<td>
		  <LABEL for="Comment">Comments: </LABEL>
		  <TEXTAREA NAME=Comments value="<?php echo $row['Comments'] ?>">
		  </TEXTAREA>
		</td>
		</tr>
	      </table>
	     
      </div>
</html>
		  
<spacer> <?php include '/var/www/html/genomics/includes/genomics_footer.inc.php'; ?></spacer>

