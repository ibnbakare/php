<?php

namespace first;

use first\Vehicle;

abstract class car implements Vehicle{


    abstract public function getMake();

    abstract public function getModel();
}