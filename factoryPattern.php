<?php
/**
*abstract class having abstract draw method forcing their childs to override the method.
*
*/
 abstract class Shape
 {

    abstract function draw();
 }
 /**
 *Rectangle class extends Shape class and override draw method .
 *
 */
 class Rectangle extends Shape
 {
    /**
    *Constructor of class.
    *
    */
    function __construct()
    {

      echo "Rectangle Constructor() <br>";
    }
    /**
    *This Function draws Rectangle.
    *
    */
    function draw()
    {

      echo "Recntangle draw() <br>";
    }
 }
 /**
 *CIRCLE class extends Shape class and override draw method .
 *
 */
 class Circle extends Shape
 {
   /**
   *Constructor of class.
   *
   */
   function __construct()
   {

     echo "Circle Constructor() <br>";
   }

   /**
   *This Function draws Circle.
   *
   */
   function draw()
   {

     echo "Circle draw() <br>";
   }
 }
 class Square extends Shape
 {
   /**
   *Constructor of class.
   *
   */
   function __construct()
   {

     echo "Square Constructor() <br>";
   }

   /**
   *This Function draws Square .
   *
   */
   function draw()
   {

     echo "Square draw() <br>";
   }
 }

 /**
 *Factory class to to hide object creation from user  and let subclasses to decide which
 *class object should create .
 *
 */
class Factory
{
  /**
  *Method deciding object creation on the basis of input by user .
  *
  *@param $shape input by user for deciding which shape to draw 
  */

  public function FactoryMethod($shape)
  {

      if ($shape == "Circle") {

         return new Circle();
      }elseif ($shape == 'Rectangle') {
         return new Rectangle();
      }elseif ($shape == 'Square') {
         return new Square();
      }

  }
}
 $obj = new Factory();
 $obj1  = $obj->FactoryMethod("Rectangle");
 $obj1->draw();







 ?>
