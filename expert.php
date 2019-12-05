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
/*****************************************************************************************/
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
/*****************************************************************************************/
new_exercise(3);
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
// === PROBLEM ===
// the wrong double quotation marks were used
// === SOLUTION ===
// used the right double quotation marks
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);
/*****************************************************************************************/
new_exercise(4);
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!
// === PROBLEM ===
// the $day inside the foreach loop was not preceded with the '&'. by adding the &, you will reference to the array and
// so any changes in the loop will affect the array
// === SOLUTION ===
// add a '&' before the $day in the foreach loop
foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);
/*****************************************************************************************/