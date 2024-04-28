


<!-- 
    const can be written in two forms define function or const 
    keyword
    const wont work in condictinal statements but define will
 -->

<?php
define("NAME",23);

echo NAME;


// dynamic const

// $paid  = "PAID";

// define("STATUS_" . $paid, $paid);

// echo STATUS_PAID ."\n";

// echo PHP_VERSION;
// echo __FILE__ ."/". NAME;


// variable variable
/**
 * the variable with the double $$ takes the value of the intial value as name of new variable
 */
$foo = "ridhwan";

$$foo = "bakare";

// echo $foo, $ridhwan
echo $$foo



?>