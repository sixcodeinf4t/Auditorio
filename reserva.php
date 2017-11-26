<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Reserva - TourDreams</title>
        <link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/reserva.css">
        <link rel="stylesheet" href="js/jqueryui/jquery-ui.css">
        <script src="js/jquery-3.2.1.min.js" charset="utf-8"></script>
        <script src="js/jqueryui/jquery-ui.min.js" charset="utf-8"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/script.js" charset="utf-8"></script>
        <script src="js/jquerymask/src/jquery.mask.js" charset="utf-8"></script>
        <link rel="icon" href="imagens/favicon.ico" />
    </head>
    <body>
        <?php
            require_once('views/header.php');                                   //Cabeçalho
            require_once('views/reserva/reserva_view.php');                     //Conteúdo
            require_once('views/footer.php');                                   //Rodapé
        ?>
    </body>
</html>