<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
?>
<!DOCTYPE HTML>
<!--
    # Title: Education<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Education base table for genomics database<BR>
-->
<html>
  <div id="main">
    <head>
      <title>Education TESTING GIT TRNASFER!!!</title>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>
      <spacer><h2>EDUCATION</h2>
      <hr></spacer>
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>

<form action="edu_insert.php" method="post">
<table>
    <tr> 
      <td>
	<LABEL for="EduCode">EduCode: </LABEL>
	<INPUT type="text" id="EduCode" name="EduCode"><BR>
      </td>
    </tr>
    <tr> 
      <td colspan="2">
	<LABEL for="Description">Description:</LABEL>
	<INPUT type="text" size ="60" id="Description" name="Description"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="InKbd">InKbd: </LABEL>
	<INPUT type="text" size ="20" id="Inkbd" name="InKbd"><BR>
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
