<html>
	<head>
            <title> FIFINHA </TITLE>
            <link rel="stylesheet" type="text/css" href="..\css\clubeCss.css" />
	</head>
        <?php
            include '..\home\conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="..\editar\editarClube.php" method="post">
                            <div id="titulo">
                                    <label> Clube </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Clube: </label>
                                    <select name="clube">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM clubes';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idClube']; ?>"><?php echo $dados ['nomeClube']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="..\excluir\excluirClube.php" method="post">
                            <div id="titulo">
                                    <label> Clube </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Clube: </label>
                                    <select name="clube">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM clubes';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idClube']; ?>"><?php echo $dados ['nomeClube']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
