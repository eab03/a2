<?php

// require that this file access tools.php
require('updatedTools.php');

// array of scrabble letters and associated values
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

// get the word from the form
$enterWord = (isset($_GET['enterWord'])) ? $_GET['enterWord'] : '';
$enterWord = strtolower($enterWord);

/* set variables and function for comparing the letters in the
form to those in the array */

// calculate intial sum total of the word without bonus points added

$finalSum;
$i;
$letter;
$sum;

function searchArray($scrabbleTiles, $enterWord) {
    global $sum;
    $sum = 0;
    foreach ($scrabbleTiles as $scrabbleLetter => $scrabbleNumber) {
        for ($i = 0; $i < strlen($enterWord); $i++) {
            $letter = $enterWord[$i];
            if (strstr($letter, $scrabbleLetter )) {
                $sum = $sum += $scrabbleNumber;
		    } else {
		    }
        }
    }
}

searchArray($scrabbleTiles, $enterWord);

// get input from radio buttons for double and triple word score
// add extra points, if applicable, to the sum total

$bonus = (isset($_GET['bonus'])) ? $_GET['bonus'] : '';

function extraPoints($bonus, $sum) {
    global $sum;

    if ($bonus == 'double') {
        $sum = $sum * 2;
    } else if ($bonus == 'triple') {
        $sum = $sum * 3;
    } else {
    }
}

extraPoints($bonus, $sum);

// get input from the checkbox for extra 50 points (if checked)
// add extra points, if applicable, to the sum total

$extra = (isset($_GET['extra'])) ? $_GET['extra'] : '';
$output;

function extraBonus($extra, $sum) {
    global $sum;
    global $output;
    if($extra == 'fifty') {
        $sum = $sum + 50;
        $alertType = "alert-success";
        $output = "Nice Score!";
    }
    else {
        $alertType = "alert";
    }
}

extraBonus($extra, $sum);
