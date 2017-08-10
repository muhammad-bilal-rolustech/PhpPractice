<?php

 class Controller
 {

   protected function model($model)
   {
       if (file_exists("../app/models/".$model.".php")) {
          // echo $model."in model <br>";
           require_once "../app/models/".$model.".php";
           return new $model();
       }else {
             echo "Not in ,model <br>";
       }

   }

   protected function view($view ,$data = [])
   {
     //echo $view . "<br>";
             require_once "../app/views/".$view.".php";


   }

 }
 ?>
