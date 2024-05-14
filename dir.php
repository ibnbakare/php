<?php

$dir = scandir(__DIR__);
var_dump($dir);
echo "</br>";
echo "</br>";   
var_dump(is_file($dir[3]));

echo "</br>";
echo "</br>";
$lan = ["a"=>"java","b"=>"PHP","c"=>"pyrhon"];

foreach($lan as $val){
    echo $val;
    echo "</br>";

}

foreach($lan as $key => $val){
    echo "{$key} => {$val}";
    echo "</br>";

}

// to create a new file
mkdir("new");
// to remove dir
rmdir("new");

// to checck if file exits
if(file_exists("new")){
    echo filesize("new");

    // to put new doc inside file
    file_put_contents("new","hello world");
}