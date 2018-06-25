<html>
	<head>
            <title> FIFINHA </title>
            <link rel="stylesheet" type="text/css" href="..\css\LigaCss.css" />
	</head>
        <?php
            include '..\home\conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="..\editar\editarLiga.php" method="post">
                            <div id="titulo">
                                    <label> Ligas </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione a Liga: </label>
                                    <select name="liga">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM liga';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idLiga']; ?>"><?php echo $dados ['nomeLiga']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirLiga.php" method="post">
                            <div id="titulo">
                                    <label> Planos Socio Torcedor </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione a Liga: </label>
                                    <select name="liga">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM liga';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idLiga']; ?>"><?php echo $dados ['nomeLiga']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
