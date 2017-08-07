<?php
    //An array stores multiple values in one single variable.
    $names = array("Ali","Bilal","Hashir");
    //Displaying array elemenst
    echo $names[1];echo "<br>";
    //concatenation operator (.) used to concat two strings ;
    echo $names[1]  . "   is my name " . $names[0] . "   is my brothers name ";echo "<br>";
    //iterate array with foreach loop
    foreach ($names as $key) {
      echo $key . " <br>";
    }
    //Associative array
    $age  = array("Ali" =>"19" , "Bilal" => "22" , "Hashir" => "10" );
    echo "My age is  " .$age['Bilal'] . "<br>";
    //iterate associative array
    foreach ($age as $key => $value) {
         echo $key . " : " . $value  . "<br>";
    }

    $cars = array(
      array("BMW",100,95),
      array("Toyota" ,65,110),
      array("volvow" ,80,150)
    ) ;
     echo $cars[0][0] . "<br>";
     foreach ($cars as $key ) {
        echo $key[0]. "     ". $key[1] . "   " .$key[2]."<br>";
     }
     $v = 10;
     echo $v;
     $v = "var";
     echo $v ;
 ?>
