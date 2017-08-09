<?php

 class Home extends Controller
 {
   public function index($firstName = '',$lastName = '')
   {
     echo $firstName. "   ss  ".$lastName . "<br>";

   }
   public function test()
   {

     echo "test";
   }

 }
 ?>
