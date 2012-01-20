<?php
  //Essentially we need a function that returns true if the item passed to it
  //is not among the columns Mary and I (josh) decided to remove from the traditional
  //HS log view.

function is_in_hs_records($item){
  $removed = array('CollectBy','TissRef','SubjPrefix','SubjSuffix','SubjDegree','CoPrefix','CoSuffix','CoDegree','CoInstCode','InstCode','InstCity','InstState','InstCountry','PtCode','Stu#','KbdDate','InKbd','File#','SNP','Freezer','Rack','Box','Slot','UpdateUser','UpdateDate','BSNum','InstZipCode');
  if (in_array($item,$removed)){
    return FALSE;
  }
  else{
    return TRUE;
  }
}