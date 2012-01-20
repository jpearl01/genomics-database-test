<!DOCTYPE HTML>
<!--
    # Title: Institution<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Institution base table for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
    $sql = "SELECT * FROM Institution WHERE InstCode = 'ASRI'";
  }
elseif (isset($_GET['record'])){
    $sql = "SELECT * FROM Institution WHERE InstCode = \"".$_GET['record']."\"";
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
      <title>Institution</title>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>

      <spacer><h2>INSTITUTION</h2>
      <hr></spacer>
      
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
	
	<table>
	      <tr>
	      <td>
		<LABEL for="InstCode">InstCode:</LABEL>
		<INPUT type="text" size="10" id="InstCode" value="<?php echo $row['InstCode']; ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="KbdDate">Kbd Date: </LABEL>
		  <INPUT type="text" size="10" id="KbdDate" value="<?php echo $row['KbdDate']; ?>"><BR>
	      </td>
	      <tr>
	      <td>
		  <LABEL for="InstFull">InstFull:</LABEL>
	  	  <INPUT type="text" size="50" id="InstFull" value="<?php echo $row['InstFull']; ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="In Kbd">In Kbd: </LABEL>
		  <INPUT type="text" size="10" id="InKbd" value="<?php echo $row['InKbd']; ?>"><BR>
		  </td>
	      </tr>
	      <tr>
	      <td>
		  <LABEL for="InstShort">InstShort:</LABEL>
	  	  <INPUT type="text" size="50" id="InstShort" value="<?php echo $row['InstShort']; ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="UpdateDate">UpdateDate: </LABEL>
		  <INPUT type="text" size="20" id="UpdateDate" value="<?php echo $row['UpdateDate']; ?>"><BR>
		  </td>
	      </tr>
	      <tr>
	      <td>
		  <LABEL for="InstSort">InstSort:</LABEL>
	  	  <INPUT type="text" size="50" id="InstSort" value="<?php echo $row['InstSort']; ?>"><BR>
	      </td>
	      <td>
		  <LABEL for="UpdateUser">UpdateUser: </LABEL>
		  <INPUT type="text" size="20" id="UpdateUser" value="<?php echo $row['UpdateUser']; ?>"><BR>
	      </td>
	      </tr>
	</table>
	<BR>
	<table>
	      <tr> 
	      <td>
	 	 <LABEL for="EMail">E-Mail: </LABEL>
	 	 <INPUT type="text" size ="40" id="EMail" value="<?php echo $row['EMail']; ?>"><BR>
	      </td>
	      </tr>
	      <tr> 
	      <td>
		 <LABEL for="Website">Website: </LABEL>
		 <INPUT type="text" size ="40" id="Website" value="<?php echo $row['WebSite']; ?>"><BR>
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
		  <LABEL for="EvePhone">EvePhone: </LABEL>
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

