<!DOCTYPE HTML>
<!--
   # Title: Oligo Plate Location<BR>
   # Author: J Earl modified by M Schultz<BR>
   # Date: December 2011<BR>
   # Description: Oligo plate location for genomics database<BR>
-->

<?php 
#include '/var/www/html/genomics/includes/HS_filter.inc.php';
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');
if (!isset($_GET['col']) && !isset($_GET['sort'])){
    $sql = "SELECT * FROM OligoPlateLocation";
  }
elseif (isset($_GET['col']) && !isset($_GET['sort'])){
    $sql = "SELECT * FROM OligoPlateLocation ORDER BY ".$_GET['col'];
}
elseif (isset($_GET['col']) && isset($_GET['sort'])){
  $sql = "SELECT * FROM OligoPlateLocation ORDER BY ".$_GET['col']." ".$_GET['sort'];
}
$result = $conn->query($sql);
if(!isset($result)){ 
    die(mysqli_error()); 
}
$numRows = $result->num_rows;
?>

<html>
  
  <div id="records">
    <head>
      <title>OLIGO PLATE LOCATION TABLE</title>
      <link rel="stylesheet" href="/css/genomics.css"></link>
       <link rel="stylesheet" href="/css/hs_records_dropdown.css">
    </head>

    <spacer>
      <h2>OLIGO PLATE LOCATION TABLE</h2>
      <hr>
    </spacer>
    <body>
      <table border='1' frame='box' id='records'>
	<?php
	  $count = 1;
	  //Get the row data from the query
	  while($row = $result->fetch_assoc()){
	    echo '<tr>';
	    if ($count==1){
	      //Loop through all items in the row, create a new table entry in html for each one
	      foreach($row as $item => $value){
		//This checks if its a column from Subject  I want to display, if not it ignores it
		//if (!is_in_hs_records($item)){
		//  continue;
		//}
		echo '
		<th>
		    <ul class="colDropdown">
		        <li><a href="">'.htmlentities($item, ENT_COMPAT, 'UTF-8').'</a>
		            <ul>
		                <li><a href="oligo_plate_location.php?col='.$item.'">Ascending</a></li>
		                <li><a href="oligo_plate_location.php?col='.$item.'&sort=DESC">Descending</a></li>
		                <li><a href="">Search</a></li>
		            </ul>
		        </li>
		    </ul>
		</th>
		';
	      }
	      $count++;
	      echo '</tr><tr>';
	    }
	    foreach($row as $item => $value){
	      //This checks if its a column I want to display, if not it ignores it
	      #if (!is_in_hs_records($item)){
	      # continue;
	      #}
	      //Create links for InstCode
	      if ($item == 'InstCode'){
		$displayed_name = htmlentities($value, ENT_COMPAT, 'ISO-8859-15');
		echo '<td nowrap>'.createLink('../read_record/OligoPlateLocation',$value,$displayed_name).'</td>';
	      }
	      else{
		echo '<td nowrap>'.htmlentities($value, ENT_COMPAT, 'ISO-8859-15').'</td>';
	      }
	    }
	    echo'</tr>';
	  }
	?>
      </table>
    </body>
</html>