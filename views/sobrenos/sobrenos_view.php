
<?php

  require_once('controllers/sobrenos_controller.php');

  $listar = new Sobre();
  $row = $listar->Select();


 ?>

<section>
    <!--Cabeçalho do conteúdo-->
    <div id="cabecalho">
        <h2>Sobre nós</h2>
    </div>
    <!---->
    <!--Descrição da empresa-->
    <div id="conteudoSuperior">
        <div id="descricao">
            <?php echo ($row->descricaoSuperior); ?>
        </div>
    </div>
    <!---->
    <!--Visão, valores e missão-->
    <div id="conteudoMeio">
        <div id="missoes">
            <div class="missaoBox">
                <div class="img"><img src="<?php echo ($row->imgvisao); ?>" alt=""></div>
                <h3>Visão</h3>
                <?php echo ($row->visao); ?>
            </div>
            <div class="missaoBox">
                <div class="img"><img src="<?php echo ($row->imgvalores); ?>" alt=""></div>
                <h3>Valores</h3>
                <?php echo ($row->valores); ?>
            </div>
            <div class="missaoBox">
                <div class="img"><img src="<?php echo ($row->imgmissao); ?>" alt=""></div>
                <h3>Missão</h3>
                <?php echo ($row->missao); ?>
            </div>
        </div>
    </div>
    <!---->
    <div id="conteudoInferior">
        <!--Histórico da empresa-->
        <div id="historicoBox">
            <div class="historico">
                <h3><?php echo ($row->anoUm); ?></h3>
                <?php echo ($row->descricaoUm); ?>
            </div>
            <div class="historico">
                <h3><?php echo ($row->anoDois); ?></h3>
                <?php echo ($row->descricaoDois); ?>
            </div>
            <div class="historico">
                <h3><?php echo ($row->anoTres); ?></h3>
                <?php echo ($row->descricaoTres); ?>
            </div>
        </div>
        <!---->
        <!--Imagem ilustrativa-->
        <div id="imagemTourDreams">
            <img src="<?php echo ($row->imgempresa); ?>" alt="TourDreams" />
        </div>
        <!---->
    </div>
</section>
