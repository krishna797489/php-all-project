what is type of variable?
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)

->what is data type ?
String
Integer
Float (floating point numbers - also called double)
Boolean
Array
Object
NULL
Resource

->what is operators ?
Arithmetic operators
Assignment operators
Comparison operators
Logical operators
Bitwise operators

->what is string ?
A string is a sequence of characters, like "Hello world!".
Example:
echo strlen("Hello world!"); // outputs 12
echo str_word_count("Hello world!"); // outputs 2
echo strrev("Hello world!"); // outputs !dlrow olleH
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

->What is Conditional Statements?
if statement - executes some code if one condition is true
if...else statement - executes some code if a condition is true and another code if that condition is false
if...elseif...else statement - executes different codes for more than two conditions
switch statement - selects one of many blocks of code to be executed

->what is loop?
kisi chiz ko ek se jyada repeat krane ke liye loop ka used krte hea.
while - hamari di huyi condition jab tak true nhi hogi jab tak while loop chlega.
Ex: int i;
  while (i < 5) {
    cout << i << "\n";
    i++;
  }
do...while -jab hame apne loop ke andar likha huya statement kam se kam ek bar excute krana copalsary ho ja hum 
do while loop ka use krte hea
Ex:do {
  statement
}
while(condition)
for - loops through a block of code a specified number of times
foreach - loops through a block of code for each element in an array

->what is array ?
An array stores multiple values in one single variable:
Indexed Arrays:
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

Associative Arrays:Associative arrays are arrays that use named keys that you assign to them.
$age['Peter'] = "35";
$age['Ben'] = "37";
$age['Joe'] = "43";

Multidimensional Arrays:A multidimensional array is an array containing one or more arrays.
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);

->what is array function ?
array()	Creates an array
array_column()	Returns the values from a single column in the input array
array_count_values()	Counts all the values of an array
array_fill()	Fills an array with values
array_keys()	Returns all the keys of an array
array_replace()	Replaces the values of the first array with the values from following arrays
array_reverse()	Returns an array in the reverse order

->what is type of Global Variables?
$GLOBALS:global variable ko hum function ke andar use nhi kr skte hea function ke bahar use krte hea. 
$_SERVER:server ki jo bi information hoti usko capture krke krke rlhta hea.
$_REQUEST
$_POST:kisi server pr data send krne ke liye post methord ka use krte hea.
$_GET:jab hum data ko request krte hea jab hum get method ka use krte hea.
$_FILES:server pr koi file send krne ke liye file function ka used krte hea.
$_ENV
$_COOKIE:kisee upayogakarta kee pahachaan karane ke lie aksar cookies ka upayog kiya 
jaata hai.cookies ek chhotee file hotee hai jise sarvar upayogakarta ke
computer par embed karata hai. har baar jab vahee computer kisee browser
vaale pej ke lie anurodh karata hai, to vah kukee bhee bhej dega. php ke saath,
$_SESSION:session kisi variable ka data store krke rkhta hea or multiple pages pr used krta hea.






