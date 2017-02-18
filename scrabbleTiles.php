<?php

// require that this file access tools.php
require('tools.php');

// create an array
$scrabbleTiles = [
    'a' => 1,
    'b' => 1,
    'c' => 1,
    'd' => 1,
    'e' => 1,
    'f' => 1,
    'g' => 1,
    'h' => 1,
    'i' => 1,
    'j' => 1,
    'k' => 1,
    'l' => 1,
    'm' => 1,
    'n' => 1,
    'o' => 1,
    'p' => 1,
    'q' => 1,
    'r' => 1,
    's' => 1,
    't' => 1,
    'u' => 1,
    'v' => 1,
    'w' => 1,
    'x' => 1,
    'y' => 1,
    'z' => 1
];

dump($scrabbleTiles);



// $bookJson = file_get_contents('books.json');

// second parameter is to return an associative array vs object
// goal is to take this json file and turn it into a php file
// $books = json_decode($bookJson, true);

/* use dump to see what is in this file (books.json) using the variable name
// books dump ($booksJson);
// dump($books);
// to just pull the GG and then author information
// dump($books["The Great Gatsby"]['author']);
// output is a string with json code */

// used this code later to just be able to see the info in the display file


// fetched data
// could fetch and filter data file -- this is the logic file now for the display
// file

// ****** create variable that sets results to true -- see bottom of code!!!
// $haveResults = true;

// create var filter and wrap in an if statement
// isset lets you know if this exists (i.e. is set)
// full if/else good with complex checks
// checking to see if get data exists, especially when referring to itself
/*if(isset($_GET['filter'])) {
$filter = $_GET['filter'];
}
else {
    $filter = '';
}*/

// alternative for if statement, ternary operator
// takes boolean expression if... ternary operator ?... then is set to x, otherwise is set to y
// translating caseInsensitive to a boolean
$filter = (isset($_GET['filter'])) ? $_GET['filter'] : "";
$caseInsensitive = (isset($_GET['caseInsensitive'])) ? true : false;

//checks to see if filter is working
// dump($filter);

// loop through title key
// if the title does not match the filter, then we remove it from the array
// wind up with updated version of books array; if didn't match criteria then are excluded from the results

// return statement to return value from the function
// this code allows for all books to be displayed if the filter is empty
// again something to think about when keep code in same form

// if the case insensitive is checked, make all characters lower case and then use the filter
// if the case insensitive box is not checked, then match the title to the filter

// omitted curly brackets because this is a single statement
/*if($filter == '')
    return $books;

foreach($books as $title => $book) {

    if($caseInsensitive) {
        $match = strtolower($title) == strtolower($filter);
    }
    else {
        $match = $title == $filter;
    }

    dump($match);

    if(!$match) {
        unset($books[$title]);
    }
}*/

// dump($books);

// if no books returned, change results variable value to false
//if(count($books == 0)) {
//    $haveResults = false;
//}
