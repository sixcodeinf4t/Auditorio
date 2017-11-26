<?php
require_once('../models/db_class.php');
//Instancia a classe Mysql_db.
$conexao_db = new Mysql_db;
//Chama o método conectar para estabelecer a conexão com o BD.
$conexao_db->conectar();
if (isset($_POST['busca'])) {
   $avaliacao = $_POST['busca'];
   $array = explode(",",$avaliacao);
   $sql = "INSERT INTO tbl_avaliacao (atendimento, conforto, lazer, limpeza, localizacao, preco, idHotel, idCliente)
   VALUES ('".$array[0]."', '".$array[1]."', '".$array[2]."', '".$array[3]."', '".$array[4]."', '".$array[5]."', '".$array[6]."', '".$array[7]."')";

   mysql_query($sql);
}
?>
