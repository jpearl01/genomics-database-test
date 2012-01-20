<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
?>
<!--
    # Title: Location<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Location for genomics database<BR>

    # Currently this form is tied into the Box table imported from Sybase, though that table should likely be modified.
    # The Freezer table imported in has no data other than table headers.  Relevant location data might include
    # Primary key of Location_num or Location_code, freezer_num, shelf_num, Box_num, Slot_num, Comments, person who placed item in location
    # and date
-->
<!DOCTYPE HTML>
<html>
  <div id="main">
    <head>
      <title>Location</title>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>

      <spacer><h2>LOCATION</h2>
      <hr></spacer>     
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>
	
	 <form action="loc_insert.php" method="post">
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
		<INPUT type="text" size="10" id="Box" name="Box"><BR>
	     </td>
	     <td>
		<LABEL for="Slot">Inst Slot: </LABEL>
		<INPUT type="text" size="10" id="Slot" name="Slot"><BR>
	     </td>
	   </tr>
	 </table>
	 <BR>
	 <table>
	   <tr>
	     <td>
	       <LABEL for="Comment">Comments: </LABEL>
	       <TEXTAREA NAME=Comments>
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

