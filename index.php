<?php
/*
* Prueba técnica Linio
* Autor: Fernando Gil Quintero
* email: tiranox85@hotmail.com
*/
require_once('IteratorClass.php');
// this class evaluates if a number is multiple of two numbers and sends a message acording to 3 conditions
// each number has a message and if a number is multiple of bothe it sends another Message
// this class only supports two numbers in seccond param right now
/****** PLUS you can evaluate any pair  of numbers in any range desired.******/
$iterator=new IteratorClass(100,[3,5]);
$values=$iterator->present();
// echo "<pre>";
// print_r($values);
foreach ($values as $value) {
  echo $value."</br>";
}
?>
