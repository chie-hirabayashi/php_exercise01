<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$operator = $_GET['operator'];

switch ($operator) {
    case 'addition':
        $answer = $num1 + $num2;
        echo $num1. ' + '. $num2. ' = '.$answer; 
        break;
    case 'subtraction':
        $answer = $num1 - $num2;
        echo $num1. ' - '. $num2. ' = '.$answer; 
        break;
    case 'multiplication':
        $answer = $num1 * $num2;
        echo $num1. ' * '. $num2. ' = '.$answer; 
        break;
    case 'division':
        $answer = $num1 / $num2;
        echo $num1. ' / '. $num2. ' = '.round($answer,2); 
        break;
    default:
        echo '正しい演算子を指定して下さい';
        break;
    }


// http://localhost/06/mytest3.php?num1=2&num2=2&operator=additon

