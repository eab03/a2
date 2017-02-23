<?php

// require that this file access tools.php

require('Form.php');
require('updatedTools.php');

use DWA\Form;

$form = new Form($_GET);

// get the text, radio and checkbox fields from the form

$enterWord = $form->get('enterWord', "");
$bonus = $form->get('bonus', "");
$extra = $form->isChosen('extra');

// array of scrabble tiles and associated values
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

// declare variables used in functions below

$i;
$letter;
$sum;
$output; // variable used uniquely in extraBonus function to display message
$enterWord=strtolower($enterWord);

// function to add together the value of the individual tiles
// result is the total sum of tiles without extra points added

if($form->isSubmitted()) {

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

    // function to get input from radio buttons for double and triple word score
    // result is to add extra points, if applicable, to the sum total

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

    // function to get input from the checkbox for extra 50 points (if checked)
    // result is to add extra points, if applicable, to the sum total and output message(s)

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

} // close if statement isSubmitted
