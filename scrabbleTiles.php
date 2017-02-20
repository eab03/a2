<?php

// require that this file access tools.php
require('tools.php');

// create an array
$scrabbleTiles = [
    'a' => 1,
    'b' => 3,
    'c' => 3,
    'd' => 2,
    'e' => 1,
    'f' => 4,
    'g' => 2,
    'h' => 4,
    'i' => 1,
    'j' => 8,
    'k' => 5,
    'l' => 1,
    'm' => 3,
    'n' => 1,
    'o' => 1,
    'p' => 3,
    'q' => 10,
    'r' => 1,
    's' => 1,
    't' => 1,
    'u' => 1,
    'v' => 4,
    'w' => 1,
    'x' => 8,
    'y' => 4,
    'z' => 10
];

// ****** create variable that sets results to true -- see bottom of code!!!
$haveResults = true;

$enterWord = (isset($_GET['enterWord'])) ? $_GET['enterWord'] : "";
$enterWord = strtolower($enterWord);
//dump($enterWord);

$letter;
$i;
$sum;
$finalSum;


function searchArray($scrabbleTiles, $enterWord) {
    global $sum;
    $sum = 0;
    foreach ($scrabbleTiles as $scrabbleLetter => $scrabbleNumber) {
        for ($i = 0; $i < strlen($enterWord); $i++) {
            $letter = $enterWord[$i];
        if (strstr($letter, $scrabbleLetter )) {
            $sum = $sum += $scrabbleNumber;
            //echo $scrabbleLetter. ': ' .$scrabbleNumber. '<br/>';
		} else {
		}
        }
    }
    //echo $sum;
    //dump($sum);
    //echo $sum;
}

searchArray($scrabbleTiles, $enterWord);

$bonus = (isset($_GET['bonus'])) ? $_GET['bonus'] : "";

function extraPoints($bonus, $sum) {
    global $sum;
    if ($bonus == "double") {
    $sum = $sum * 2;
    //echo $sum;
}   else if ($bonus == "triple") {
    $sum = $sum * 3;
    //echo $sum;
}   else {
}
}

extraPoints($bonus, $sum);

$extra = (isset($_GET['extra'])) ? $_GET['extra'] : "";

function extraBonus($extra, $sum) {
    global $sum;
    if($extra == "fifty") {
        $sum = $sum + 50;
    }
    else {
    }
}
extraBonus($extra, $sum);

//if no output returned, change results variable value to false
if(count($scrabbleTiles == 0)) {
    $haveResults = false;
}
