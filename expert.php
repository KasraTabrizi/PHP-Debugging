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
new_exercise(5);
// === Exercise 5 ===
// The array should be printing every letter of the alfabet (a-z) but instead it does that + aa-yz
// Fix the code so the for loop only pushes a-z in the array
// === PROBLEM ===
// in php if you increment z, it will become aa, etc
// === SOLUTION ===
// stop the for loop when the length of the arrat is 26
$arr = [];
for ($letter = 'a'; count($arr) < 26; $letter++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alfabetical array
/*****************************************************************************************/
new_exercise(6);
// === Final exercise ===
// The fixed code should echo the following at the bottom:
// Here is the name: $name - $name2
// $name variables are decided as seen in the code, fix all the bugs whilst keeping the functionality!
// === PROBLEM ===
// line 111 has a missing semicolon
// line 114 the count of heroes is 2 but if you put that in rand it will generatre a random number between 0 and 2(included).
// === SOLUTION ===
// for line 111 en line 1444 see above
// line 93 needed a & before $param
// also added $nameOrder so it first takes a random firstname and then a random lastname
$arr = [];

function combineNames($str1 = "", $str2 = "") {
    $params = [$str1, $str2];
    $nameOrder = 0;
    foreach($params as &$param) {
        if ($param == "") {
            $param = randomHeroName($nameOrder);
        }
        $nameOrder++;
    }
    return implode(" - ", $params);
}


function randomGenerate($arr, $amount) {
    for ($i = $amount; $i > 0; $i--) {
        array_push($arr, randomHeroName());
    }

    return $amount;
}

function randomHeroName($nameOrder)
{
    $hero_firstnames = ["captain", "doctor", "iron", "Hank", "ant", "Wasp", "the", "Hawk", "Spider", "Black", "Carol"];
    $hero_lastnames = ["America", "Strange", "man", "Pym", "girl", "hulk", "eye", "widow", "panther", "daredevil", "marvel"];
    $heroes = [$hero_firstnames, $hero_lastnames];
    $randname = $heroes[$nameOrder][rand(0, 10)];

    return $randname;
}

echo "Here is the name: " . combineNames();
/*****************************************************************************************/
// === PROBLEM ===
//int $year was passed as an argument whereas date('Y') is a string
// === SOLUTION ===
//deleted the int
//added echo to the line 136
new_exercise(7);

function copyright($year) {
    return "&copy; $year BeCode";
}
//print the copyright
echo copyright(date('Y'));
/*****************************************************************************************/
// === PROBLEM ===
// you have two returns. line 146 and 147. only the first return is returned
// === SOLUTION ===
//added echo's to display the results
//add Smith to the first return

new_exercise(8);
function login(string $email, string $password) {
    if($email == 'john@example.be' || $password == 'pocahontas') {
        return 'Welcome John Smith';
    }
    return 'No access';
}
//should create the user with his full name (John Smith)
$login = login('john@example', 'pocahontas');
echo $login;
echo "<br>";
//no access
$login = login('john@example', 'dfgidfgdfg');
echo $login;
echo "<br>";
//no access
$login = login('wrong@example', 'wrong');
echo $login;
/*****************************************************************************************/
// === PROBLEM ===
// you have two returns. line 146 and 147. only the first return is returned
// === SOLUTION ===
//added echo's to display the results
//add Smith to the first return