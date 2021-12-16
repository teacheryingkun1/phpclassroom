<?php

  $number1 = $_GET['num1'];
  $number2 = $_GET['num2'];
  echo "ผลบวกของ a และ b คือ : ";
  echo a($number1,$number2);

  function a($x,$y){
    return $x+$y;
  }

?>
