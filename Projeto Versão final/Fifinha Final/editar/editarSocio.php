<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="..\css\SocioCss.css" />
                <?php

                    include '..\home\conexao.php';
                    $algo = $_REQUEST['socio'];
                    $sql = "SELECT * FROM socios WHERE idSocio = '$algo'";
                    $result = $db->query($sql);
                    $dadosSocio = $result->fetch_row();

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosSocio[4]'";
                    $result = $db->query($sql);
                    $dadosEndereco = $result->fetch_row();
           
        ?>
	</head>
	<body background="..\imagens\socio.jpg">
		<form action="..\update\updateSocio.php" method="post">
			<div id="titulo">
				<label> Editar Socio </label>
			</div>	
			<div id="socio">
                                <input type="hidden" name="idSocio" value="<?php echo $dadosSocio[0]; ?>" />
				<label>Nome</label>
                		<input type="text" name="nome" value="<?php echo $dadosSocio[1]; ?>"/>
				<label>CPF</label>
                		<input type="text" name="cpf" value="<?php echo $dadosSocio[2]; ?>"/>
                		<label>E-mail</label>
                		<input type="text" name="email" value="<?php echo $dadosSocio[3]; ?>"/>
                                <input type="hidden" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>"/>
                                <label>CEP</label>
                                <input type="text" name="cep" value="<?php echo $dadosEndereco[1]; ?>"/>
                                <label>Numero</label>
                                <input type="text" name="numero" value="<?php echo $dadosEndereco[2]; ?>"/>
                                <label>rua</label>
                                <input type="text" name="rua" value="<?php echo $dadosEndereco[3]; ?>"/>
                                <label>Plano</label>
                                <select name="idPlano">
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
                                <label>Clube</label>
                                <select name="idClube">
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
				<button type="submit" name="submit">Enviar</button>
            		</div>
		</form>
	</body>
</html>
