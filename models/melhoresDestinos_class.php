<?php

  class Melhores{

    public function __construct()

    {
        //Inclui o arquivo de conexão com o banco de dados.
        require_once('models/db_class.php');
        //Instancia a classe Mysql_db.
        $conexao_db = new Mysql_db;
        //Chama o método conectar para estabelecer a conexão com o BD.
        $conexao_db->conectar();
    }

    public function SelectMelhores(){

      $sql = "select * from vw_melhoresdestinos;";
      $select = mysql_query($sql);

      if ($rs = mysql_fetch_array($select)) {

        $listaMelhores = new Melhores();
        $listaMelhores->caminhoImagem=$rs['caminhoImagem'];

      
        return $listaMelhores;


      }


    }

  }



 ?>
