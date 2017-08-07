<?php
  /**
  *class which do not allow users to make its objects more than 1.
  *
  *
  */
 class Singelton
 {
   /**
    * variable to return  Singelton class object  .
    *
    */
    static  private  $IsCreated ;//private static count = 0;
   /**
    *private Constructor of class due to which user can't make object of this
    *class.
    *
    */

   private function __construct()
   {
          echo "Constructor called <br>";
   }
   /**
   *this function is the only way to get Songelton object .
   *
   */
   static public  function CreateObject()
   {
       if (!isset(self :: $IsCreated )) {
          // echo "Object already created <br>";
          self :: $IsCreated = new Singelton();
        // count = 1;

       }
          return self :: $IsCreated ;


   }



 }


 $obj = Singelton :: CreateObject();
 $obj1  = Singelton :: CreateObject();
 $obj2 = Singelton :: CreateObject();


 ?>
