<?php 

try {
    echo 1/0 ;
} catch (\Throwable $e) {
    echo $e->getMessage();
}