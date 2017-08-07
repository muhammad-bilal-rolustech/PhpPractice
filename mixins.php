<?php

/**
 *
 */
trait CarItem
{
  function addToCart($n)
  {
    echo $n . "   Clothing Products added to Cart <br>";
  }
}
/**
 *
 */

 class Product
 {
   private $name ;
   private $price ;
   private $quantity ;

   function __construct($n ,$p,$q)
   {
     $this->name = $n ;
     $this->price = $p ;
     $this->quantity = $q;
   }
   function calcShipping()
   {
     return $this->quantity * price * ( 10 /100 );
   }
   function getQuantity()
   {
       return $this->quantity ;

   }
 }
 class ClothingProduct
 {
   use CarItem ;
   private $size ;
   private $color ;
   function __construct($s,$c)
   {
      $this->size = $s ;
      $this->color = $color ;

   }

 }
 $obj = new ClothingProduct(10,"Blue");
 $obj->addToCart(10);
 ?>
