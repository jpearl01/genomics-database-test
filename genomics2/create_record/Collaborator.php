<!DOCTYPE HTML>
<!--
    # Title: Collaborator<BR>
    # Author: Matthew Schultz<BR>
    # Date: November 2011 <BR>
    # Descripition: Collaborator input form for genomics database<BR>
-->

<?php
include '/var/www/html/genomics/includes/createLink.inc.php';
require_once '/var/www/html/genomics/includes/connection.inc.php'; 
$conn = dbConnect('josh','cgs-1953-asri');

if (!isset($_GET['record'])){
  $sql = "SELECT * FROM Collaborator WHERE CollabCode = 'AFR'";
}
elseif (isset($_GET['record'])){
  $sql = "SELECT * FROM Collaborator WHERE CollabCode = \"".$_GET['record']."\"";
}
$result = $conn->query($sql);

if(!isset($result)){ 
  die(mysqli_error()); 
}
$numRows = $result->num_rows;
$row = $result->fetch_assoc();
?>
`
<html>  
<div id="main">
  <head>
  <title>Collaborator</title>
  <link rel="stylesheet" href="/css/genomics.css">
  </head>

  <spacer><h2>COLLABORATOR</h2>
  <hr></spacer>
      
<?php include '/var/www/html/genomics/includes/genomics_menu.inc.php'; ?>
<div id="restofcontent"
  <spacer><BR></spacer>

  <!--below ties this form to the col_insert helper-->
  <form action="col_insert.php" method="post">
    <table>
      <tr>
	<td>
	  <LABEL for="CollabCode">CollabCode:</LABEL>
	  <INPUT type="text" size="10" id="CollabCode" name="CollabCode"><BR>
	</td>
	<td>
	  <LABEL for="UpdateDate">UpdateDate: </LABEL>
	  <INPUT type="text"  id="UpdateDate" name="UpdateDate"><BR>
	</td>
      </tr>
      <tr>
	<td>
	  <LABEL for="InstCode">InstCode:</LABEL>
	  <INPUT type="text" size="10" id="InstCode" name="InstCode"><BR>
	</td>
	<td>
	  <LABEL for="In Kbd">In Kbd: </LABEL>
	  <INPUT type="text" id="InKbd" name="InKbd"><BR>
	</td>
	<td>
	  <LABEL for="UpdateUser">UpdateUser: </LABEL>
	  <INPUT type="text" id="UpdateUser" name="UpdateUser"><BR>
	</td>
      </tr>
    </table>
    <BR>
    <table>
      <td>
	<LABEL for="Prefix">Prefix:</LABEL>
	<INPUT type="text" size ="5" id="Prefix" name="Prefix"><BR>
      </td>
      <td>
	<LABEL for="FirstName">First:</LABEL>
	<INPUT type="text" size="13" id="FirstName" name="FirstName"><BR>
      </td>
      <td>
	<LABEL for="MiddleName">Middle:</LABEL>
	<INPUT type="text" size="13" id="MiddleName" name="MiddleName"><BR>
      </td>
      <td>
      <td>
	<LABEL for="LastName">Last:</LABEL>
	<INPUT type="text" size="13" id="LastName" name="LastName"><BR>
      </td>
      <td>
      <td>
	<LABEL for="Suffix">Suffix:</LABEL>
	<INPUT type="text" size="5" id="Suffix" name="Suffix"><BR>
      </td>
      <td>
    </table>
    <BR >
    <table>
      <tr> 
	<td>
	  <LABEL for="Specialty">Specialty: </LABEL>
	  <INPUT type="text" id="Specialty" name="Specialty"><BR>
	</td>
      </tr>
      <tr> 
	<td>
	  <LABEL for="Title">Title:</LABEL>
	  <INPUT type="text" size ="40" id="Title" name="Title"><BR>
	</td>
      </tr>
      <tr> 
	<td>
	  <LABEL for="Dept">Dept: </LABEL>
	  <INPUT type="text" size ="60" id="Dept" name="Dept"><BR>
	</td>
      </tr>
      <tr> 
	<td>
	  <LABEL for="EMail">E-mail: </LABEL>
	  <INPUT type="text" size ="60" id="EMail" name="EMail"><BR>
	</td>
      </tr>
      <tr> 
	<td>
	  <LABEL for="WebSite">WebSite: </LABEL>
	  <INPUT type="text" size ="60" id="WebSite" name="WebSite"><BR>
	</td>
      </tr>
    </table>
    <BR>
    <table>
      <tr> 
	<td>
	  <LABEL for="Addr1">Address 1: </LABEL>
	  <INPUT type="text" size ="40" id="Addr1" name="Addr1"><BR>
	</td>
      </tr>
      <tr> 
	<td>
	  <LABEL for="Addr2">Address 2: </LABEL>
	  <INPUT type="text" size ="40" id="Addr2" name="Addr2"><BR>
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
	  <LABEL for="EvePhone">EveningPhone: </LABEL>
	  <INPUT type="text" size ="13" id="EvePhone" name="EvePhone"><BR>
	</td>
	<td>
	  <LABEL for="Fax">Fax: </LABEL>
	  <INPUT type="text" size ="13" id="Fax" name="Fax" ><BR>
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

