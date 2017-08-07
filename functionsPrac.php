
<?php
//require ("variables.php");
require("Classes.php");
use myfirst\Employee as emp ;
$GLOBALS['a'] = 'aaa';

 /**
 *Function prints hello world.
 *
 *@param Recieves no parameter
 *@return void
 */
 function sayHello()
 {
       echo "Hello World<br>";
       echo $GLOBALS['a'];

 }
sayHello();echo "<br>";
/**
*This functions return 7 if user enters 8 and vice versa.
*
*@param $var an integer parameter to see whether it is 7 or 8
*@return returns a number respective to argument passed
*/
function correspondingValue($var)
{
    return 15-$var;

}
$obj1 = new emp("qwqw",122);
echo $obj1->getName();

echo CorrespondingValue(7);echo "<br>";


 ?>
