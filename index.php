<?php
/**
 * Created by PhpStorm.
 * User: Ali Irawan
 * Date: 3/31/16
 * Time: 11:47 PM
 */

require __DIR__ . '/vendor/autoload.php';

use Aliirawan\Sample\Greetings;

$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler('app.log', Monolog\Logger::WARNING));
$log->addWarning('Foo');

echo "Using Monolog";

echo Greetings::sayHello();