<?php
/*
* Prueba técnica Linio
* Autor: Fernando Gil Quintero
* email: tiranox85@hotmail.com
*/
require_once('MandatoryInterface.php');
/**
 * Class to evaluate numbers
 */
class LogicClass extends LogicAbstract
{
  public $evaluate;
  public function __construct($evaluate){
    $this->evaluate=$evaluate;
  }
  /**
   * Method to evaluate if the number has one or more coincidences in the array of multiples
   * receives $number (int), $evaluate (array)
   * returns array
   */
  public function is_multiple_of($number,$evaluate){
    $temp_multiple=[];
    $temp_multiple['eva']=[]; //this is just to avoid warnings!
    foreach ($evaluate as $key=>$eva) {
      //evaluate if number is multiple of
      $module=$this->multiple($number,$eva);
      //this is the only if :)
      if($module == 0){
        $temp_multiple['eva'][$eva]=$eva;
      }
    }
    return $temp_multiple;
  }

  /*
  * Method to evaluate if number is multiple of
  * receives $number (int), $eva (Int)
  * returns Int
  */
  public function multiple($number,$eva){
    $module=($number%$eva);
    return $module;
  }

  /*
  * Method to evaluate which test is going to be printed
  * receives $number (int), $eva_result (array), $eva (array)
  * returns $array
  */
  public function message($number,$eva_result){
    //this is a sum of the values found in each number in the multiple handle
    $sum=$this->sum_array($eva_result['eva']);
    //this value is the sum of the two evaluate values
    $sum_both=$this->sum_array($this->evaluate);
    //This is the best way i found to overcome the requested task
    $resp=[0=>$number,$this->evaluate[0]=>'Linio',$this->evaluate[1]=>"IT",$sum_both=>"Linianos"];
    return $resp[$sum];
  }

  /*
  * Method to sum values of array
  * receives $array
  * returns Int
  */
  public function sum_array($array){
    $sum=0;
    foreach ($array as $num) {
      $sum+=$num;
    }
    return $sum;
  }
}
?>
