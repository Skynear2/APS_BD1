<html>
	<head>
            <title> FIFINHA </title>
            <link rel="stylesheet" type="text/css" href="..\css\PlanoCss.css" />
	</head>
        <?php
            include '..\home\conexao.php';
            $opcao = $_REQUEST['submit'];   
        ?>
	<body>
            <?php
            if($opcao == '1'){?>
                <form action="..\editar\editarPlano.php" method="post">
                            <div id="titulo">
                                    <label> Planos Socio Torcedor </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Plano: </label>
                                    <select name="plano">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM planos';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idPlano']; ?>"><?php echo $dados ['nomePlano']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="1">Alterar</button>
                    </form>
            <?php }
            else{
                ?>
            <form action="/Fifinha/excluir/excluirPlano.php" method="post">
                            <div id="titulo">
                                    <label> Planos Socio Torcedor </label>
                            </div>	
                            <div id="opcao">
                                    <label>Selecione o Plano: </label>
                                    <select name="plano">
                                    <option> </option>
                                    <?php
                                        $sql = 'SELECT * FROM planos';
                                        $result = $db->query($sql);
                                        while($dados = $result->fetch_assoc()){ ?>
                                        <option value ="<?php echo $dados ['idPlano']; ?>"><?php echo $dados ['nomePlano']; ?>
                                        </option> <?php
                                        }
                                    ?>
                                    </select>
                                    <button type="submit" name="opcao" value="2">Excluir</button>
            </form>
            <?php } ?>
	</body>
</html>
