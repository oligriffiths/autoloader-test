<?php
/**
 * Created by PhpStorm.
 * User: oli
 * Date: 6/29/15
 * Time: 11:21 AM
 */

@mkdir('app');

for($i = 0; $i < 10000; $i++){

    $class = "<?php\n\nnamespace App;\n\nclass Test$i\n{\npublic function __construct(){}\n}\n";

    file_put_contents(__DIR__.'/app/Test'.$i.'.php', $class);

}