<?php

namespace first;

class coffeemaker{

    public static function makeCoffee():void{
        echo static::class . " is making coffee" . PHP_EOL;
    }
}