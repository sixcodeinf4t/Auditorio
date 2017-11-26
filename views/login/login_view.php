<?php


    $nextpage = $_SERVER['HTTP_REFERER'];
    if(isset($_GET['melhoresdestinos'])){
        
            $nextpage = 'melhoresDestinos.php';

    }




?>

<section>

    <div class="contLeft">
        <div class="titulo">
            Você precisa Entrar para continuar
        </div>
        <div class="subtitulo">
            Já possuo um cadastro!

        </div>

        <form class="" action="router.php?controller=login&action=<?php echo($nextpage); ?>" method="post">
            <table class="tblEntrar">
                <tr>
                    <td><label>Login</label></td>
                </tr>
                <tr>
                    <td><input placeholder="Digite seu Login" value="" type="text" name="txtLogin" value=""></td>
                </tr>
                <tr>
                    <td><label>Senha</label></td>
                </tr>
                <tr>
                    <td><input placeholder="Digite sua Senha" type="password" name="txtSenha" value=""></td>
                </tr>
            </table>
            <div class="divBotao">
                <button type="submit" class="botao" name="btnLogin"><h1 id="nameBotao">ENTRAR</h1><h1 class="setinha"></h1></button>
            </div>
        </form>
    </div>
    <div class="contRight">
        <div class="divCadastro">
            <div class="titulo">
                Registrar-se
            </div>
            <div style="width:70%;margin-left:auto;margin-right:auto;line-height:30px;font-size:16pt;" class="subtitulo">
                Criar uma conta é simples. Insira seu endereço de e-mail, preencha o formulário a seguir e aproveite os benefícios.
            </div>
            <div class="subtitulo2">
                TER UMA CONTA PERMITIRÁ:
            </div>
            <div class="tblDesc">
                <table>
                    <tr>
                        <td><span class="check"></span></td>
                        <td>Efetuar reservas</td>
                    </tr>
                    <tr>
                        <td><span class="check"></span></td>
                        <td>Gerenciar seu perfil</td>
                    </tr>
                    <tr>
                        <td><span class="check"></span></td>
                        <td>Ter acesso ao histórico de reservas</td>
                    </tr>
                    <tr>
                        <td><span class="check"></span></td>
                        <td>Avaliar hotéis</td>
                    </tr>
                </table>
            </div>
            <div class="divBotao2">
                <a href="registroUsuario.php"><button class="botao2" name=""><h1 id="nameBotao2">CRIAR CONTA</h1><h1 class="setinha"></h1></button></a>
            </div>
        </div>
    </div>
</section>
