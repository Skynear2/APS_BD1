<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="..\css\SocioCss.css" />
                <?php
                     include '..\home\conexao.php';
                ?>
	</head>
	<body background="..\imagens\socio.jpg">
		<form action="..\insert\insertSocio.php" method="post">
			<div id="titulo">
				<label> Cadastrar Socio </label>
			</div>	
			<div id="socio">
				<label>Nome</label>
                		<input type="text" name="nome"/>
				<label>CPF</label>
                		<input type="text" name="cpf"/>
                		<label>E-mail</label>
                		<input type="text" name="email"/>
                		<label>CEP</label>
                		<input type="text" name="cep"/>
				<label>Numero</label>
                		<input type="text" name="numero"/>
				<label>rua</label>
                		<input type="text" name="rua"/>
                                <label>Clube</label>
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
                                <label>Plano</label>
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
				<button type="submit" name="submit">Enviar</button>
            		</div>
		</form>
	</body>
</html>
