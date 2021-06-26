<?php

namespace Code;

Class Sum{

  public function doSum($num1, $num2){

    if($num2 > 10){
      //Palavra reservada "throw" trava a tela e exibi a exception lançada ... Pode usar o \Exception
      throw new \InvalidArgumentException("Parâmetro 2 deve ser menor ou igual a 10");
      

      return $num1 + $num2;
    }

  }

}