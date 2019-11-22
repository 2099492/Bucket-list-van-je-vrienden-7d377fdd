<?php
echo "Hoeveel vrienden zal ik vragen om hun droom?" . PHP_EOL;
$input1 = readline();
$a = array();

if ($input1 != is_numeric($input1)) {
  echo $input1 . "is geen getal";
  exit;
}
for ($i=0; $i <$input1 ; $i++) {
  echo " Wat is jouw naam? ";
   $a[$input2 = readline()] = $input3 = readline( " Wat is jou droom ");
}


foreach ($a as $key => $value) {
  print($key . " heeft dit als droom: ". $value . PHP_EOL);
}
 ?>
