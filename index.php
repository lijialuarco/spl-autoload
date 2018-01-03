<?php

// DB::say();
// DB::talk(1);
// $db->talk(2);

// function __autoload($className)
// {
//     require $className.'.php';
// }


function baseLoad($className)
{
    echo 'base';
    $filename = $className.'.php';
    if (is_file($filename)) {
        require $filename;
    }
}


function LibLoad($className)
{
    echo 'lib';
    $filename = 'lib/'.$className.'.php';
    if (is_file($filename)) {
        require $filename;
    }
}

function AppLoad($className)
{
    echo 'app';
    $filename = 'app/'.$className.'.php';
    if (is_file($filename)) {
        require $filename;
    }
}
// spl_autoload_register('baseLoad');
spl_autoload_register('baseLoad');
spl_autoload_register('LibLoad');
spl_autoload_register('AppLoad');
var_dump(spl_autoload_functions());

$app = new App();
$lib = new Lib();
$db = new DB();
