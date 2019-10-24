<?php
function sum($x,$y){
    return $s = $x+$y;
}

function diff($x,$y){
    return $d = $x-$y;
}

function multi($x,$y){
    return $m = $x*$y;
}

function quot($x,$y){
    if($y == 0){
        return $q = "На ноль делить нельзя";
    } else{
        return $q = round($x/$y,2);
    }
}

function mathOperation($arg1, $arg2, $operation){
    switch($operation){
        case "+":
            $a = sum($arg1,$arg2);
            break;
        case "-":
            $a = diff($arg1,$arg2);
            break;
        case "x":
            $a = multi($arg1,$arg2);
            break;
        case "/":
            $a = quot($arg1,$arg2);
            break;
    }
    return $a;
}

$res = mathOperation($_POST['number1'], $_POST['number2'], $_POST['operation']);
$res2 = mathOperation($_POST['number1_2'], $_POST['number2_2'], $_POST['operation2'][0]);