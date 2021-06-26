<?php

use Code\Sum;

require __DIR__ . '/vendor/autoload.php';

try{

  $sum = new Sum();
  print $sum->doSum(10, 20);

}catch(\Error $e){
  print $e->getMessage();
}catch(\Exception $e){
  print $e->getMessage();
}


