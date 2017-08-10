<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);echo "<br>";
use Illuminate\Database\Capsule\Manager as Capsule ;
 class Teacher extends Controller
 {
   protected $teacher ;
   public function __construct()
   {

      $this->std1 = $this->model("Teachers");
      //   echo $this->std1->name." is called <br>";
   }

   public function createTeacher($id =0 , $name = ''  , $address = '',$dept = '')
   {

      Teachers::create([
          't_id' => $id ,
          't_name' => $name ,
          't_address' =>$address ,
          't_dept'    => $dept
     ]);
   }

   public function showAllTeacher()
   {
      echo "inside <br>";
      $users = Teachers :: all();
    //  $users = Capsule::table('Teachers')->get();
      foreach ($users as $key ) {
             echo  $key->t_id."<br>";
                 }
   }
   public function updateTeacher($id,$name='',$address ='',$dept ='')
   {
     $users =    Teachers::where('t_id','=', $id)
                  ->update(['t_name' => $name ,'t_address' => $address, 't_dept' => $dept] );


   }
   public function deleteTeacher($id)
   {

      $users =  Teachers ::where('t_id', $id)->delete();


   }

 }

 ?>
