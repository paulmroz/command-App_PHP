#! /usr/bin/env php

<?php

use Symfony\Component\Console\Application;
use Acme\SayHelloCommand;




require 'vendor/autoload.php';

$app = new Application('Learning Demo', '1.0');
//$app->add(new SayHelloCommand);
//$app->add(new Acme\RenderCommand);

try
{
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=commandTask', 'root', 'zxc');

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (Exception $exception)
{
    echo 'Could not connect to the  database';
    exit(1);
}

$dbAdapter = new \Acme\DatabaseAdapter($pdo);

$app->add(new Acme\ShowCommand($dbAdapter));
$app->add(new Acme\AddCommand($dbAdapter));
$app->add(new Acme\CompleteCommand($dbAdapter));


$app->run();