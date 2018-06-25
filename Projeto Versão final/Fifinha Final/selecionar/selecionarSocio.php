<html>
	<head>
            <title> FIFINHA </TITLE>
            <link rel="stylesheet" type="text/css" href="..\css\SocioCss.css" />
	</head>
        <?php
            include '..\home\conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="..\editar\editarSocio.php" method="post">
                            <div id="titulo">
                                    <label> Socio </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Socio: </label>
                                    <select name="socio">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM socios';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idSocio']; ?>"><?php echo $dados ['nomeSocio']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="..\excluir\excluirSocio.php" method="post">
                            <div id="titulo">
                                    <label> Socio </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Socio: </label>
                                    <select name="socio">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM socios';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idSocio']; ?>"><?php echo $dados ['nomeSocio']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
