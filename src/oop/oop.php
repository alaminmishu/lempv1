<?php

class Song {
    public $fruits = [
        'mango',
        'bannana',
        'apple'
    ];
    function __construct($artist)
    {
        // $this->artist = $artist;
        // echo "Coffee Houese Song is sung by " . $this->artist;
    }
}

$bangla = new Song("Manna Dey");

var_dump($bangla->fruits);
echo $bangla->fruits;
print_r($bangla->fruits);

print_r($bangla);
echo "\n";