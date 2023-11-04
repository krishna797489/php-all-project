<!-- What is class and object?
class:- A class is defined by using the class keyword.
ex:- fruit,car.
object:-Classes are nothing without objects! We can create
 multiple objects from a class. Each object has all the properties 
 and methods defined in the class, but they will have different property values.
 ex:- apple mango,swite bmw.
 
 syntax: -->
 <?php
class Fruit {  /* ye class hea */
  // Properties
  public $a;
  public $b;
  public $c;

  // Methods  or function
  function add() {
    $this->c=$this->a+$this->b;
    return $this->c;
  }
  function sub() {
         $this->c=$this->a-$this->b;
         return $this->c;
  }
}

$a1 = new Fruit();  /* ye object create kiya */
$a1->a=10;
$a1->b=20;
echo "Addition:".$a1->add()."<br>";  /* ye call kiya */

$b2=new Fruit();    /* ye object create kiya */
$b2->a=50;
$b2->b=10;
echo "Substraction:".$b2->sub();  /* ye call kiya */
?>
