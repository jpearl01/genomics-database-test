<!DOCTYPE html>
<html>
  <link rel="stylesheet" href="/css/genomics.css"></link>
  <link rel="stylesheet" href="/css/search.css"></link>
  <body>
    <form id="search" method="post" action="">
      
      <head>
	<title>Search HS Records</title>
      </head>
      <h2><?php echo "Search the HS Records Table"?></h2>
      <hr />
      <label for="search_column" class="label">Search Column:</label>
      <select name="search_column" class="search_column_dropdown">
	<option value="HS_num"         <?php  if($_GET['column']=='HS_num'){ echo 'selected="yes"';} ?> >HS_num</option>
	<option value="StudyCode"      <?php  if($_GET['column']=='StudyCode'){ echo 'selected="yes"';} ?> >StudyCode</option>
	<option value="SpeciesCode"    <?php  if($_GET['column']=='SpeciesCode'){ echo 'selected="yes"';} ?> >SpeciesCode</option>
	<option value="TissCode"       <?php  if($_GET['column']=='TissCode'){ echo 'selected="yes"';} ?> >TissCode</option>
	<option value="CollectDate"    <?php  if($_GET['column']=='CollectDate'){ echo 'selected="yes"';} ?> >CollectDate</option>
	<option value="RecdDate"       <?php  if($_GET['column']=='RecdDate'){ echo 'selected="yes"';} ?> >RecdDate</option>
	<option value="Subj_num"       <?php  if($_GET['column']=='Subj_num'){ echo 'selected="yes"';} ?> >Subj_num</option>
	<option value="SubjFirstName"  <?php  if($_GET['column']=='SubjFirstName'){ echo 'selected="yes"';} ?> >SubjFirstName</option>
	<option value="SubjMiddleName" <?php  if($_GET['column']=='SubjMiddleName'){ echo 'selected="yes"';} ?> >SubjMiddleName</option>
	<option value="SubjLastName    <?php  if($_GET['column']=='SubjLastName'){ echo 'selected="yes"';} ?> ">SubjLastName</option>
	<option value="SubjSex"        <?php  if($_GET['column']=='SubjSex'){ echo 'selected="yes"';} ?> >SubjSex</option>
	<option value="SubjDOB"        <?php  if($_GET['column']=='SubjDOB'){ echo 'selected="yes"';} ?> >SubjDOB</option>
	<option value="SubjSSN"        <?php  if($_GET['column']=='SubjSSN'){ echo 'selected="yes"';} ?> >SubjSSN</option>
	<option value="CollabCode"     <?php  if($_GET['column']=='CollabCode'){ echo 'selected="yes"';} ?> >CollabCode</option>
	<option value="CoFirstName"    <?php  if($_GET['column']=='CoFirstName'){ echo 'selected="yes"';} ?> >CoFirstName</option>
	<option value="CoLastName"     <?php  if($_GET['column']=='CoLastName'){ echo 'selected="yes"';} ?> >CoLastName</option>
	<option value="InstName"       <?php  if($_GET['column']=='InstName'){ echo 'selected="yes"';} ?> >InstName</option>
	<option value="InstPhone"      <?php  if($_GET['column']=='InstPhone'){ echo 'selected="yes"';} ?> >InstPhone</option>
	<option value="NA_num"         <?php  if($_GET['column']=='NA_num'){ echo 'selected="yes"';} ?> >NA_num</option>
	<option value="Comments"       <?php  if($_GET['column']=='Comments'){ echo 'selected="yes"';} ?> >Comments</option>
	<option value="KdbDate"        <?php  if($_GET['column']=='KdbDate'){ echo 'selected="yes"';} ?> >When Record Was Entered</option>
	<option value="InKdb"          <?php  if($_GET['column']=='InKdb'){ echo 'selected="yes"';} ?> >Who Entered the Record</option>
	<!--      <option value=""></option>
	     <option value=""></option>
	     <option value=""></option>
	     <option value=""></option>
	-->
	</select> <br />
	<label for="search_box" class="label">Search for:</label>
	<textarea name="search_box" class="search_box"></textarea>
	<br />
	<input type="submit" name="submitbutton" id="submitbutton" value="Search" />
    </form>

  </body>

</html>
