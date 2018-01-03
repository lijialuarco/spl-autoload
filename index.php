<?php

$db = new DB();
DB::say();
DB::talk(1);
$db->talk(2);

function __autoload($className)
{
    require $className.'.php';
}
