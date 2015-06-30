<?php
/**
 * Created by PhpStorm.
 * User: oli
 * Date: 6/29/15
 * Time: 11:24 AM
 */

require 'vendor/autoload.php';

$time = microtime(1);
for($i = 0; $i < 10000; $i++){

    $class = "App\\Test$i";

    new $class;
}

var_dump(microtime(1) - $time);