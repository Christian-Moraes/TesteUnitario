<?php

function say_hello($name) {
    
    echo "$name\n";

    if($name){
        return "Hello, " . $name . "!";
    }
    return "Hello there!";
}
?>