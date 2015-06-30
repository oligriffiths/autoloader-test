<?php
/**
 * Created by PhpStorm.
 * User: oli
 * Date: 6/29/15
 * Time: 11:21 AM
 */

@mkdir('app');

$max = (int) (isset($argv[1]) ? $argv[1] : 10000);

for($i = 0; $i < $max; $i++){

    $class = "<?php\n\nnamespace App;\n\nclass Test$i\n{\npublic function __construct(){}\n}\n";

    file_put_contents(__DIR__.'/app/Test'.$i.'.php', $class);

}