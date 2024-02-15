<?php

$student  = ['asif', "fardin", 'talha', 'sadi','toyabur'];
$searchElement = "sadi" ;

foreach ($student as $element) {
    if ($element == $searchElement) {
        echo "$element";

    }
}

?>