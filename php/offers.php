<?php

  include 'db.php';
    
  $sql = 'SELECT * FROM offers';
  $result = $conn->query($sql);


  $dbdata = array();

  while ($row = $result->fetch_assoc())  {
    $dbdata[]=$row;
  }

  print_r($dbdata);

?>
