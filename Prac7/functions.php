<?php
function greetUser($name) {
    return "Hello, $name!";
}

function displayArray($array) {
    foreach($array as $item) {
        echo "<li>$item</li>";
    }
}
?>
