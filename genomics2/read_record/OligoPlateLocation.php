<!DOCTYPE HTML>
<!--
    # Title: OligoPlateLocation<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Oligo_Plate_Location base table for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
    $sql = "SELECT * FROM OligoPlateLocation WHERE OrderPlateNum = '3151413'";
  }
elseif (isset($_GET['record'])){
    $sql = "SELECT * FROM  OligoPlateLocation WHERE OrderPlateNum = ".$_GET['record'];
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
      <title>OligoPlateLocation</title><?php if($numRows!=1){echo "<p class='warning'><font color='red'> Too many rows returned, incorrect Organism?</font></p>";}?>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>
      <spacer><h2>OligoPlateLocation</h2>
      <hr></spacer>
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
  
<table>
    <tr> 
      <td colspan="2">
	<LABEL for="PlateName">PlateName: </LABEL>
	<INPUT type="text" size="40" id="PlateName" value="<?php echo $row['PlateName'] ?>"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="StudyCode">StudyCode:</LABEL>
	<INPUT type="text" id="StudyCode" value="<?php echo $row['SudyCode'] ?>"><BR>
      </td>
      <td>
	<LABEL for="OrderPlateNum">OrderPlate#:</LABEL>
	<INPUT type="text" id="OrderPlateNum" value="<?php echo $row['OrderPlateNum'] ?>"><BR>
      </td>
    </tr>
     <tr> 
      <td>
	<LABEL for="Freezer">Freezer:</LABEL>
	<INPUT type="text" id="Freezer" value="<?php echo $row['Freezer'] ?>"><BR>
      </td>
      <td>
	<LABEL for="Comp_num">Company#:</LABEL>
	<INPUT type="text" id="Comp_num" value="<?php echo $row['Comp_num'] ?>"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="Rack_num">Rack#:</LABEL>
	<INPUT type="text" id="Rack_num" value="<?php echo $row['Rack_num'] ?>"><BR>
      </td>
      <td>
	<LABEL for="OrderNum">OrderNum:</LABEL>
	<INPUT type="text" id="OrderNum" value="<?php echo $row['OrderNum'] ?>"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="Slot_num">Slot#:</LABEL>
	<INPUT type="text" id="Slot_num" value="<?php echo $row['Slot_num'] ?>"><BR>
      </td>
      <td>
	<LABEL for="Status">Status:</LABEL>
	<INPUT type="text" id="Status" value="<?php echo $row['Status'] ?>"><BR>
      </td>
    </tr>   
</table>
<BR>
<table>
    <tr> 
      <td>
	<LABEL for="InKbd">InKbd: </LABEL>
	<INPUT type="text" size ="20" id="Inkbd" value="<?php echo $row['InKbd'] ?>"><BR>
      </td>
       <td>
	<LABEL for="UpdateUser">UpdateUser: </LABEL>
	<INPUT type="text" size ="20" id="UpdateUser" value="<?php echo $row['UpdateUser'] ?>"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="KbdDate">KbdDate: </LABEL>
	<INPUT type="text" size ="20" id="KbdDate" value="<?php echo $row['KbdDate'] ?>"><BR>
      </td>
       <td>
	<LABEL for="UpdateDate">UpdateDate: </LABEL>
	<INPUT type="text" size ="20" id="UpdateDate" value="<?php echo $row['UpdateDate'] ?>"><BR>
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
