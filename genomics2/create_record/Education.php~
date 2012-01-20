<!DOCTYPE HTML>
<!--
    # Title: Collaborator<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Collaborator base table for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
    $sql = "SELECT * FROM Collaborator WHERE CollabCode = 'AFR'";
  }
elseif (isset($_GET['record'])){
    $sql = "SELECT * FROM Collaborator WHERE CollabCode = \"".$_GET['record']."\"";
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
      <title>Collaborator</title><?php if($numRows!=1){echo "<p class='warning'><font color='red'> Too many rows returned, incorrect CollabCode?</font></p>";}?>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>

      <spacer><h2>COLLABORATOR</h2>
      <hr></spacer>
      
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
	<table>
	    <tr>
	      <td>
		<LABEL for="CollabCode">CollabCode:</LABEL>
		<INPUT type="text" size="10" id="CollabCode" value="<?php echo $row['CollabCode']; ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="KbdDate">Kbd Date: </LABEL>
		  <INPUT type="text" id="KbdDate" value="<?php echo $row['KbdDate']; ?>"><BR>
		  </td>
	      <td>
	          <LABEL for="UpdateDate">UpdateDate: </LABEL>
	          <INPUT type="text"  id="UpdateDate" value="<?php echo $row['UpdateDate']; ?>"><BR>
	      </td>
	    </tr>
	    <tr>
	      <td>
		  <LABEL for="InstCode">InstCode:</LABEL>
		  <INPUT type="text" size="10" id="InstCode" value="<?php echo $row['InstCode']; ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="In Kbd">In Kbd: </LABEL>
		  <INPUT type="text" id="InKbd" value="<?php echo $row['InKbd']; ?>"><BR>
		  </td>
	      <td>
	          <LABEL for="UpdateUser">UpdateUser: </LABEL>
	          <INPUT type="text" id="UpdateUser" value="<?php echo $row['UpdateUser']; ?>"><BR>
	      </td>
	      </tr>
	  </table>
	  <BR>
	  <table>
	      <td>
		<LABEL for="Prefix">Prefix:</LABEL>
		<INPUT type="text" size ="5" id="Prefix" value="<?php echo $row['Prefix']; ?>"><BR>
	      </td>
	      <td>
		<LABEL for="FirstName">First:</LABEL>
		<INPUT type="text" size="13" id="FirstName" value="<?php echo $row['FirstName']; ?>"><BR>
	      </td>
	      <td>
		<LABEL for="MiddleName">Middle:</LABEL>
		<INPUT type="text" size="13" id="MiddleName" value="<?php echo $row['MiddleName']; ?>"><BR>
	      </td>
	      <td>
	      <td>
		<LABEL for="LastName">Last:</LABEL>
		<INPUT type="text" size="13" id="LastName" value="<?php echo $row['LastName']; ?>"><BR>
	      </td>
	      <td>
	      <td>
		<LABEL for="Suffix">Suffix:</LABEL>
		<INPUT type="text" size="5" id="Suffix" value="<?php echo $row['Suffix']; ?>"><BR>
	      </td>
	      <td>
	  </table>
	  <BR >
	  <table>
	      <tr> 
	      <td>
	          <LABEL for="Specialty">Specialty: </LABEL>
	          <INPUT type="text" id="Specialty" value="<?php echo $row['Specialty']; ?>"><BR>
	      </td>
	      </tr>
	      <tr> 
	     <td>
		<LABEL for="Title">Title:</LABEL>
		<INPUT type="text" size ="40" id="Title" value="<?php echo $row['Title']; ?>"><BR>
	      </td>
	     </tr>
	     <tr> 
	     <td>
		<LABEL for="Dept">Dept: </LABEL>
		<INPUT type="text" size ="60" id="Dept" value="<?php echo $row['Dept']; ?>"><BR>
	      </td>
	     </tr>
	     <tr> 
	     <td>
		<LABEL for="EMail">E-mail: </LABEL>
		<INPUT type="text" size ="60" id="EMail" value="<?php echo $row['EMail']; ?>"><BR>
	      </td>
	     </tr>
	     <tr> 
	     <td>
		<LABEL for="WebSite">WebSite: </LABEL>
		<INPUT type="text" size ="60" id="WebSite" value="<?php echo $row['WebSite']; ?>"><BR>
	      </td>
	     </tr>
	     </table>
	     <BR>
	     <table>
		<tr> 
		<td>
		    <LABEL for="Addr1">Address 1: </LABEL>
		    <INPUT type="text" size ="40" id="Addr1" value="<?php echo $row['Addr1']; ?>"><BR>
		</td>
		</tr>
		<tr> 
		<td>
		    <LABEL for="Addr2">Address 2: </LABEL>
		    <INPUT type="text" size ="40" id="Addr2" value="<?php echo $row['Addr2']; ?>"><BR>
		</td>
		</tr>
		<tr> 
		<td>
		    <LABEL for="City">City: </LABEL>
		    <INPUT type="text" size ="20" id="City" value="<?php echo $row['City']; ?>"><BR>
		</td>
		<td>
		    <LABEL for="State">State: </LABEL>
		    <INPUT type="text" size ="10" id="State" value="<?php echo $row['State']; ?>"><BR>
		</td>
		<td>
		    <LABEL for="ZipCode">Zip: </LABEL>
		    <INPUT type="text" size ="13" id="ZipCode" value="<?php echo $row['ZipCode']; ?>"><BR>
		</td>
		</tr>
		<tr>
		<td>
		    <LABEL for="Country">Country: </LABEL>
		    <INPUT type="text" size ="20" id="Country" value="<?php echo $row['Country']; ?>"><BR>
		</td>
		</tr>
		<tr> 
		<td>
		    <LABEL for="DayPhone">DayPhone: </LABEL>
		    <INPUT type="text" size ="13" id="DayPhone" value="<?php echo $row['DayPhone']; ?>"><BR>
		</td>
		<td>
		    <LABEL for="EvePhone">EveningPhone: </LABEL>
		    <INPUT type="text" size ="13" id="EvePhone" value="<?php echo $row['EvePhone']; ?>"><BR>
		</td>
		<td>
		    <LABEL for="Fax">Fax: </LABEL>
		    <INPUT type="text" size ="13" id="Fax" value="<?php echo $row['Fax']; ?>"><BR>
		</td>
		</tr>
	     </table>
	     <BR>
	     <table>
		<tr>
		<td>
		  <LABEL for="Comment">Comments: </LABEL>
		  <TEXTAREA NAME=Comments value="<?php echo $row['Comments']; ?>">
		  </TEXTAREA>
		</td>
		</tr>
	     </table>  

      </div>
</html>
		  
<spacer> <?php include '/var/www/html/genomics/includes/genomics_footer.inc.php'; ?></spacer>

