<?php
    $msg = '';
    if(isset($_GET['ok']))
    {
        $msg = 'Formulário enviado com sucesso.';
    }
    if(isset($_GET['erro']))
    {
        $msg = 'Ocorreu um erro no envio do formulário. Tente novamente.';
    }
 ?>
<!--Conteúdo dos botões superiores-->
<section>
    <div class="conteudo bgconteudo">
        <div id="boxBotoes">
            <span><?php echo ($msg); ?></span>
            <table>
                <tr>
                    <td><img src="imagens/faleconosco/contato.png" alt="Contato" onclick="irContato()" onmousedown="return false"></td>
                    <td><img src="imagens/faleconosco/faq.png" alt="FAQ" onclick="irFAQ()" onmousedown="return false"onmousedown="return false"></td>
                    <td><img src="imagens/faleconosco/form.png" alt="Formulário" onclick="irForm()" onmousedown="return false"></td>
                </tr>
                <tr>
                    <td><h3 onclick="irContato()">Contato</h3></td>
                    <td><h3 onclick="irFAQ()">FAQ</h3></td>
                    <td><h3 onclick="irForm()">Ainda com dúvidas?</h3></td>
                </tr>
            </table>
        </div>
    </div>
</section>
<!---->
<!--Conteúdo do slider de conteúdo-->
<section id="slider">
        <!--Conteúdo das informações de contato-->
        <div class="conteudobox" id="contato">
            <table id="informacoesContato">
                
                <?php
                    require_once('controllers/informacao_controller.php');
                
                    $controller_informacao = new ControllerInformacao();
                    $rowss = $controller_informacao->Listar();
                
                    $conti = 0; 
                        
                    while ($conti < count($rowss)) {
                
                ?>
                <tr>
                    <td>Telefone</td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 1px #eee;"><?php echo($rowss[$conti]->telefone);?></td>
                </tr>
                <tr>
                    <td>Email</td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 1px #eee;"><?php echo($rowss[$conti]->emailTourdreams);?></td>
                </tr>
                <tr>
                    <td>Endereço</td>
                </tr>
                <tr>
                    <td style="border-bottom: solid 1px #eee;"><?php echo($rowss[$conti]->logradouro);?>, <?php echo($rowss[$conti]->numero);?>, <?php echo($rowss[$conti]->cidade); ?> - <?php echo($rowss[$conti]->uf);?></td>
                </tr>
                
                <?php
                        $conti++; 
                    }
                ?>
            </table>
        </div>
        <!---->
        <!--Conteúdo do FAQ-->
        <div class="conteudobox" id="faq">
            <div id="perguntasbox">
                
                <?php

                    require_once('controllers/categoriageral_controller.php');

                    $controller_faq = new ControllerCategoriaGeral();
                    $rows = $controller_faq -> Visualizar();
                    
                    $cont = 0;

                    while ($cont < count($rows)) {
                        
                        

                ?>
                
                <h3><?php echo($rows[$cont]->categoriaFaq); ?></h3>
                <ul>
                    <?php
                    
                    $rows2 = $controller_faq -> VisualizarPergunta($rows[$cont]->idCategoria);
                        
                        $contador = 0;
                        
                        while($contador<count($rows2)){
                            $idFaq = $rows2[$contador]->idFaq;
                            $pergunta = "'".addslashes($rows2[$contador]->pergunta)."'";
                            
                    
                    ?>
                    
                    <li onclick="abrirResposta(<?php echo($idFaq); ?>,<?php echo($pergunta); ?>)"><?php echo($rows2[$contador]->pergunta); ?></li>
                    
                    <?php
                            $contador++;
                        }
                    ?>
                </ul>
               <?php
                        $cont++;
                    }
                ?>
            </div>
            <div id="respostasbox">
                <h3>Como faço uma reserva?</h3>
                <div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.   </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <!---->
        <!--Conteúdo da seleção de categoria de formulário-->
        <div class="conteudobox" id="form">
            <div id="formbox">
                <div id="formcatbox">
                        <div class="formcat" onclick="abrirFormulario('geral')">
                            <img src="imagens/faleconosco/geral.png" alt="Geral" onmousedown="return false">
                            <h3>Geral</h3>
                        </div>
                        <div class="formcat" onclick="abrirFormulario('conta')">
                            <img src="imagens/faleconosco/conta.png" alt="Conta" onmousedown="return false">
                            <h3>Conta</h3>
                        </div>
                        <div class="formcat" onclick="abrirFormulario('reservas')">
                            <img src="imagens/faleconosco/reservas.png" alt="Reservas" onmousedown="return false">
                            <h3>Reservas</h3>
                        </div>
                        <div class="formcat" onclick="abrirFormulario('feedback')">
                            <img src="imagens/faleconosco/feedback.png" alt="Feedback" onmousedown="return false">
                            <h3>Feedback</h3>
                        </div>
                </div>
            </div>
        </div>
        <!---->
        <!--Conteúdo do formulário-->
        <div class="conteudobox" id="formcat">
            <div id="formulario">
                <h3><span id="voltarForm" onclick="irForm()">&#8592;</span><span>Formulário</span></h3>
                <form action="router.php?controller=faleconosco" method="POST">
                    <table>
                        <tr>
                            <td><label for="slcCategoria">Categoria</label></td>
                        </tr>
                        <tr>
                            <td>
                                <input name="slcCategoria" type="text" id="slcCategoria" readonly="true">
                            </td>
                        </tr>
                        <tr>
                            <td><label for="txtNome">Nome*</label></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="txtNome" placeholder="João da Silva" required></td>
                        </tr>
                        <tr>
                            <td><label for="txtEmail">Email*</label></td>
                        </tr>
                        <tr>
                            <td><input type="email" name="txtEmail" placeholder="joaodasilva@exemplo.com" required></td>
                        </tr>
                        <tr>
                            <td><label for="txtTelefone">Telefone*</label></td>
                        </tr>
                        <tr>
                            <td><input type="tel" name="txtTelefone" placeholder="(11) 1234-5678" required></td>
                        </tr>
                        <tr>
                            <td><label for="txtFeedback">Mensagem*</label></td>
                        </tr>
                        <tr>
                            <td><textarea name="txtFeedback"></textarea></td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="btnEnviarFeedback" value="Enviar"></td>
                        </tr>
                    </table>
                </form>
            </div>
            <!---->
        </div>
        <!---->
</section>
