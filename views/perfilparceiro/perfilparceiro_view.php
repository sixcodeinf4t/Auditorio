<?php

    if($_SESSION['login'] != 'true')
    {
        header('location: homepage.php');
    }
    //Inclusão do arquivo controller para fazer o SELECT.
    require_once('controllers/parceiros_controller.php');

    /*Instância do objeto da controller e chamada para metódo de listagem
    dos registros*/
    $controller_parceiro = new ControllerParceiro();
    $parceiro = $controller_parceiro -> Buscar($_SESSION['idLogin']);


    $quarto = null;
    $diaria = null;
    $maxHosp = null;
    $qtdQuartos = null;
    $descricao = null;
    $idComodidade = null;
    $idQuarto=null;

    if(isset($_GET['modo'])){
        if($_GET['modo']=="visualizar"){
            $quarto= $resposta->quarto;
            $diaria= $resposta->diaria;
            $maxHosp= $resposta->maxHosp;

            $descricao= $resposta->descricao;
            $idQuarto= $resposta->idQuarto;

            require_once('controllers/quarto_controller.php');
            $listaComodidade = new ControllerQuarto();
            $rowComodidade = $listaComodidade->VisualizarComodidade($idQuarto);

            $counter = 0;

            while($counter < count($rowComodidade)){

                $idComodidade = $rowComodidade[$counter]->idComodidade;

                $counter++;
            }

        }
    }

?>

<div class="bgCadastroQuarto">
    <div class="modalCadastroQuarto">
        <div class="headerModal"><div id="tituloModal">Cadastro de Quarto</div><div class="btnFecharModal"><img onclick="fecharModalQuarto()" alt="" src="imagens/perfilparceiro/close-button.svg"></div></div>
        <div class="contModal">
            <form class="" name="frmInserir" action="router.php?controller=quarto&modo=inserir&idParceiro=<?php echo($_GET['idParceiro']); ?>" enctype="multipart/form-data" method="post">
                <div class="divForm">
                    <table class="tabelaForm">
                        <tr>
                            <input type="hidden" id="idHotel" name="idHotel" value="">
                            <td><label>Nome do Quarto</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Digite o nome do Quarto" type="text" name="txtNomeQuarto" value=""></td>
                        </tr>
                        <tr>
                            <td><label>Valor diário</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Diária" type="text" name="txtDiaria" value=""></td>
                        </tr>
                        <tr>
                            <td><label>Imagem</label></td>
                        </tr>
                        <tr>
                            <td><input required type="file" name="fileImg" value=""></td>
                        </tr>
                        <tr>
                            <td><label>Comodidades</label></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <?php

                                            require_once('controllers/perfilparceiro_controller.php');

                                            $listComodidade = new ControllerPerfilParceiro();
                                            $row = $listComodidade->Comodidades();

                                            $counter = 0;

                                            while($counter < count($row)){
                                            ?>
                                            <li>
                                                <p>
                                                    <input class="checkbox" type="checkbox" id="comodidadeQuarto<?php echo($row[$counter]->idComodidade); ?>" name="comodidadeQuarto[]" value="<?php echo($row[$counter]->idComodidade); ?>" />
                                                    <label class="labelCheck" for="comodidadeQuarto<?php echo($row[$counter]->idComodidade); ?>"><span class="ui"></span><?php echo($row[$counter]->nomeComodidade) ?></label>
                                                </p>
                                            </li>
                                            <?php
                                            $counter++;
                                        }

                                        ?>

                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="divForm">
                    <table class="tabelaForm">
                        <tr>
                            <td><label>Máximo de hóspedes</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Máx. de hóspedes" type="text" name="txtMaxHosp" value=""></td>
                        </tr>

                        <tr>
                            <td><label>Descrição do quarto</label></td>
                        </tr>
                        <tr>
                            <td><textarea name="txtDescricaoQuarto" placeholder="Descrição do Quarto" maxlength="300"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="btnCadastrarQuarto" value="CADASTRAR"></td>
                        </tr>

                    </table>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="bgCadastroQuarto1">
    <div class="modalCadastroQuarto">
        <div class="headerModal"><div id="tituloModal">Cadastro de Quarto</div><div class="btnFecharModal"><img onclick="fecharModalQuarto1()" alt="" src="imagens/perfilparceiro/close-button.svg"></div></div>
        <div class="contModal">
            <form class="" name="frmEditar" action="router.php?controller=quarto&modo=editar&idParceiro=<?php echo($_GET['idParceiro']); ?>&idQuarto=<?php echo($idQuarto); ?>" enctype="multipart/form-data" method="post">
                <div class="divForm">
                    <table class="tabelaForm">
                        <tr>
                            <input type="hidden" id="idHotel" name="idHotel" value="">
                            <td><label>Nome do Quarto</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Digite o nome do Quarto" type="text" name="txtNomeQuarto" value="<?php echo($quarto); ?>"></td>
                        </tr>
                        <tr>
                            <td><label>Valor diário</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Diária" type="text" name="txtDiaria" value="<?php echo($diaria); ?>"></td>
                        </tr>
                        <tr>
                            <td><label>Imagem</label></td>
                        </tr>
                        <tr>
                            <td><input type="file" name="fileImg" value=""></td>
                        </tr>
                        <tr>
                            <td><label>Comodidades</label></td>
                        </tr>
                        <tr>
                            <td>
                                <ul>
                                    <?php

                                            if(isset($_GET['modo']))
                                            {
                                                require_once('controllers/quarto_controller.php');
                                                $listComodidade = new ControllerQuarto();
                                                $rs = $listComodidade->VisualizarComodidade();

                                                $contador = 0;

                                                while($contador < count($rs))
                                                {
                                                    ?>
                                                    <li>
                                                        <p>
                                                            <input <?php if($rs[$contador]->status=="1"){ echo("checked"); } ?> class="checkbox" type="checkbox" id="comodidadeQuartoEditar<?php echo($rs[$contador]->idComodidade); ?>" name="comodidadeQuarto[]" value="<?php echo($rs[$contador]->idComodidade); ?>" />
                                                            <label class="labelCheck" for="comodidadeQuartoEditar<?php echo($rs[$contador]->idComodidade); ?>"><span class="ui"></span><?php echo($rs[$contador]->nomeComodidade) ?></label>
                                                        </p>
                                                    </li>
                                                    <?php
                                                    $contador += 1;
                                                }
                                            }
                                        ?>

                                </ul>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="divForm">
                    <table class="tabelaForm">
                        <tr>
                            <td><label>Máximo de hóspedes</label></td>
                        </tr>
                        <tr>
                            <td><input placeholder="Máx. de hóspedes" type="text" name="txtMaxHosp" value="<?php echo($maxHosp); ?>"></td>
                        </tr>

                        <tr>
                            <td><label>Descrição do quarto</label></td>
                        </tr>
                        <tr>
                            <td><textarea name="txtDescricaoQuarto" placeholder="Descrição do Quarto" maxlength="300"><?php echo($descricao); ?></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="btnCadastrarQuarto" value="CADASTRAR"></td>
                        </tr>

                    </table>
                </div>
            </form>
        </div>
    </div>
