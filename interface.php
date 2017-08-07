<?php
/**
*interface have two abstract methods setModel and getModel the class which will implement
*this intrface will have to define these fuunctions .
*
*/
interface Car
 {
    public function setModel($name);

    public function getModel();
 }
 /**
 *class have implement  car interface and has defined abstract methods setModel
 * and getModel .
 *
 */

class SpecificCar implements Car
 {
   /**
   *contains the model of car .
   *
   */

     private $model;
     /**
     *function sets the $model attribute of class .
     *
     */
     public function setModel($name)
     {
       $this -> model = $name;
     }
     /**
     *function returns the $model attribute of class .
     *
     *@return car model.
     */

     public function getModel()
     {
      return $this -> model;
     }
  }


 ?>
