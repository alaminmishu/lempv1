<?php 
require_once '../db.php';
require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

$sql = $conn->prepare("UPDATE Persons SET FirstName ='Jhon' WHERE LastName = ?");

$results = $sql->execute(array('Chan'));
if (isset($results)) {
    echo 'Record has been updated';
}

// $results = $sql->fetchAll();

// var_dump($results);

/* foreach ($results as $result) {
    // print($result['FirstName'] . " " . $result['LastName']) . "\n";
    // print(count($result));
    // var_dump($result);
    for ($i=0; $i < (count($result)/2); $i++) { 
        print($result[$i]) . "\t";
    }
    echo "\n";
    // print($result[1]) . "\n";
} */

for ($i=0; $i < 3; $i++) { 
    // generate data by calling methods
    // echo $faker->name() . "\t" . $faker->email() . "\t" . $faker->date() . "\n";
}
