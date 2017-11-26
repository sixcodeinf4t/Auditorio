<?php

    class Reservas{

      public function __construct()
      {
          //Inclui o arquivo de conexão com o banco de dados.
          require_once('models/db_class.php');
          //Instancia a classe Mysql_db.
          $conexao_db = new Mysql_db;
          //Chama o método conectar para estabelecer a conexão com o BD.
          $conexao_db->conectar();
      }

      public function SelectReservas(){

        $sql="select * from vw_reservas";
        $select = mysql_query($sql);

        $cont = 0;
        while($rs=mysql_fetch_array($select)){

          $listarReservas[] = new Reservas();
          $listarReservas[$cont]->quarto=$rs['nome'];
          $listarReservas[$cont]->hotel=$rs['hotel'];
          $listarReservas[$cont]->data=$rs['dtTransacao'];
          $listarReservas[$cont]->valor=$rs['vlrTotal'];
          $listarReservas[$cont]->cliente=$rs['nomeCliente'];
          $listarReservas[$cont]->cpf=$rs['cpf'];
          $listarReservas[$cont]->status=$rs['status'];

          $cont++;

        }
return $listarReservas;
      }

    }


 ?>
