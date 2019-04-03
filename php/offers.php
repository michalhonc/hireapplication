<?php

$databaze = 'ete32e_1819zs_08';
$uzivatel = 'ete32e_1819zs_08';
$heslo = 'mVRPcy';

if (!($cnn = mysqli_connect('localhost', $uzivatel, $heslo)))
	die('Nepodarilo se pripojit k databazovemu serveru.');
if (!mysqli_select_db($cnn, $databaze))
  die('Nepodarilo se otevrit databazi.');
  

$sql = "SELECT * FROM offers";
$result = $conn->query($sql);

$result = $conn->query($sql);

$dbdata = array();

while ($row = $result->fetch_assoc())  {
  $dbdata[]=$row;
}

echo json_encode($dbdata);

?>