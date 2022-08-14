<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

date_default_timezone_set('Asia/Dhaka');

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('php.log', Level::Info));

for ($i=0; $i < 7; $i++) { 
    // add records to the log
    $log->warning('Foo');
    $log->error('Bar' . $i);
    $log->info('Adding a new user', ['username' => 'Seldaek']);
}

// add records to the log

/* $log->warning('Foo');
$log->error('Bar'); */