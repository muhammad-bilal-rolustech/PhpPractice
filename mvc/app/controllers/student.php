<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Student extends Controller
 {
   protected $std1 ;
   public function __construct()
   {

      $this->std1 = $this->model("std");
      //   echo $this->std1->name." is called <br>";
   }
   public function addStudent($id =0 , $name = '' ,$degree = '' , $address = '')
   {

       $std1->name = $name ;
       $std1->id = $id ;
       $std1->degree = $degree ;
       $std1->address = $address ;
       echo $std1->id."br";
       echo "in Student Controller <br>";

       $this->view("student/addStudent",['name' => $std1->name] );
   }
   public function createStudent($id =0 , $name = '' ,$degree = '' , $address = '')
   {
       echo $id."<br>";
       echo $name."<br>";
       echo $degree."<br>";
       echo $address."<br>";
      std::create([
          'id' => $id ,
          'name' => $name ,
          'degree' => $degree ,
          'address' =>$address
     ]);
   }

   public function showAllStudent()
   {
      echo "inside <br>";
    //  dd(std::where('id','=' , 10)->first()->name);
      //dd(std::find(20)->name);
      $users = Capsule::table('stds')->get();
      foreach ($users as $key ) {
             echo  $key->id."<br>";
                 }
    //  print_r($users);
      //  $student=new std();
      //$student = std::where('id',10)->get();
      //print_r($student);

   }
   public function updateStudent($id,$name='',$degree ='',$address ='')
   {
      $user =  std::find($id);

      if ($name!= '') {
        $user->name = $name ;
        if ($degree != '') {
            $user->degree = $degree;
            if ($address != '') {
                $user->address = $address ;
            }
        }

      }

      $user->save();

   }
   public function deleteStudent($id)
   {
     $user =  std::find($id);
     if(!is_null($user))
     {
       $user->delete();
     }

   }

 }

 ?>
