<!--
    # Title: Location<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Location base table for genomics database<BR>

    # Currently this form is tied into the Box table imported from Sybase, though that table should likely be modified.
    # The Freezer table imported in has no data other than table headers.  Relevant location data might include
    # Primary key of Location_num or Location_code, freezer_num, shelf_num, Box_num, Slot_num, Comments, person who placed item in location
    # and date
-->
<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
    $sql = "SELECT * FROM Box WHERE Box_num = '1'";
  }
elseif (isset($_GET['record'])){
    $sql = "SELECT * FROM Box WHERE Box_num = ".$_GET['record'];
}
$result = $conn->query($sql);

if(!isset($result)){ 
    die(mysqli_error()); 
}
$numRows = $result->num_rows;
$row = $result->fetch_assoc();
?>

<!DOCTYPE HTML>
<html>
  <div id="main">
    <head>
      <title>Location</title><?php if($numRows!=1){echo "<p class='warning'><font color='red'> Too many rows returned, incorrect Location_num?</font></p>";}?>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>

      <spacer><h2>LOCATION</h2>
      <hr></spacer>     
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
	
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
	       <LABEL for="Comment">Comments: </LABEL>
	       <TEXTAREA NAME=Comments value="<?php echo $row['Comments'] ?>">
	       </TEXTAREA>
	     </td>
	   </tr>
	 </table>
      </div>
</html>
		  
<spacer> <?php include '/var/www/html/genomics/includes/genomics_footer.inc.php'; ?></spacer>

