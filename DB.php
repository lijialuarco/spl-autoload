<?php

class DB
{
    public function __construct()
    {
        echo 'I`m DB'."\n";
    }


    public static function say()
    {
        echo 'what`s you name?'."\n";
    }

    public function talk($no)
    {
        echo 'Hi,How are you.'.$no."\n";
    }
}
