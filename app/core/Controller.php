<?php

 class Controller
 {

   protected function model($model)
   {
       if (file_exists($model)) {
           require_once "../app/models/ ".$model.".php";
           return new $model();
       }

   }

   protected function view($view ,$data = [])
   {
     //echo $view . "<br>";
             require_once "../app/views/".$view.".php";


   }

 }
 ?>
