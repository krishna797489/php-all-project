->write text to the outpute using PHP?
<?php
echo "Hello World!";
?> 

->Keywords,clases,function,and user-defined function Are Not case-sansitive?
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?> 

->Variables names Are cases-sansitive?
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?> 

PHP Comments
->Syntax for single-line comments
<?php
// This is a single-line comment

# This is also a single-line comment
?>

->Syntax for Multi-line comments
<?php
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
?>

->Using Comments to leave out parts of the code
<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

PHP Variables
->Create different Variables
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

->Test global scope (variable outside function)
<?php
$y = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
  echo "<p>Variable y inside function is: </p>";
} 
myTest();

echo "<p>Variable y outside function is: $y</p>";
?>

->Test local scope (variable inside function)
<?php
function krishna() {
  $x = 5; // local scope
  echo "<p>Variable x inside function is: $x</p>";
} 
krishna();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

->Use the global keyword to access a global variable from within a function
<?php
$x = 5;
$y = 10;

function hello() {
  global $x, $y;
  $y = $x + $y;
} 

hello();  // run function
echo $y; // output the new value for variable $y
?>
->Use the $GLOBALS[] array to access a global variable from within a function
<?php
$x = 5;
$y = 10;

function how() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
} 

how();
echo $y;
?>

->Use the static keyword to let a local variable not be delete after execution of function.
<?php
function where() {
  static $x = 0;
  echo $x;
  $x++;
}

where();
echo "<br>";
where();
echo "<br>";
where();
?> 

