<?php
$quantity = 20;
$arr; 
$min = 1;
$max = 10;

for($i=0; $i < $quantity; $i++)
{
   $arr[$i] = rand($min, $max);
}

for($i = 0; $i < $quantity; $i++)
{
  echo $arr[$i] . " ";

  $arrRepet[] = $arr[$i];
  
}

$arrR = array_count_values($arrRepet);

foreach($arrR as $key => $value) {
  if($value > 1) {
    
    echo '</br> valor repetido: '.$key. ' ele se repete x '.$value;
  }
}
