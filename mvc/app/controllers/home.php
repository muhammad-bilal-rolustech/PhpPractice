<?php

 class Home extends Controller
 {
   public function index($firstName = '',$lastName = '')
   {
     echo $firstName. "  ".$lastName . "<br>";

   }
   public function test()
   {

     echo "test";
   }

 }
 ?>
