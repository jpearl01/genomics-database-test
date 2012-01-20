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

      <spacer><h2>HS LOG</h2>
      <hr></spacer>
      
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
	<hr>
	  <table>
	    <tr>
	      <td>
		<LABEL for="HS#">HS#. </LABEL>
		<INPUT type="text" size="8" id="HS_num" value="<?php echo $row['HS_num'] ?>" readonly="readonly">
	      </td>
	      <td>
		<LABEL for="Species">SpeciesCode: </LABEL>
		<INPUT type="text" size="15" id="Species" value="<?php echo $row['SpeciesCode'] ?>" readonly="readonly" ><BR>
	      </td>
	      <td>
		<LABEL for="Tissue Type">TissueType: </LABEL>
		<INPUT type="text" id="TissueType" value="<?php echo $row['TissCode'] ?>" readonly="readonly"><BR>
	      </td>
	      <td>
		<LABEL for="Recd Date">RecdDate </LABEL>
		<INPUT type="text" id="RecdDate" value="<?php echo $row['RecdDate'] ?>" readonly="readonly"><BR>
	      </td>
	    </tr>
	    <tr>
	      <td>
		<LABEL for="NA#">NA#. </LABEL>
		<INPUT type="text" size="8" id="NA_num" value="<?php echo $row['NA_num'] ?>" readonly="readonly"><BR>
	      </td>    
	      <td>
		<LABEL for="File#">File#. </LABEL>
		<INPUT type="text" size="15" id="File_num" value="<?php echo $row['File_num'] ?>" readonly="readonly"><BR>
	      </td>
	      <td>
		<LABEL for="Tissue Ref">TissueRef: </LABEL>
		<INPUT type="text" id="TissueRef" value="<?php echo $row['TissRef'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="SNP">SNP: </LABEL>
		<INPUT type="text" id="SNP" value="<?php echo $row['SNP'] ?>"><BR>
	      </td>
	    </tr>

	    <tr>
	      <td>
		<LABEL for="StudyCode">StudyCode: </LABEL>
		<INPUT type="text" size ="8" id="StudyCode" value="<?php echo $row['StudyCode'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="Stu#">Stu#. </LABEL>
		<INPUT type="text" id="Stu_num" value="<?php echo $row['Stu_num'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="Collect Date">CollectDate:</LABEL>
		<INPUT type="text" id="CollectDate" value="<?php echo $row['CollectDate'] ?>"><BR>
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
		<INPUT type="text" id="BSNum" value="<?php echo $row['BSNum'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="Collect By">CollectBy: </LABEL>
		<INPUT type="text" id="CollectBy" value="<?php echo $row['CollectBy'] ?>"><BR>
	      </td>
	      <td>
		<LABEL for="BLANK">  </LABEL><BR>
	      </td>
	    </table>

	    <spacer><h3>SUBJECT</h3></spacer>
	    <table>
	      <tr>
		<td>
		  <LABEL for="Subj#">Subj#. </LABEL>
		  <INPUT type="text" size="5" id="Subj_num" value="<?php echo $row['Subj_num'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="PTCode">PTCode: </LABEL>
		  <INPUT type="text" size="15" id="PTCode" value="<?php echo $row['PtCode'] ?>"><BR>
		</td>
	      </tr>
	      <tr>
		<td>
		  <LABEL for="Prefix">Prefix: </LABEL>
		  <INPUT type="text" size="5" id="SubjPrefix" value="<?php echo $row['SubjPrefix'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="First">First:</LABEL>
		  <INPUT type="text" size="13" id="First" value="<?php echo $row['SubjFirstName'] ?>"><BR> 
		</td>
		<td>
		  <LABEL for="Middle">Middle: </LABEL>
		  <INPUT type="text" size="13" id="Middle" value="<?php echo $row['SubjMiddleName'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="Last">Last: </LABEL>
		  <INPUT type="text" size="13" id="Last" value="<?php echo $row['SubjLastName'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="Suffix">Suffix: </LABEL>
		  <INPUT type="text" size="5" id="Suffix" value="<?php echo $row['SubjSuffix'] ?>"><BR>
		</td>
	      </tr>
	      <tr>  
		<td>
		  <LABEL for="Sex">Sex: </LABEL>
		  <INPUT type="text" size="1" id="Sex" value="<?php echo $row['SubjSex'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="DOB">DOB: </LABEL>
		  <INPUT type="text" size="13" id="DOB" value="<?php echo $row['SubjDOB'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="SSN">SSN: </LABEL>
		  <INPUT type="text" size="13" id="SSN" value="<?php echo $row['SubjSSN'] ?>"><BR>
		</td>
	      </tr>
	    </table>
	    <spacer><h3>COLLABORATOR</h3></spacer>
	    <table>
	      <tr>
		<td>
		  <LABEL for="CollabCode">CollabCode: </LABEL>
		  <INPUT type="text" size="5" id="CollabCode" value="<?php echo $row['CollabCode'] ?>">
		</td>
		<td colspan="2">
		  <LABEL for="Collab Institution">CollabInst:</LABEL>
		  <INPUT type="text" size="30" id="CollabInstitution" value="<?php echo $row['InstName'] ?>">
		</td>
		<td>
		  <LABEL for="Degree">Degree: </LABEL>
		  <INPUT type="text" size="15" id="Degree" value="<?php echo $row['CoDegree'] ?>"><BR>
		</td>
	      </tr>
	      <tr>
		<td>
		  <LABEL for="Prefix">Prefix: </LABEL>
		  <INPUT type="text" size="5" id="Prefix" value="<?php echo $row['CoPrefix'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="First">First:<BR> </LABEL>
		  <INPUT type="text" size="15" id="First" value="<?php echo $row['CoFirstName'] ?>"><BR>
		</td>
		<td>    
		  <LABEL for="Middle">Middle: </LABEL>
		  <INPUT type="text"  size="10" id="Middle" value="<?php echo $row['CoMiddleName'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="Last">Last: </LABEL>
		  <INPUT type="text" size="13" id="Last" value="<?php echo $row['CoLastName'] ?>"><BR>
		</td>
		<td>
		  <LABEL for="Suffix">Suffix: </LABEL>
		  <INPUT type="text" size="5" id="Suffix" value="<?php echo $row['CoSuffix'] ?>"><BR>
		</td>
		
	      </tr>
	    </table>   
	    
	    <spacer><h3>INSTITUTION</h3></spacer>
	    <table>
	      <tr>
		<td>
		  <LABEL for="Inst Code">Inst Code: </LABEL>
		  <INPUT type="text" size="6" id="InstCode" value="<?php echo $row['InstCode'] ?>"><BR>
		</td>
	      </tr>
	      <tr>
		<tr>
		  <td>
		    <LABEL for="Inst Name">Inst Name: </LABEL>
		    <INPUT type="text" size="30" id="InstName" value="<?php echo $row['InstName'] ?>"><BR>
		  </td>
		</tr>
		<tr>
		  <td>
		    <LABEL for="Inst City">Inst City: </LABEL>
		    <INPUT type="text" size="30" id="InstCity" value="<?php echo $row['InstCity'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="Inst State">Inst State: </LABEL>
		    <INPUT type="text" size="6" id="InstState" value="<?php echo $row['InstState'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL nowrap for="Inst Country">Inst Country</LABEL>
		    <INPUT type="text" size="30" id="InstCountry" value="<?php echo $row['InstCountry'] ?>"><BR>
		  </td>
		</tr>
		<tr>
		  <td>
		    <LABEL for="Inst Phone">Inst Phone: </LABEL>
		    <INPUT type="text" size="30" id="InstPhone" value="<?php echo $row['InstPhone'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="BLANK">  </LABEL>
		  </td>
		  <td>
		    <LABEL for="Inst ZipCode">InstZipCode: </LABEL>
		    <INPUT type="text" size="30" id="InstZipCode" value="<?php echo $row['InstZipCode'] ?>"><BR>
		  </td>
		</tr>
	      </table>   
	      
	      <spacer><h3>LOCATION</h3></spacer>
	      <table>
		<tr>
		  <td>
		    <LABEL for="Freezer">Inst Freezer: </LABEL>
		    <INPUT type="text" size="10" id="Freezer" value="<?php echo $row['Freezer'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="Rack">Inst Rack: </LABEL>
		    <INPUT type="text" size="10" id="Rack" value="<?php echo $row['Rack'] ?>"><BR>
		  </td>
		</tr>
		<tr>
		  <td>
		    <LABEL for="Box">Inst Box: </LABEL>
		    <INPUT type="text" size="10" id="Box" value="<?php echo $row['Box'] ?>"><BR>
		  </td>
		  <td>
		    <LABEL for="Slot">Inst Slot: </LABEL>
		    <INPUT type="text" size="10" id="Slot" value="<?php echo $row['Slot'] ?>"><BR>
		  </td>
		</tr>
	      </table>
	      
	      <BR>
		<table>
		  <tr>
		    <td>
		      <LABEL for="Kbd Date">KbdDate: </LABEL>
		      <INPUT type="text" size="10" id="KbdDate" value="<?php echo $row['KbdDate'] ?>"><BR>
		    </td>
		    <td>
		      <LABEL for="Update Date">UpdateDate: </LABEL>
		      <INPUT type="text" size="10" id="UpdateDate" value="<?php echo $row['UpdateDate'] ?>"><BR>
		    </td>
		  </tr>
		  <tr>
		    <td>
		      <LABEL for="Ln Kbd:">InKbd: </LABEL>
		      <INPUT type="text" size="10" id="InKbd" value="<?php echo $row['InKbd'] ?>"><BR>
		    </td>
		    <td>
		      <LABEL for="Update User">UpdateUser: </LABEL>
		      <INPUT type="text" size="10" id="UpdateUser" value="<?php echo $row['UpdateUser'] ?>"><BR>
		    </td>
		  </tr>
		</table>
		
		<BR>
		  <table>
		    <tr>
		      <td>
			<LABEL for="Comments">Comments: </LABEL>
			<TEXTAREA NAME=Comments value="<?php echo $row['Comments'] ?>">
		      </TEXTAREA>
		    </td>
		  </tr>
		</table>
	      </div>
	    </html>
	    
	    <spacer> <?php include '/var/www/html/genomics/includes/genomics_footer.inc.php'; ?></spacer>

