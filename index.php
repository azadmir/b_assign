<?php

function foo($name){
        return 'Hello ' . htmlspecialchars($name) . ' World!';
}

echo foo($_POST["name"]);

?>
