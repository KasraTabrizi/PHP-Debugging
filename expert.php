<?php
declare(strict_types=1);

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong

// === PROBLEM ===
// the problem with the function is that the the variable $x is undefined.
// === SOLUTION ===
// solution = it needs to be a parameter in the function because we pass value 2 when we call it.

echo "Exercise 1 starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise $x starts here:<br/>";
    echo $block;

}

new_exercise(2);
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

// === PROBLEM ===
// the first item in an array always starts at index 0 so when we chose index 1, it will print tuesday
// === SOLUTION ===
// select index 0 to get monday

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;
