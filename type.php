
<?php
$score = 95;
if ($score >=70){
    echo "A";
    if($score >94){
        echo "+";
    }
}elseif($score >=65){
    echo "B";
}else{
    echo "F";
};

$result = $score >= 30 ? "You Passed" : "You Failed";
// echo "</br>";
// echo $result;  

?>

<?php

 $completed = true;
 $price = 23.4;
 $float = 1.4;
 $string = "hello";

 echo $completed . "<br/>";
 echo $price . "<br />";
 echo $float . '<br />';
 echo $string ."</br />";

 echo gettype($completed). "<br />";

 function sum($a,$b){
    return $a + $b;
 }

 echo sum(2,3);


//  heredoc

$x= 4;
$y = 3;

$text = <<<TEXT
i want 
to 
say
$x
TEXT;

// echo $text;
// for new line
// echo nl2br($text);

// nowDoc
// not used for pr
$x= 4;
$y = 3;

$text = <<<'TEXT'
i want 
to 
say
$x
TEXT;

// echo $text;
// for new line
echo nl2br($text);