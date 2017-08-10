<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Course extends Controller
 {
   protected $Course ;
   public function __construct()
   {

      $this->Course = $this->model("Courses");
      //   echo $this->std1->name." is called <br>";
   }

   public function createCourse($id =0 , $name = ''  ,$dept = '')
   {

       Courses::create([
          'c_id' => $id ,
          'c_name' => $name ,
          'c_dept'    => $dept
     ]);
   }

   public function showAllcourse()
   {
      echo "inside <br>";
      $users = Courses :: all();
    //  $users = Capsule::table('Teachers')->get();
      foreach ($users as $key ) {
             echo  $key->c_id."<br>";
                 }
   }
   public function updateCourse($id,$name='',$dept ='')
   {
     $users =    Courses::where('c_id','=', $id)
                  ->update(['c_name' => $name , 'c_dept' => $dept] );


   }
   public function deleteTeacher($id)
   {

      $users =  Courses ::where('c_id', $id)->delete();


   }

 }

 ?>
