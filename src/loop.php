<?php 

$num = 25;

for ($i=$num, $factorial=1; $i>1; $i--) { 
    $factorial *= $i;
}
Printf("Factorial of %d is %d", $num, $factorial);
echo "\n";

$defaultVal = 24;
$userVal;

$appVal = $userVal ?? $defaultVal;

var_dump($appVal);