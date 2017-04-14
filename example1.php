<?php
//declaration
$var = "variable";
echo $var;
$number = 12345;
$float = 12.34;
$decimalNo = 123E-4;
define('$declationConstant',"Declaration Constant");
echo $declationConstant;
echo is_int($var);
echo is_float($var);
var_dump($float);
is_int($var);
$boolVal = false;
var_dump((int)$boolVal);
echo defined('$declationConstant');
//functions
function declaration($var,$number){
  $var = "variable1";
  $number = "number1";
  print_r($var . $number);
} // (more like scope)
//strings
$string1 = "Sting1 has \" in it";
$string2 = "string2 has ' in it";
$string3 = "string has "\n" two seperate lines";
print($string1);
$lowercaseString = strtolower($string1);
print_r($lowercaseString);
$uppercaseString = strtoupper($string2);
echo $uppercaseString;
$length = strlen($string2);
echo $length;
echo strpos($string2, "has");
$stringReplace = str_replace("has", "have", $string3, $count);
echo $count; //how many times has replaced with have (pass by reference )
echo $stringReplace;
echo substr($string3, 4);
echo substr($string3, -3);
echo substr($string3,4,-5);
$stringSplit = str_split($string3, 3);
print_r($stringSplit);
//arrays
$array1 = array("value1", "value2","value3");
$array2 = array("key1" => "value1", "key2" => "value2");
echo $array1[1];
echo array_key_exists(1,$array2);
echo in_array("value1",$array1,true);
array_push($array1,"value3");
array_pop($array1);
unset($array1[1],$array1[3]);// more like count ,multidimensional...
//objects
class Person{
  //properties
  const AVRG_NAME_PEOPLE = 100;
  public $firstName = "Nehasree";
  public $lastName  = "Jonnala";

  //constructor
function __constructor(){
  echo "i'am constructor";
  $this->firstName= "samuel";
}

//methods
  public function getFirstName(){
    return $this->$tempVar;
  }

  public function setFirstName($tempVar){
    $this->firstName = $tempVar;
  }
}
$myObject = new Person(); //instance of class
$myObject->setFirstName("sam");
echo $myObject->getFirstName();
echo $myObject->firstName;
$myObject->firstName = "NJ";
echo Person::AVRG_NAME_PEOPLE; //(:: is scope resolution operator)

//inheritence
classs Author extends Person{

}
//public (any access)
//protected(can use only in inside of that function)
//private(can only access inside of class where it is declared)
//static

//include File in php
include 'example2.php';
include_once 'example3.php'; // if include file not found it throws error but remaining script is proccessed

//require php File
require 'example4.php'; // if require is not found then error is thrown and scipt is terminated


//operators

echo 8+5; //(-,*,/,%)
//expodiation operators
echo 4 ** 2; //basically saying 4 power 2 results 16

//incrementing and  decrementing operators
$number1 = 1;
echo $number1++; //same as ++$number1 difference is ++ after adds after and ++ adds before reading declared value
$number = $number +1; //$number + =3 // similar with all other operators
$concat ="neha";
$concat .= "jonnala";
echo $concat;
//comparision operator
var_dump(8 == 8); // gives result bool(true)
var_dump(8 === "8"); //bool(false)
var_dump( 7 <> 8); //asking 7 not equal to 8 //var_dump(7 !=8);
var_dump(7 != "7"); //bool(true)
var_dump(7 > 7); //bool(false)
var_dump(7 >= 7); //bool(true)
var_dump( 7 < 6); //bool(false)

//spaceship
// we will get result either -1, 1 or 0
echo 1 <=> 1;//0 result i.e equal
echo 1 <=> 2; //-1 i.e less than left hand

//logical operators
$var1 = (6<7);
$var2 = (8===8);
var_dump($var1 and $var2);//bool(true) i.e both conditions are true
var_dump($var1 && $var2);
var_dump($var1 or $var2);
var_dump($var1 || $var2); //true true then true remaining all combinations are false

var_dump(!($var1);// not is oposite bool(false)

//if statement //elseif //else
if($count == 1)
{
  echo "there are 1 in count;
}elseif{
  echo "count is ".$count."";
}else{
  echo "there is no count";
}

//EOL(PHP_EOL means end of line)

//switch statement
switch($count){
  case 0:
  echo :"There are no authors".PHP_EOL;
  case 1:
  echo :there are 1 author in count".PHP_EOL;
}

//terinary operator
$outcome = ($count >0) ? "author total:" .$count : "NO authors";
echo $outcome;

//null coalesce operator // ??

//while loop
$test = true;
while($test){
  echo "learning is fun"; // it will excuete continously if we want to break we have to set test var to false
  $test = false; // or we can use condition  $i=0; while(i<4(or $i=0; $i<4; $i++)){echo "reading" $i++;}
}

//alternate syntax(mainly used in using php in html)
//with out using {} we can replace with : and endfor or endwhile
while($test):
  echo "learning is fun"; // it will excuete continously if we want to break we have to set test var to false
  $test = false; // or we can use condition  $i=0; while(i<4(or $i=0; $i<4; $i++)){echo "reading" $i++;}
endwhile; // o/p same as normal

//database connection
$dbPassword = "PHPFundementals";
$dbUserName = "PHPFundementals";
$dbServer = "localhost";
$dbName = "PHPFundementals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName);

if($connection->connect_errno)
{
  exit("Database Connection Failed:".$connection->connect_err);
}

$query = "DELETE FROM Authors WHERE id=4";

$connection->query($query);
$connection->close();
//in addition we will have select, delete,looping like if ,while and more..

?>
