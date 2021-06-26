<?php

namespace Code;

use Code\Exceptions\MyCustonException;

Class Sum
{

  public function doSum($num1, $num2)
  {

    if($num2 > 10)
      //Palavra reservada "throw" trava a tela e exibi a exception lançada ... Pode usar o \Exception
     //throw new \InvalidArgumentException("Parâmetro 2 deve ser menor ou igual a 10");
      
      throw new MyCustomException("teste...");

    return $num1 + $num2;
    

  }
} 