</div>


<section id="sectionEsquerda">
    <div id="contEsquerda">
        <div id="divSuperior">
            <div id="divFotoParceiro">
                <div id="trocarFoto">Trocar Foto</div>
                <img draggable="false" alt="" src="<?php echo($parceiro->caminhoImg); ?>">

            </div>
            <h2 id="nomeParceiro">
                <?php echo($parceiro->nome); ?><a href="router.php?controller=deslogar"><img title="Logout" src="imagens/perfilUsuario/logout.png" alt="Fazer Logout"></a><a href="router.php?controller=editarparceiro"><img title="Editar Perfil" src="imagens/perfilparceiro/edit.png" alt="Fazer Logout"></a>
            </h2>

        </div>


        <span id="titulo">Seus Hotéis</span>
        <div id="divTabela">
            <table class="sortable" cellspacing="0">

                <tr>
                    <th>
                        Nome
                    </th>
                    <th>
                        Qtd. de Estrelas
                    </th>
                    <th>
                        Tipo de Estadia
                    </th>
                    <th>
                        Opções
                    </th>
                </tr>
                <?php

                    require_once('controllers/perfilparceiro_controller.php');

                    $controller_perfilparceiro = new ControllerPerfilParceiro();
                    $rows = $controller_perfilparceiro->SelectHotel();

                    $cont = 0;

                    $idParceiro = $_GET['idParceiro'];
                    while($cont < count($rows)){

                        $idHotel = $rows[$cont]->idHotel;
                        $nomeHotel = "'".addslashes($rows[$cont]->hotel)."'";

                ?>
                <tr onclick="mostrarQuartos(<?php echo($idHotel); ?>,<?php echo($nomeHotel) ?>,<?php echo($idParceiro); ?>)">

                    <td id="nomeHotel">
                        <?php echo($rows[$cont]->hotel); ?>
                    </td>
                    <td>
                        <?php
                            $estrela = 0;

                            while($estrela < $rows[$cont]->qtdEstrelas){
                        ?>
                            <img alt="" src="imagens/promocoes/estrela.png">
                        <?php

                                $estrela++;
                            }

                        ?>
                    </td>
                    <td>
                        <?php echo($rows[$cont]->tipoEstadia); ?>
                    </td>
                    <td>
                        <img title="Editar hotel" draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/edit.png">
                        <a href="router.php?controller=hotel&modo=deletar&idHotel=<?php echo($rows[$cont]->idHotel) ?>&idParceiro=<?php echo($_GET['idParceiro']); ?>"><img title="Excluir hotel" draggable="false" class="imgOpcao" alt="" src="imagens/perfilparceiro/delete.png"></a>
                    </td>
                </tr>
                <?php
                        $cont++;
                    }

                ?>
            </table>
        </div>

        <a href="cadastrohotel.php?idParceiro=<?php echo($parceiro->idParceiro); ?>"><div id="btnRegistrar">
            <h1>Registrar Hotel</h1>
        </div></a>
    </div>
</section>

<section id="sectionDireita">
    <div id="contDireita">
        <h1>Quartos</h1>
        <div id="hotelClicado">
            <div id="mensagem">Clique em um hotel para ver seus quartos</div>
            <div class="contHotelClicado">

                <div class="divNomeQuarto"></div>
                <div class="divImgQuarto"><div class="mensagemFoto">Selecione um quarto para ver a foto</div><img alt="" src=""></div>
                <div class="divTblQuarto">

                </div>
                <div onclick="abrirModalQuarto()" class="btnAddQuarto"><h3>Registrar Quarto</h3></div>


            </div>
        </div>
    </div>
</section>
