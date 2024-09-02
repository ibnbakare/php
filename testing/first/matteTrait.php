<?php

namespace first;

trait matteTrait
{
    public function makematte():void
    {
        echo static::class . " is making matte" . PHP_EOL;
    }
}