<link rel="stylesheet" href="/css/genomics_menu_top.css">

<?php
$currentFile = $_SERVER["PHP_SELF"];
$parts = Explode('/', $currentFile);
$file = $parts[count($parts) - 1];
?>

<ul class="menu">
  <li><a href="#">File</a>
    <ul>
      <li><a href="">Save</a></li>
      <li><a href="">Quit</a></li>
    </ul>
  </li>

  <li><a href="#">Edit</a>
    <ul>
      <li><a href=<?php echo "/genomics/genomics2/create_record/$file".$_GET['record']?>>Create</a></li>
      <li><a href=<?php echo "/genomics/genomics2/update_record/$file"?>>Update</a></li>
      <li><a href=<?php echo "/genomics/genomics2/delete_record/$file"?>>Delete</a></li>
    </ul>
  </li>

  <li><a href="#">Logs</a>
   <ul>
    <li><a href="">BacDNA</a></li>
    <li><a href="">BacRNA Log</a></li>
    <li><a href="">BacterialStock Log</a></li>
    <li><a href="">Cgs Book</a></li>
    <li><a href="">Gel</a></li>
    <li><a href="">HPV Type</a></li>
    <li><a href="">HS Log</a></li>
    <li><a href="">Marker</a></li>
    <li><a href="">RFW MicroArray</a></li>
    <li><a href="">Nucleicacid</a></li>
    <li><a href="">Oligo</a></li>
    <li><a href="">Oligos In Plate</a></li>
    <li><a href="">Load Oligo Plate</a></li>
    <li><a href="">Panel</a></li>
    <li><a href="">Pedigree</a></li>
    <li><a href="">Pfizer</a></li>
    <li><a href="">Specimen</a></li>
    <li><a href="">Strain Construct</a></li>
    <li><a href="">Beckman/NanoDrop</a></li>
    </ul>
  </li>

  <li><a href="#">Base Tables</a>
    <ul>
    <li><a href="/genomics/genomics2/read_record/Collaborator.php">Collaborator</a></li>
    <li><a href="/genomics/genomics2/read_record/Company.php">Company</a></li>
    <li><a href="/genomics/genomics2/read_record/Education.php">Education</a></li>
    <li><a href="/genomics/genomics2/read_record/Institution.php">Institution</a></li>
    <li><a href="/genomics/genomics2/read_record/Location.php">Location</a></li>
    <li><a href="/genomics/genomics2/read_record/Organism.php">Organism</a></li>
    <li><a href="/genomics/genomics2/read_record/OligoPlateLocation.php">Oligo Plate Location</a></li>
    <li><a href="/genomics/genomics2/read_record/Species.php">Species</a></li>
    <li><a href="/genomics/genomics2/read_record/Study.php">Study</a></li>
    <li><a href="/genomics/genomics2/read_record/Subject.php">Subject</a></li>
    <li><a href="/genomics/genomics2/read_record/TissueType.php">Tissue Type</a></li>
    </ul>
  </li>

  <!-- Entries below removed from the base tables for the time being as their purpose is questionable for now will add them as needed

      <li><a href="">Box</a></li>
      <li><a href="">Enzyme</a></li>
      <li><a href="">Freezer</a></li>
      <li><a href="">Gene</a></li>
      <li><a href="">Library Type</a></li>
      <li><a href="">Load BacRNAlog</a></li>
      <li><a href="">Load Oligo</a></li>
      <li><a href="">Load StranConstruct</a></li>
      <li><a href="">Oligo Label</a></li>
      <li><a href="">Oligo Purpose</a></li>
      <li><a href="">Oligo Type</a></li>
      <li><a href="">ProgenySubject</a></li>
      <li><a href="">Staff</a></li>
       <a href="">Study Set</a></li>

  -->

  <li>
   <a href="/genomics/genomics2/view_records/hs_records.php">All HS Records</a>
  </li>
</ul>

<div id="restofcontent">

</div>
