<?php


namespace App;


class Application
{
    public function helloWorld($foo = 'bar')
    {
        return $foo;
    }

    public function sumValues(array $values = [0])
    {
        return array_sum($values);
    }
}
