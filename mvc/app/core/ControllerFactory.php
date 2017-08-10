<?php

  class ControllerFactory
  {

    piblic function makeController($contr)
    {
        if (file_exists($contr)) {
           require_once "../app/controller/".$contr."php";
           return new $contr();
        }
        throw new Exception('Unknown Controller');

    }
  }
 ?>
