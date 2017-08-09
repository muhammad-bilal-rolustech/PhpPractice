<?php
ini_set("display_errors" ,true);
error_reporting(E_ALL);
 use Illuminate\Database\Eloquent\Model  as Eloquent ;

 class std //extends  Eloquent
 {

   public $id ;
   public $name ;
   public $degree ;
   public $address ;
   protected $fillable = ['id' , 'name' , 'degree' ,'address'];
   public function __construct($id = 0 ,$name = '' , $degree = '' ,$address = '' )
   {
     $this->name = $name ;
     $this->id= $id ;
     $this->degree = $degree ;
     $this->address = $address ;

   }
 }
 ?>
