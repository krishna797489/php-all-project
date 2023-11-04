->how can we some "1,2,3,4,5,6,7" using single line of code?
$input="1,2,3,4,5,6,7";
echo array_sum(explode(',',$input));
output:28

->What is the answer of following code
$i=016;
echo $i/2;?
output:7

->What is the answer of following code
$str="PHP";
$$str="Programming";
echo "$PHP";
logic: $str="PHP";
$$str="Programming";
or
$PHP="Programming"; //ek dolar sign me php store hogya or dusre me Programming store hogya to bo Programming ko call karega.
output:Programming.

->What is the answer of following code
$n=10;
if($n==="10")
echo "n is equal to 10";
else
echo "n is not equal to 10";
logic:$n=10; //ye integer hea//===iska mtlb data ko chack krega deta type ko chack krega
if($n==="10") //or humne string liya hea isliye not equal
echo "n is equal to 10";
else
echo "n is not equal to 10";
output:n is not equal to 10

->What is the answer of following code
function f1()
{
    ehco "function 1";
}
f2();
error:call to undefined function f2()

->What is the answer of following code
echo substr("Computer Programming",9,7);
logic:pehele 9word ke bad 7word print krega
output:Program

->What is the answer of following code
echo substr("Computer Programming",9);
logic:suru ke 9word chorke baki print kredega
output:Programming  

->What is the answer of following code
echo strstr("Learning Laravel 5!","Laravel");
logic:ye isme laravel se start ho jayega print hona
output:Laravel 5!

->What is the answer of following code
echo strstr("Learning Laravel 5!","Laravel","laravel",true);
logic:isme laravel se pahele ka text print krega uske bad ka print nhi krega kyo isme humne true lgaya hea
output:Learning

->What is the answer of following code
echo "gettype(true).";
echo "gettype(10).";
echo "gettype(Web Programming).";
echo "gettype(null).";
output:boolean
integer
string
NULL

->what is the answer of following code.
$x=true and false;
$y=(true and false);
echo $x;
echo $y;
output:true
false

->what is the answer of following code
$a='1';
$b='&$a';
$b='2$b';
echo $b;
output:21



