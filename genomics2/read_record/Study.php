<!DOCTYPE HTML>
<!--
    # Title: Study<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Study base table for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
    $sql = "SELECT * FROM Study WHERE StudyCode = '??'";
}
elseif (isset($_GET['record'])){
    $sql = "SELECT * FROM Study WHERE StudyCode = ".$_GET['record'];
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
      <title>Study</title><?php if($numRows!=1){echo "<p class='warning'><font color='red'> Too many rows returned, incorrect StudyCode?</font></p>";}?>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>
      <spacer><h2>STUDY</h2>
      <hr></spacer>
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
  
<table>
    <tr> 
      <td>
	<LABEL for="StudyCodeCode">StudyCode: </LABEL>
	<INPUT type="text" id="StudyCode" value="<?php echo $row['StudyCode'] ?>"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="StPartOf">StPartOf:</LABEL>
	<INPUT type="text" size ="40" id="StPartOf" value="<?php echo $row['StPartOf'] ?>"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="StudyFull">StudyFull: </LABEL>
	<INPUT type="text" size ="40" id="StudyFull" value="<?php echo $row['StudyFull'] ?>"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="StudyShort">StudyShort: </LABEL>
	<INPUT type="text" size ="40" id="Description" value="<?php echo $row['StudyShort'] ?>"><BR>
      </td>
    </tr>   

    <tr> 
      <td>
	<LABEL for="Description">Description: </LABEL>
	<INPUT type="text" size ="40" id="Description" value="<?php echo $row['Description'] ?>"><BR>
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
    <tr>
      <td>
	<LABEL for="Comment">Comments: </LABEL>
	<TEXTAREA NAME="Comments" value="<?php echo $row['Comments'] ?>">
	</TEXTAREA>
      </td>
    </tr>
</table>  

     </div>
</html>
		  
<spacer> <?php include '/var/www/html/genomics/includes/genomics_footer.inc.php'; ?></spacer>
