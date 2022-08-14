<?php

// xdebug_info();

$brands = [
    '1' => 'SINGER',
    '2' => 'WALTON',
    '3' => 'GOOGLE'
];

for ($i=0; $i < 5; $i++) { 
    echo "loop[" . $i+1 . "]: ";
    $rand_val = rand(1, 9);
    echo "[". $rand_val . "] = ";  
    echo $brands[$rand_val] ?? null; 
    echo "\n";
}

