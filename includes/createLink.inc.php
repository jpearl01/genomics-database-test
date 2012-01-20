<?php
function createLink($table = 'HSLog', $record = '32691', $displayed_name = '32691'){
  return '<a href="'.$table.'.php?record='.$record.'">'.$displayed_name.'</a>';
}