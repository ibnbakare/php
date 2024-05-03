<?php

if(isset($_GET['name'])){
    echo "Hello {$_GET['name']}";

}
else{
    echo "Name doesnt exit";
}
?>