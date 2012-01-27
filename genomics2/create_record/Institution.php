<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
?>
<!DOCTYPE HTML>
<!--
    # Title: Institution<BR>
    # Author: Matthew Schultz<BR>
    # Date: January 2012 <BR>
    # Descripition: Institution input form for genomics database<BR>
-->
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
	<!--below ties the form to inst_insert helper-->
        <form action="inst_insert.php" method="post">
          <table>
            <tr>
              <td>
                <LABEL for="InstCode">InstCode:</LABEL>
		<INPUT type="text" size="10" id="InstCode" name="InstCode"><BR>
	      </td>
	      <td>
		<LABEL for="KbdDate">Kbd Date: </LABEL>
		<INPUT type="text" size="10" id="KbdDate" name="KbdDate"><BR>
	      </td>
	    <tr>
	      <td>
		<LABEL for="InstFull">InstFull:</LABEL>
	  	<INPUT type="text" size="50" id="InstFull" name="InstFull"><BR>
	      </td>
	      <td>
		<LABEL for="InKbd">In Kbd: </LABEL>
		<INPUT type="text" size="10" id="InKbd" name="inKbd"><BR>
	      </td>
	    </tr>
	    <tr>
	      <td>
		<LABEL for="InstShort">InstShort:</LABEL>
	  	<INPUT type="text" size="50" id="InstShort" name="InstShort"><BR>
	      </td>
	      <td>
		<LABEL for="UpdateDate">UpdateDate: </LABEL>
		<INPUT type="text" size="20" id="UpdateDate" name="UpdateDate"><BR>
	      </td>
	    </tr>
	    <tr>
	      <td>
		<LABEL for="InstSort">InstSort:</LABEL>
	  	<INPUT type="text" size="50" id="InstSort" name="InstSort"><BR>
	      </td>
	      <td>
		<LABEL for="UpdateUser">UpdateUser: </LABEL>
		<INPUT type="text" size="20" id="UpdateUser" name="UpdateUser"><BR>
	      </td>
	    </tr>
	  </table>
	  <BR>
	  <table>
	      <tr> 
	      <td>
	 	 <LABEL for="EMail">E-Mail: </LABEL>
	 	 <INPUT type="text" size ="40" id="EMail" name="EMail"><BR>
	      </td>
	      </tr>
	      <tr> 
	      <td>
		 <LABEL for="Website">Website: </LABEL>
		 <INPUT type="text" size ="40" id="Website" name="Website"><BR>
	      </td>
	      </tr>
	</table>
	<BR>
	<table>
	  <tr> 
	    <td>
	      <LABEL for="Addr1">Address 1: </LABEL>
	      <INPUT type="text" size ="40" id="Addr1" name="addr1"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="Addr2">Address 2: </LABEL>
	      <INPUT type="text" size ="40" id="Addr2" name="addr2"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="City">City: </LABEL>
	      <INPUT type="text" size ="20" id="City" name="City"><BR>
	    </td>
	    <td>
	      <LABEL for="State">State: </LABEL>
	      <INPUT type="text" size ="10" id="State" name="State"><BR>
	    </td>
	    <td>
	      <LABEL for="ZipCode">Zip: </LABEL>
	      <INPUT type="text" size ="13" id="ZipCode" name="ZipCode"><BR>
	    </td>
	  </tr>
	  <tr>
	    <td>
	      <LABEL for="Country">Country: </LABEL>
	      <INPUT type="text" size ="20" id="Country" name="Country"><BR>
	    </td>
	  </tr>
	  <tr> 
	    <td>
	      <LABEL for="DayPhone">DayPhone: </LABEL>
	      <INPUT type="text" size ="13" id="DayPhone" name="DayPhone"><BR>
	    </td>
	    <td>
	      <LABEL for="EvePhone">EvePhone: </LABEL>
	      <INPUT type="text" size ="13" id="EvePhone" name="EvePhone"><BR>
	    </td>
	    <td>
	      <LABEL for="Fax">Fax: </LABEL>
	      <INPUT type="text" size ="13" id="Fax" name="Fax"><BR>
	    </td>
	  </tr>
	</table>
	<BR>
	<table>
	  <tr>
	    <td>
	      <LABEL for="Comment">Comments: </LABEL>
	      <TEXTAREA NAME=Comments name="Comments">
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

