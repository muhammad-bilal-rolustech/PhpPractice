<?php

  class ModelFactry
  {
     public function makeModel($model)
     {
        if (file_exists($model)) {
            require_once "../app/models/".$model.".php" ;
            return new $model();

        }
        throw new  Esxception("Unknown Model");

     }

  }

 ?>
