<?php
echo 'hou veel landen wil je tyoevoegen ';
$arrayName = array();
$getal = readline ();
for ($i=0; $i < $getal; $i++) {
  echo "welke land wil je toevoegen " . PHP_EOL;
  array_push($arrayName, readline()) ;
}
foreach($arrayName as $zin)
{
  echo $zin . PHP_EOL;
}
$today = DateTime();
echo $today;


 ?>
