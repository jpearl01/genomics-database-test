<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
?>
<!DOCTYPE HTML>
<!--
    # Title: OligoPlateLocation<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Oligo_Plate_Location input form for genomics database<BR>
-->

<html>
  <div id="main">
    <head>
      <title>OligoPlateLocation</title>
      <link rel="stylesheet" href="/css/genomics.css">
    </head>
    <spacer><h2>OligoPlateLocation</h2>
      <hr></spacer>
    <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
    <div id="restofcontent">
      <spacer><BR></spacer>
      <!--below ties the form to oligo_insert-->
      <form action="oligo_insert.php" method="post">
	<table>
	  <tr> 
	    <td colspan="2">
	      <LABEL for="PlateName">PlateName: </LABEL>
	      <INPUT type="text" size="40" id="PlateName" name="PlateName"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="StudyCode">StudyCode:</LABEL>
	      <INPUT type="text" id="StudyCode" name="StudyCode"><BR>
	    </td>
	    <td>
	      <LABEL for="OrderPlateNum">OrderPlate#:</LABEL>
	      <INPUT type="text" id="OrderPlateNum" name="OrderPlateNum"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="Freezer">Freezer:</LABEL>
	      <INPUT type="text" id="Freezer" name="Freezer"><BR>
	    </td>
	    <td>
	      <LABEL for="Comp_num">Company#:</LABEL>
	      <INPUT type="text" id="Comp_num" name="Comp_num"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="Rack_num">Rack#:</LABEL>
	      <INPUT type="text" id="Rack_num" name="Rack_num"><BR>
	    </td>
	    <td>
	      <LABEL for="OrderNum">OrderNum:</LABEL>
	      <INPUT type="text" id="OrderNum" name="OrderNum" ><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="Slot_num">Slot#:</LABEL>
	      <INPUT type="text" id="Slot_num" name="Slot_num"><BR>
	    </td>
	    <td>
	      <LABEL for="Status">Status:</LABEL>
	      <INPUT type="text" id="Status" name="Status"><BR>
	    </td>
	  </tr>   
	</table>
	<BR>
	<table>
	  <tr> 
	    <td>
	      <LABEL for="InKbd">InKbd: </LABEL>
	      <INPUT type="text" size ="20" id="Inkbd" name="InKbd"><BR>
	    </td>
	    <td>
	      <LABEL for="UpdateUser">UpdateUser: </LABEL>
	      <INPUT type="text" size ="20" id="UpdateUser" name="UpdateUser"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="KbdDate">KbdDate: </LABEL>
	      <INPUT type="text" size ="20" id="KbdDate" name="KbdDate"><BR>
	    </td>
	    <td>
	      <LABEL for="UpdateDate">UpdateDate: </LABEL>
	      <INPUT type="text" size ="20" id="UpdateDate" name="UpdateDate"><BR>
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
