<?php
function dbConnect($user, $pwd, $connectionType = 'mysqli'){
  $host = 'localhost';
  $db = 'genomics_test';
  //Connect as the current user.
  if ($connectionType == 'mysqli'){
    $conn = new mysqli($host, $user, $pwd, $db);
    if($conn->connect_error){
      die('Cannot open the database');
    }
    return $conn;
  }
  else {
    return "The connection is effed";
  }
}
