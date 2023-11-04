->what is php ? 
Php is the server side scripting language hea or iska used 
hum mostly static and dynamic website create krne ke liye krte hea.

->What is the difference between Explode and Implode?
Explode():
The explode() function ye string ko array me convert krdeta hea.
syntax:
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
output:Array ( [0] => Hello [1] => world. [2] => It's [3] => a [4] => beautiful [5] => day. )

Implode():
The implode() function array ko string me convert krdeta hea.
syntax:
$arr = array('Hello','World!','Beautiful','Day!');
echo implode(" ",$arr);
output: Hello World! Beautiful Day!

->Is multiple inheritance supported in php?
PHP supported in only single inheritance,it means that a class can be 
extends from only one single class using the keyword 'extends'.
Agr humko multiple inheritance support krna hea to iske liya kuch
 alag function hote usko use krke hum multiple inheritance used kr skte hea.

->what is the main difference between require/include and require_once/include_once ?
 require/include:connection file ko ek se jyada bar call krna.
 require_once/include_once:connection file ko ek se jyada bar call nhi kr skte.

->How can we access the data sent through the url with the POST method?
 To access the data sent this way,you use the $_POST array.
 Imagine you have a form field called 'var' on the form when the user clicks submit
    to the post form,you can then access the value like this:
    $_POST["var"];

->How can we access the data sent through the url with the GET method?
To access the data sent via the GET method, we use $_GET array like this:
www.url.com?var=value
$variable=$_GET["varible"]; this will now contain 'value'

->How can we chack the values of a given variable is a number?
it is possible to use the dedicated function is_numeric() to chack whether it is a number or not.
this function return true(1)if the variable is a number or a numeric string, otherwise it return false/nothing
Ex1:
$a=32;
echo is_numeric($a)
output:1
Ex2:
$d="32";
ehco "d is".is_numeric($d)
output:0

->How do i chack if a given variable is empty?
If we want to chack whether a variable has a value or not ,it is possible to use the empty()
function.
thise function return false if the variable exists and is not empty, otherwise it returns true.
Ex:
$a="";
if(empty($a)){
    echo "variable 'a' is empty.<br>";  //empty hone par ye call hoga
} 
else
{
    echo "this is the value:$a";  //value hogi to ye call hoga
}

->What does the unlink() function mean?
The unlink() function delete a file.
Ex:
unlink("text.txt");

->what is the isset() function in php?
The isset function in PHP is used to determine whether a variable 
is set or not. A variable is considered as a set variable if it has a value other
than NULL. In other words, you can also say that the isset function is used to determine 
whether you have used a variable in your code or not before.

->What is the unset() function mean?
The unset() function jo variable ke andar value hoti hea usko delete krdeta hea.
Ex:
$a="Hello krishna";
echo $a;
unset($a);
echo $a;
output: null

->How is a Constant defined in a PHP script?
ye ek constant value ko agar ek bar define krdete he to usko hum fir change nhi kr skte or constant variable me hum $ sign ka use nhi krte.
the define() directive lets us defining a constant as follow:
define("Pincode",100001); //agar hum pincode ko call krenge to ye value show hogi
        Name    ,Value 

->What is the definition of a session?
 A session is a way to store information (in variable) to be used in multiple pages.
 Unlike a cookie, the information is not stored on the user's computer.
 jab bi hamara browser close hoga to session automatic delete ho jata hea.
 A session is started with the (session_start()) function ka use krte hea.
 session me value assign krna  $_SESSION is function se values assign krte hea.
 Example:
 $_SESSION["name"]="krishna"
session ko delete krne ke session_destroy() function ka use krte hea.

->What is the definition of a cookies?
kisee upayogakarta kee pahachaan karane ke lie aksar cookies ka upayog kiya 
jaata hai.cookies ek chhotee file hotee hai jise sarvar upayogakarta ke
computer par embed karata hai. har baar jab vahee computer kisee browser
vaale pej ke lie anurodh karata hai, to vah kukee bhee bhej dega. php ke saath,
aap kukee maan bana aur punah praapt kar sakate hain.
set the cookie:
$cookie_name="user";
$cookie_value="krishna";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");//86400=1day

delete the cookie
setcookie("user","",time()-3600);

->What is the meaning of a persistent Cookie ?
A persistent cookie is permanently stored in a cookie file on the browser's computer. By
default,cookies are temporary and are erased if we close the browser.
How to set persistent Cookie?
if the Cookie conntain an expiration date, it is considered a persistent cookie, on the date 
specified in the expiration,the Cookie will be remove from the disk.

->What does $_SERVER mean?
$_SERVER ek array hota hea iska used server ki jo bi information hoti hea usko capture krke rkhta hea jese ki header,and script location.
Ex:
$_SERVER['server_name'];
$_SERVER['http_host'];
$_SERVER['http_user_agent'];
$_SERVER['server_port'];

->What does $_FILES means?
The Global predefined variable $_FILES is an associative array containing items uploaded via HTTP post method.
$_FILES['file']['name']-the original name of the file to be uploaded.
$_FILES['file']['type']-the mime type of the file.
$_FILES['file']['size']-the size,in bytes,of the uploaded file.
$_FILES['file']['tmp_name']-The temporary filename of the file in which the uploaded file was stored on the server.
$_FILES['file']['error']-The error code associated with this file upload.

->What does the  '==' and '==='means?
'=='
ye agar same value hogi to true return krega. 
isme koi data type se mtlb nhi hea.
jese ki :
4==4
output:true
4==5
output:folse

'==='
isme agr value same ho or data type bi same ho to true return krega krega 
Ex:
$a=10;
$b=10;
echo $a===$b;
//true

$a=10;
$b="10";
echo $a===$b;
//false

-> What are the different types of errors in PHP?
1. Parse Errors (syntax errors)
The parse error occurs if there is a syntax mistake in the script. Missing or Extra parentheses
Unclosed quotes
Unclosed braces
Missing semicolon
2. Fatal Errors
If you are trying to access the undefined functions, or require a missing file then the output is a fatal error.
3. Warning Errors
The main reason for warning errors are to include a missing file or using the incorrect number of parameters in a function.
4. Notice Errors
Notice that an error is the same as a warning error. Notice that the error occurs when you try to access the undefined variable, then produce a notice error.

->How can we pass the variable through the navigation between the pages?
It is possible to pass the variables between the PHP pages using 
sessions, cookies or hidden form fields.

->Differentiate between variables and constants in PHP?
Variables:
.The value of a variable can be changed during the execution.
.Variables require compulsory usage of the $ sign at
Constants:
.The constant value can't be changed during script execution.
.No dollar sign ($) is required before using a the start. constant.

->Is PHP a case-sensitive language?
PHP can be considered as a partial case-sensitive language. The variable names are completely 
case-sensitive but function names are not. Also, user-defined functions are not case-sensitive but the rest of the language is case-sensitive.
For example, user-defined functions in PHP can be defined in lowercase but later referred to in uppercase, and it would still function normally.
.Case sensitive (both user-defined and PHP defined)
1. variables
2. constants
3. array keys
4. class properties
5. class constants,
.Case insensitive (both user defined and PHP defined)
1. functions
2. class constructors
3. class methods
4. keywords and constructs (if, else, null, foreach, echo etc.)

-> What are the different types of variables present in PHP?
Integers - are whole numbers, without a decimal point, like 4195.
Doubles - are floating-point numbers, like 3.14159 or 49.1.
Booleans - have only two possible values either true or false.
NULL - is a special type that only has one value: NULL
Strings - are sequences of characters, like 'PHP supports string operations.'
Arrays are named and indexed collections of other values.
Objects - are instances of programmer-defined classes, which can package up both other kinds of values and functions that are specific to the class.
Resources - are special variables that hold references to resources external to PHP (such as database connections).

->What are the rules for naming a PHP variable?
The following two rules are needed to be followed while naming a PHP variable:
1. A variable must start with a dollar symbol, followed by the variable name. For example: $price=100; where price is a variable name.
2. Variable names must begin with a letter or underscore.
3. A variable name can consist of letters, numbers, or underscores. But you cannot use characters like +, -, %, & etc.
4. A PHP variable name cannot contain spaces.
5. PHP variables are case-sensitive. So $NAME and $name both are treated as different variables..

->What is the difference between "echo" and "print" in PHP?
echo:
echo can output one or more strings.
echo is faster than print because it does not return any value.
If you want to pass more than one parameter to echo, a parenthesis should be used.
print:
print can only output one string and it always returns 1.
print is slower compared to echo.
Use of parenthesis is not required with the argument list.

->What are the different types of Array in PHP?
In PHP, there are three types of arrays:
i-Indexed arrays - PHP index is represented by number which starts from 0. We can store number, string and object in the PHP array.
ii-Associative arrays - Arrays with named keys
iii-Multidimensional arrays - Arrays containing one or more arrays

->Differentiate between GET and POST?
GET:
.jab hum data ko request krte hea jab hum get method ka use krte hea.
.GET method me hum binary data ko bej nhi skte jese ki images,word documents.
.This method must not be used if you have any sensitive information like a password to be sent to the server.
.You can use this method only for data that is not secure.

POST:
.kisi server par data send krne ke liye post method k use kiya jata.
.POST method me hum koi bi binary data bej skte hea jese ki img,file,doc.
.Sensitive information can be sent using this method.
.data sent through this method is secure.

->What are the different ways of handling the result set of MySQL in PHP?
There are 4 ways of handling the result set of MySQL in PHP. They are:
1. mysqli_fetch_array(): Returns the current row of the result set as an associative array, a 
 numeric array, or both.
2. mysqli_fetch_assoc(): Returns the current row of the result set as an associative array 
3. mysqli_fetch_object(): Returns the current row of a result set, as an object.
4. mysqli_fetch_row(): Returns result row as an enumerated array.

->What is API in PHP?
API stands for Application Programming Interface.
Mainly this APIs are communicates each other using JSON or XML formatted data.
There are 2 types of API 
1. REST API 
2. SOAP API
REST API:
i>Rest API is implemented as it has no official standard at all because it is an architectural style."
ii>REST APIs uses multiple standards like HTTP, JSON, URL, and XML for data communication and transfer.
iii>As REST API deploys and uses multiple standards as stated above, so it takes fewer resources and bandwidth as compared to SOAP API.
iv>REST has SSL and HTTPS for security.
v>REST stands for Representational State Transfer.
vi>REST can make use of SOAP as the underlying protocol for web services, because in the end it is just an architectural pattern.
SOAP API:
i>On other hand SOAP API has an official standard because it is a protocol.
ii>SOAP APIs is largely based and uses only HTTP and XML.
iii>On other hand Soap API requires more resource and bandwidth as it needs to convert the data in XML which increases its payload and results in the large sized file.
iv>On other hand SOAP has SSL(Secure Socket Layer) and WS- security due to which in the cases like Bank Account Password, Card Number, etc. SOAP is preferred over REST.
v>On other hand SOAP stands for Simple Object Access Protocol
vi>On other hand SOAP cannot make use of REST since SOAP is a protocol and REST is an architectural pattern.

->How to terminate the execution of a script in PHP?
To terminate the execution of the script in PHP, the exit() function is used. It is a built-in function that
 outputs a message and then terminates the current script.
The message which you want to display is passed as a parameter to the exit() function. Script termination will 
be done by this function after displaying the message. It is an alias of die() function. It doesn't return any value.
Ex:
exit(message)

->What is Class?
Classes are the blueprints of objects.
variables and functions.
One of the big differences between functions and classes is that a class contains both Class is a programmer-defined data type, which includes local methods and local variables.
Class is a collection of objects. Object has properties and behavior. A class is defined by using the class keyword.
Note: In a class, variables are called properties and functions are called methods!
We can create multiple objects from a class.
Ex:
class person {
}

->What is encapsulation in php? 
Encapsulation means wrapping of data and methord into a single unit
example:class{
            data member
                 +
            methord(behavior)
}

->What is polymorphism in php? 
In simple word we can say, one name multiple form.
Oject same ho but behaviour diffrent ho usse hum polymorphism khete hea.
polymorphism are two type:
i.Compile time:Overloading function
ii.Run time:Overridng function

->What is Inheritance in PHP?
kisi ek class ka data dusri class me access kr sake usko hum inheritance kahte hea.
An inherited class is defined by using the extends keyword.
Private methods of a parent class are not accessible to a child class.
Ex:
class A { 
    public $name;
     public function talk() {
         //Do stuff here
}
}
class B extends A {
public function walk(){
     //Do stuff here
}
}

->What is access modifiers in php?
Properties and methods can have access modifiers which control where they can be accessed.
There are three access modifiers:
.public - public class ke andar ka data class ke bahar bi access kr skte hea. 
.protected -base class ka data derive class me access kr skte hea only.
.private- the property or method can ONLY be accessed in this class.
Ex:
class MyClass {
public $public = 'Public'; //everyone access
protected $protected 'Protected';  //base and derive class access
private $private 'Private'; //my self class access
}

->What is function/method Overriding?
Function overriding is same as other OOPs programming languages.
Base class nd derive me same name ka function bnaye or perameter bi same ho usko hum function 
overriding bolte hea.
The two methods with the same name and same parameter is called overriding.

->What is function/method Overloading?
function Overloading usse khete hea function ka name same ho 
but arguments/perameter change ho usko hum function Overloading bolte hea.

->Difference between function overloading and function overriding?
Function Overloading: is defining methods that have same function name with different parameters.
Function Overriding: is defining methods that have same function name with the same parameters.

->What is abstract class in php?
A class which contain at least one pure virtual function we can't declare the object of abstract class.
*ek class jisme pure vartual function ho or usme koi object declare na ho usse hum abstract class bolte hea
Ex:
abstract class Fruit{
private $color;
abstract public function eat();
public function setColor($c){
     $this->color = $c;
     }
}

->What is the difference between Interface and Abstract methods?
Abstract Class:
.Abstract classes me hum abstract methods nd non abstract methord ko maintain kr skte hea.

.In abstract classes, we can create the variables/properties.
.In abstract classes, we can use any access specifier.
.By using 'extends' keyword we can access the abstract class features from derived class.
.Multiple inheritance is not possible.

Interface class:
.Interfaces can maintain only abstract methods.
.In interface classes, we can not create the variables/properties.
.In interface, we can use only public access specifier.
.By using 'implement' keyword we can get interface from derived class.
.By using interfaces multiple inheritance is possible.

->What is static method in php?
Static methods can be called directly without creating an instance of the class first.
Static methods are declared with the static keyword.
To access a static method use the class name, double colon (::), and the method name.
A class can have both static and non-static methods.
A static method can be accessed from a method in the same class using the self keyword and double colon (::)
Ex:
class greeting{
     public static function welcome(){
         echo "Hello World!"; 
        }
public function __construct() {
     self::welcome(); 
    }
}
// Call static method 
greeting::welcome();
// Hello World!

->What are Traits?
PHP only supports single inheritance: a child class can inherit only from one single parent.
Traits ka used hum multiple inheritance ka use krne ke liye krte hea.
Traits are used to declare methods that can be used in multiple classes. Traits can have any access modifier (public, private, or protected).
Traits are declared with the trait keyword.
To use a trait in a class, use the use keyword.
Ex:
trait message1 {
public function msg1() {
     echo "OOP is fun! 
    }
}
class Welcome {
use message1;
}

->What is namespace in PHP?
php me same name ki class ko dubara declare nhi kr skte same file me.
Namespaces me hum same name ki class ko same file me used krba skte hea.
namespace ko declare krte namespace keyword.
It allows the same functions/classes/interfaces/constant functions in the separate namespace without getting the fatal error.
And when we have to use this namespace in any file, then we can call this namespace in other file just by using use keyword.
Ex:
namespace MyNamespaceName {
function hello()
{
    echo 'Hello I am Running from a namespace!';
}

}
// Calling in another file
include " MyNamespaceName.php";
use MyNamespaceName \ hello as helloCall;

->What is constructor in php?
constructor ek kisi bi class ka member function hota hea constructor iska use krke hum object bnate hea or initialize krte hea.
Notice that the construct function starts with two underscores (___).
You can say that the Constructors are the blueprints for object creation.
Ex:
class Fruit { 
    function __construct($name) {
// something here
}
}

->What is destructor in php?
If you create a __destruct() function, PHP will automatically call this function at the end of the script.
Notice that the destruct function starts with two underscores (___)!
__construct() function that is automatically called when you create an object from a class, and a
__destruct() function that is automatically called at the end of the script."
Ex:
class Fruit {
function __construct($name) {
// something here
}
function __destruct() {
echo "I'll at the end of the script";
}
}

->Difference between ucwords, ucfirst and strtoupper and lcfirst,strtolower ?
The ucwords() function converts the first character of each word in a string to uppercase.
The ucfirst() function converts the first character of a string to uppercase.
The strtoupper() function converts a string to uppercase.
The lcfirst() function converts the first character of a string to lowercase.
The strtolower() function converts a string to lowercase.
Ex:
echo ucwords("hello world");
// Hello World
echo ucfirst("hello world");
// Hello world
echo strtoupper("Hello WORLD!");
// HELLO WORLD!
echo lcfirst("Hello world!");
//hello world!
echo strtolower("Hello WORLD.");
//hello world.

->What is the meaning of PEAR in PHP?
PEAR stands for PHP Extension and Application Repository. It is one of the frameworks 
and acting repositories that host all of the reusable PHP components. Alongside 
containing some of the PHP libraries.

->What is the meaning of break and continue statements in PHP?
Break: This statement is used in a looping construct to terminate the execution of the iteration 
and to immediately execute the next snippet of code outside the block of the looping construct.
Ex:
    for($x = 0; $x < 10; $x++){
     if($x==4){
    break;
    }
     echo "$x";
 }
  // 0123 
Continue: This statement is used to skip the current iteration of the loop and continue to 
execute the next iteration until the looping construct is exited.
Ex:
for ($x = 0; $x < 10; $x++) {
     if($x == 4) {
continue;
}
 echo "The number is: $x <br>";
}
// 012356789

->What are some of the top Content Management Systems (CMS) used in PHP?
There are many CMS that are used in PHP. The popular ones are as mentioned below:
1. WordPress
2. Joomla
3. Magneto
4. Drupal

->How are comments used in PHP?
There are two ways to use comments in PHP. They are single-line comments and multi-line comments.
Single-line comments can be used using the conventional '#' sign.
Ex:
# This is a comment
Multi-line comments can be used using the conventional '/* */' sign.
Ex:
/*
Multi-line 
Comment
In PHP;
*/

->How can you get the IP address of a client in PHP?
The IP address of a client, who is connected, can be obtained easily in PHP by making use of the following syntax:
Ex:
$_SERVER["REMOTE_ADDR"];

->What is the difference between explode() and split() functions?
Both function are used to breaks a string into an array, the difference is that Split() function breaks split 
string into an array by regular expression and explode() splits a string into an array by string.
explode() is faster than split() because it does not match the string based on regular expression.

->What types of loops exist in PHP?
There are four types of loops that exist in PHP. They are
1. for
2. while
3. do-while and
4. foreach

->Distinguish between urlencode and urldecode?
This method is best when encode a string to use in a query part of a URL.
It returns a string in which all non-alphanumeric characters except -_. have replaced with a percentage (%) sign.
The urldecode->Decodes URL to encode the string as any % and other symbols are decode by the use of the urldecode() function.

->what is the type of error in php?
Error are 4 type in php.
1 Fatal Error:man lo humne koi function bnaya or uski jagah kisi or function ko call krte hea to fetal error atai.
2 Notice Error:kisi variable ko declare nhi krte jab notice error ati hea.
3 Parse Error or Syntax Error:koi humne galat PHP syntax lick diya ho tab syntax error atai hea.
4 Warning Error:koi file humne include ki agr bo file nhi mili to usko warning error khehte hea. 

->Explain the difference between static and dynamic websites?
static websites:Ek bar code execute hone ke bad hum usme kuch change nhi kr skte .
dynamic websites: content of script can be changed at the run time. Its content is regenerated every 
time a user visit or reload. Google, yahoo and every search engine is the example of dynamic website.

->what is class ?
.class is a collection of data member function(object).
.class always declare with keyword (Class).

->what is object ?
.Object is instance of a class.
.ek class me ek se jyada object create kr skte hea.

->Type of Inheritance ?
1>Single Inheritance-only One base class and drive class.
2>Multiple Inheritance-more than create base class but drive class only one.
3>Multilevel Inheritance-only one base class and more than create drive class.
4>Hierarchical(हाइअराकिक्‌ल्‌) Inheritance-only one base class and more than create drive class.

->Run time Difference B/W require and include ?
.require will produce a fatal error (E_COMPILE_ERROR) and stop the script.
.include will only produce a warning (E_WARNING) and the script will continue

->type of array function ?
array me bahut type ke array function hote hea:
ye kuch important function hea.
i.count array

syntax:<?php
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
output:3
?>

ii.cuuren,and array

syntax:<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo end($people);
output:Peter   //ye cuurent function se aya hea
        Cleveland  //ye end function se aya hea
?>

iii.replace array
syntax:<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
output:blue,yellow
?>




























