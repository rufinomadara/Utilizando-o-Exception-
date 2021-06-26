<?php

use Code\Sum;

require __DIR__ . '/vendor/autoload.php';

try{
  $sum = new Sum();
  print $sum->doSum(10, 10);
}catch(\Error $e){
  print $e->getMessage();
}
