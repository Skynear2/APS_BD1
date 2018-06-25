<!doctype html>
<html lang="br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">
        
         <?php

                    include '..\home\conexao.php';
                    $algo = $_REQUEST['funcionario'];
                    $sql = "SELECT * FROM funcionarios WHERE idFuncionario = '$algo'";
                    $result = $db->query($sql);
                    $dadosFuncionario = $result->fetch_row();

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosFuncionario[5]'";
                    $result = $db->query($sql);
                    $dadosEndereco = $result->fetch_row();
           
        ?>

	<title> FIFINHA </TITLE>
</head>
<h1 style="font-family: sans-serif; font-weight: bold; color: black; padding-left: 500px;">Editar Funcionarios</h1>

<body background="..\imagens\func1.jpg">
	<form action="..\update\updateFuncionario.php" method="post">
		<div class="container">
			<div style="padding-left: 300px" class="col-6">
				<div class="dropdown-menu">
					<a class="dropdown-item">1</a>

				</div>
                                <div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName"></label>
					<input type="hidden" class="form-control" name="idFuncionario" value="<?php echo $dadosFuncionario[0]; ?>">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Nome</label>
					<input type="text" class="form-control" name="nome" value="<?php echo $dadosFuncionario[1]; ?>">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Cargo</label>
					<input type="text" class="form-control" name="cargo" value="<?php echo $dadosFuncionario[2]; ?>">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Salario</label>
					<input type="text" class="form-control" name="salario" value="<?php echo $dadosFuncionario[3]; ?>">
				</div>
                                <div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">CPF</label>
					<input type="text" class="form-control" name="cpf" value="<?php echo $dadosFuncionario[4]; ?>">
				</div>
                                <div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName"></label>
					<input type="hidden" class="form-control" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CEP</label>
					<input type="text" class="form-control" name="cep" value="<?php echo $dadosEndereco[1]; ?>"
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Numero</label>
					<input type="text" class="form-control" name="numero" value="<?php echo $dadosEndereco[2]; ?>">
				</div>
				<div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">rua</label>
					<input type="text" class="form-control" name="rua" value="<?php echo $dadosEndereco[3]; ?>">
				</div>
                                <div class="form-group">
					<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Clube</label>
                                        <select class="form-control" name="idClube">
                                            <option> </option>
                                                <?php
                                                    $sql = 'SELECT * FROM clubes';
                                                    $result = $db->query($sql,MYSQLI_ASSOC);
                                                    while($dados = $result->fetch_assoc()){ ?>
                                                    <option value ="<?php echo $dados ['idClube']; ?>"><?php echo $dados ['nomeClube']; ?>
                                                    </option> <?php
                                                    }
                                                ?>
                                        </select>
                            </div>
				<button type="submit" class="btn btn-primary">Editar</button>

			</div>
		</div>
		</div>
	</form>

</body>

</html>