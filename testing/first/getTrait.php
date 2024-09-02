<?php

namespace first;

trait getTrait
{
    public function makecapp()
    {
        echo static::class . " is making capp" . PHP_EOL;
    }
}