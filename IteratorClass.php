<?php
/*
* Prueba técnica Linio
* Autor: Fernando Gil Quintero
* email: tiranox85@hotmail.com
*/
require_once('LogicClass.php');
/**
 * Class to iterate numbers
 */
class IteratorClass extends LogicClass
{
  public $logic;

  function __construct($range,$array_evaluate)
  {
    $this->range=$range;
    $this->evaluate=$array_evaluate;
    $this->logic = new LogicClass($this->evaluate);
  }

  /*
  * Method to iterate numbers from 1 to a given number
  * receives null
  * returns array
  */
  public function iterate(){
    $temp=[];
    for ($i=1; $i <= $this->range; $i++) {
      $val=$this->is_multiple_of($i,$this->evaluate);
      $temp[$i]=$val;
    }
    return $temp;
  }

  /*
  * Method to return the array to the view
  * receives null
  * returns array
  */
  public function present(){
    $numbers=$this->iterate();
    $temp=[];
    foreach ($numbers as $number=>$eva_result) {
      $message=$this->message($number,$eva_result);
      $temp[$number]=$message;
    }
    return $temp;
  }
}

 ?>
