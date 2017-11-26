<section id="sectionUltimasReservas">
    <div id="contSuperior">
        <!--Imagem banner superior-->
        <div id="divBanner">
            <h2 class="wow fadeInUp" duration="0.5s" data-wow-delay="0.3s">Só aqui você encontra os melhores destinos</h2>
            <img class="wow fadeIn" duration="0.5s" alt="" src="imagens/melhoresDestinos/bg07.jpg"  onmousedown="return false">
        </div>
        <!---->
        <!--Recomendações baseadas nas últimas reservas-->
        <div class="divDivisoria">
            Baseado nas últimas reservas
        </div>
        <div class="divUltimas">
            <div id="segura">
                <section>
                    <?php
                        $cont = 0;
                        while($cont < 6){
                    ?>
                        <div class="divHotel">
                            <div class="fotoHotel">
                                <img alt="" src="imagens/melhoresDestinos/hotelExemplo.jpg"  onmousedown="return false">
                            </div>
                            <div class="contHotel">
                                <table class="tblInfoHotel">
                                    <tr>
                                        <td>
                                            Hollywood Tower Hotel
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Salvador - BA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Av. do Teste do Site
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php
                                                $star = rand(1,5);
                                                $i = 0;
                                                while($i < $star ){
                                            ?>
                                                <img alt="" src="imagens/busca/estrela.png">
                                            <?php
                                                    $i++;
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    <?php
                            $cont++;
                        }
                    ?>
                </section>
            </div>
        </div>
        <div id="btn-prev">&#60;</div>
        <div id="btn-next">&#62;</div>
        <!---->
    </div>
</section>
<!--Recomendações baseadas no perfil do usuário-->
<section id="sectionBaseadoPerfil">
    <div id="contInferior">
        <div class="divDivisoria" style="line-height:1;height:50px; margin-top: 10px;">
            Baseado no seu perfil
        </div>
        <div class="divUltimas">
            <div id="segura2">
                <section>
                    <?php
                        $cont = 0;
                        while($cont < 6){
                    ?>
                        <div class="divHotel">
                            <div class="fotoHotel">
                                <img alt="" src="imagens/melhoresDestinos/hotelExemplo2.jpg"  onmousedown="return false">
                            </div>
                            <div class="contHotel">
                                <table class="tblInfoHotel">
                                    <tr>
                                        <td>
                                            Hotel Boladão que não sei o Nome
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Fernando de Noronha - PE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Ilha Teste para Testar
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <?php
                                                $star = rand(1,5);
                                                $i = 0;
                                                while($i < $star ){
                                            ?>
                                                <img alt="" src="imagens/busca/estrela.png">
                                            <?php
                                                    $i++;
                                                }
                                            ?>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    <?php
                            $cont++;
                        }
                    ?>
                </section>
            </div>
        </div>
        <div id="btn-ant">&#60;</div>
        <div id="btn-prox">&#62;</div>
    </div>
</section>
<!---->
