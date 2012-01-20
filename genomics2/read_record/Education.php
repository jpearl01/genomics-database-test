<!DOCTYPE HTML>
<!--
    # Title: Education<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Education base table for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
    $sql = "SELECT * FROM Education WHERE EduCode = 'Bachelor'";
  }
elseif (isset($_GET['record'])){
    $sql = "SELECT * FROM Education WHERE EduCode = \"".$_GET['record']."\"";
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
      <title>Education</title><?php if($numRows!=1){echo "<p class='warning'><font color='red'> Too many rows returned, incorrect CollabCode?</font></p>";}?>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>

      <spacer><h2>EDUCATION</h2>
      <hr></spacer>
      
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
	<table>
	  <tr> 
	    <td>
	      <LABEL for="EduCode">EduCode: </LABEL>
	      <INPUT type="text" id="EduCode" value="<?php echo $row['EduCode'] ?>"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td colspan="2">
	      <LABEL for="Description">Description:</LABEL>
	      <INPUT type="text" size ="60" id="Description" value="<?php echo $row['Description'] ?>"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="InKbd">InKbd: </LABEL>
	      <INPUT type="text" size ="20" id="Inkbd" value="<?php echo $row['InKbd'] ?>"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="KbdDate">KbdDate: </LABEL>
	      <INPUT type="text" size ="20" id="KbdDate" value="<?php echo $row['KbdDate'] ?>"><BR>
	    </td>
	  </tr>
	</table>  
	 
	
      </div>
</html>
		  
<spacer> <?php include '/var/www/html/genomics/includes/genomics_footer.inc.php'; ?></spacer>

