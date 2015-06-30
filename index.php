<?php
/**
 * Created by PhpStorm.
 * User: oli
 * Date: 6/29/15
 * Time: 11:24 AM
 */

require 'vendor/autoload.php';

$max = (int) (isset($argv[1]) ? $argv[1] : 10000);

$time = microtime(1);
for($i = 0; $i < $max; $i++){

    $class = "App\\Test$i";

    new $class;
}

var_dump(microtime(1) - $time);