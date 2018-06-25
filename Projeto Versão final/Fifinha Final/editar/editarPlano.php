<html>
    <head>
        <meta charset="UTF-8">
        <title>Fifinha</title>
        <link rel="stylesheet" type="text/css" href="..\css\PlanoCss.css" />
        <?php
     
            include '..\home\conexao.php';
            $algo = $_REQUEST['plano'];
            $sql = "SELECT * FROM planos WHERE idPlano = '$algo'";
            $result = $db->query($sql);
            $dadosPlano = $result->fetch_row();
           
        ?>
    </head>
    <body background="..\imagens\plano.jpg">
        <form id="plano" action="..\update\updatePlano.php" method="post">
        <input type="hidden" name="idPlano" value="<?php echo $dadosPlano[0]; ?>" />
        <label>Nome</label>
        <input type="text" name="nome" value="<?php echo $dadosPlano[1]; ?>"/>
	<label>Valor</label>
        <input type="text" name="valor" value="<?php echo $dadosPlano[2]; ?>"/>
        <button type="submit" name="enviar">Enviar</button>
        </form>
    </body>
</html>
