<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
?>
<!DOCTYPE HTML>
<!--
    # Title: Company_insert<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Company insert form for genomics database<BR>
-->
<html>
  <div id="main">
    <head>
      <title>Company</title>
      <link rel="stylesheet" href="/css/genomics.css">
      </head>
      <spacer><h2>COMPANY</h2>
      <hr></spacer>
      <?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
      <div id="restofcontent">
	<spacer><BR></spacer>

<!--below ties this form to the com_insert helper-->
<form action="com_insert.php" method="post">
  <table>
    <tr> 
      <td>
	<LABEL for="Comp_num">Comp#: </LABEL>
	<INPUT type="text" id="Comp_num" name="Comp_num"><BR>
      </td>
    </tr>
    <tr> 
      <td colspan="2">
	<LABEL for="CompName">Name:</LABEL>
	<INPUT type="text" size ="60" id="CompName" name="CompName"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="CompPhone">Phone: </LABEL>
	<INPUT type="text" size ="30" id="CompPhone" name="CompPhone"><BR>
      </td>
    </tr>
    <tr> 
      <td>
	<LABEL for="CompFax">CompFax: </LABEL>
	<INPUT type="text" size ="30" id="CompFax" name="CompFax"><BR>
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
	<LABEL for="Comment">Comments: </LABEL>
	<TEXTAREA NAME=Comments name="Comments">
	</TEXTAREA></h1>
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
