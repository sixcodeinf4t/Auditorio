<?php

  class ControllerMelhoresDestinos{

    public function ListarMelhoresDestinos(){

      require_once('models/melhoresDestinos_class.php');
      $lstMelhores = new Melhores();
      return $lstMelhores->SelectMelhores();


    }



  }



 ?>
