<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
 class Student extends Controller
 {
   protected $std ;
   public function __construct()
   {
     $this->std = $this->model("std");
   }
   public function addStudent($id =0 , $name = '' ,$degree = '' , $address = '')
   {

       $std->name = $name ;
       $std->id = $id ;
       $std->degree = $degree ;
       $std->address = $address ;
       echo $std->id."br";
       echo "in Student Controller <br>";

       $this->view("student/addStudent",['name' => $std->name] );
   }
   public function createStudent($id =0 , $name = '' ,$degree = '' , $address = '')
   {

      $this->std->create([
          'id' => $id ,
          'name' => $name ,
          'degree' => $degree ,
          'address' =>$address
     ]);
   }

 }

 ?>
