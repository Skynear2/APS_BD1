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
                    $algo = $_REQUEST['jogador'];
                    $sql = "SELECT * FROM jogadores WHERE idJogador = '$algo'";
                    $result = $db->query($sql);
                    $dadosJogador = $result->fetch_row();

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosJogador[8]'";
                    $result = $db->query($sql);
                    $dadosEndereco = $result->fetch_row();
           
        ?>

	<title> FIFINHA </TITLE>
</head>
<h1 style="font-family: sans-serif; font-weight: bold; color: black; padding-left: 500px;">Editar Jogadores</h1>
<body background="..\imagens\didico.jpg" style="height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center">
	<form action="..\update\updateJogador.php" method="post">
		<div class="container">
			<div style="padding-left: 300px" class="col-6">
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="idJogador" value=" <?php echo $dadosJogador[0]; ?>">
						</div>
						<div class="form-group">
							<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Nome</label>
                                                        <input type="text" class="form-control" name="nome" value=" <?php echo $dadosJogador[1]; ?>">
						</div>
						<div class="form-group">
							<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CPF</label>
							<input type="text" class="form-control" name="cpf" value=" <?php echo $dadosJogador[4]; ?>">
						</div>
						<div class="form-group">
							<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Peso</label>
							<input type="text" class="form-control" name="peso" value=" <?php echo $dadosJogador[3]; ?>">
						</div>
						<div class="form-group">
							<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Altura</label>
							<input type="text" class="form-control" name="altura" value=" <?php echo $dadosJogador[2]; ?>">
						</div>
						<div class="form-group">
							<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Posição</label>
							<input type="text" class="form-control" name="posicao" value=" <?php echo $dadosJogador[6]; ?>">
						</div>
						<div class="form-group">
							<label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Salario</label>
							<input type="text" class="form-control" name="salario" value=" <?php echo $dadosJogador[5]; ?>">
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
                                                <div class="form-group">
                                                    <input type="hidden" class="form-control" name="idEndereco" value=" <?php echo $dadosEndereco[0]; ?> ">
                                                </div>
                                                <div class="form-group">
                                                        <label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CEP</label>
                                                        <input type="text" class="form-control" name="cep" value=" <?php echo $dadosEndereco[1]; ?> ">
                                                </div>
                                                <div class="form-group">
                                                        <label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Numero</label>
                                                        <input type="text" class="form-control" name="numero" value=" <?php echo $dadosEndereco[2]; ?> ">
                                                </div>
                                                <div class="form-group">
                                                        <label style="color: black; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">rua</label>
                                                        <input type="text" class="form-control" name="rua" value=" <?php echo $dadosEndereco[3]; ?> ">
                                                </div>
                                                <button type="submit" class="btn btn-primary">Editar</button>

                                            </div>
		</div>
		</div>
	</form>

</body>

</html>