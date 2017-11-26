<?php

    require_once('controllers/hotelquarto_controller.php');

    $controller_hotel = new ControllerHotel;
    $rs = $controller_hotel->BuscaHotel();
    $row2 = $controller_hotel->BuscaImagemHotel();
    $row3 = $controller_hotel->BuscaPrimeiraImagem();
    $row4 = $controller_hotel->BuscaComodidadesHotel();
    $row5 = $controller_hotel->BuscaQuarto();


    $cont = 0;

    while($cont<count($rs)){

?>

<!--Conteúdo superior-->
<section id="sectionCima">
    <div id="contCima">
        <!--Detalhes do Hotel-->
        <div id="divTitulos">
            <table id="tblTitulo">
                <tr>
                    <td id="tdnomeHotel"><?php echo($rs[$cont]->hotel); ?></td>
                    <td id="tdlocalHotel"><?php echo($rs[$cont]->logradouro); ?> N° <?php echo($rs[$cont]->numero); ?>, <?php echo($rs[$cont]->bairro); ?>, <?php echo($rs[$cont]->cidade); ?> - <?php echo($rs[$cont]->uf); ?></td>
                    <td id="tdEstrelas">
                        <?php

                            $i = 1;
                            while($i <= $rs[$cont]->qtdEstrelas){
                        ?>
                            <img draggable="false" alt="" src="imagens/busca/estrela.png">
                        <?php
                                $i++;
                            }
                        ?>
                    </td>
                    <td id="tdAvaliacao">9,6</td>
                </tr>
            </table>
        </div>
        <!---->
        <div id="divInformacoes">
            <!--Slider-->
            <div id="divisao1">
                <div id="divImgGrande">
                    <?php
                        $x= 0;

                        while($x < count($row3)){
                    ?>
                    <img draggable="false" alt="" src="<?php echo($row3[$x]->firstImg); ?>">

                    <?php
                        $x++;
                        }
                    ?>
                </div>
                <div id="carrossel">
                    <?php


                        $contador = 0;
                        while ($contador < count($row2)){
                    ?>
                    <div class="miniatura" onclick="trocaImg('<?php echo($row2[$contador]->caminhoImagem); ?>')"><img draggable="false" alt="" src="<?php echo($row2[$contador]->caminhoImagem); ?>"></div>
                    <?php
                        $contador++;
                    }
                    ?>
                </div>
            </div>
            <!---->
            <div id="divisao2">
                <div id="divHorarios">
                    <table id="tableHorarios">
                        <tr>
                            <td><img draggable="false" alt="" src="imagens/hotelquarto/calendarIn.png"><span>Check-in: <?php echo($rs[$cont]->checkin); ?></span></td>
                            <td><img draggable="false" alt="" src="imagens/hotelquarto/calendarOut.png"><span>Check-out: <?php echo($rs[$cont]->checkout); ?></span></td>
                        </tr>
                    </table>
                </div>

                <div id="divInfoHotel"><?php echo($rs[$cont]->descricao); ?></div>
            </div>

        <?php
            $cont++;
            }
        ?>
        <!-- Div de Comodidades -->
        <hr>
        <div id="divComodidades">

            <div class="separador">

                    <?php
                        $contador2 = 0;

                        while($contador2 < count($row4)){

                            $cur = 0;
                            foreach($row4 as $value){
                                if($cur == 0)
                                {
                                    echo '<ul>';
                                }
                                echo '    <li>' . $row4[$contador2]->comodidadeHotel . '</li>';
                                $contador2++;
                                if($cur == 5)
                                {
                                    echo '</ul>';
                                    $cur = 0;
                                }
                                else
                                {
                                    $cur++;
                                }
                            }


                        }
                    ?>

            </div>

        </div>
        <hr>
    </div>
    </div>
</section>
<!---->
<!--Conteúdo inferior-->
<section id="sectionBaixo">
    <div id="contBaixo">
        <?php
            $contador3 = 0;

            while($contador3<count($row5)){

                $preco = number_format($row5[$contador3]->vlrDiario,2,",","");
        ?>
        <!-- Sugestões de Quarto -->
        <div class="divQuarto">
            <div class="divInfoQuarto">
                <div class="imgQuarto">
                    <img draggable="false" alt="" src="<?php echo($row5[$contador3]->caminhoImagem); ?>">
                </div>
                <div class="divTituloQuarto">
                    <div class="nomeQuarto">
                        <?php echo($row5[$contador3]->nomeQuarto); ?>
                    </div>
                </div>
                <div class="textoQuarto"><?php echo($row5[$contador3]->descricao); ?></div>
                <div class="comodidadesQuarto">
                    <h1>Inclusos neste quarto</h1>

                    <div class="comodidadeDoQuarto">
                        <ul>
                            <?php

                                $row6 = $controller_hotel->BuscaComodidadesQuarto($row5[$contador3]->idQuarto);
                                $contador = 0;
                                while($contador < count($row6)){
                            ?>
                            <li><?php echo($row6[$contador]->comodidadeQuarto); ?></li>
                            <?php
                                    $contador++;
                                }
                            ?>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="divReservar"> <!-- botão para reservar -->
                <div class="divPreco">
                    <h3>Diárias de</h3>
                    <h1>R$ <?php echo($preco); ?></h1>
                </div>
                <div class="botaoReservar">
                    <a href="reserva.php"><h1>RESERVAR</h1></a>
                </div>
            </div>


        </div>
        <?php
                $contador3++;
            }
        ?>
    </div>
</section>
<!---->
