<html lang="br">

          <?php

                    include '..\home\conexao.php';
                    $algo = $_REQUEST['clube'];
                    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
                    $result = $db->query($sql);
                    $dadosClube = $result->fetch_row();

                    $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosClube[2]'";
                    $result = $db->query($sql);
                    $dadosEndereco = $result->fetch_row();
           
        ?>
    
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
	 crossorigin="anonymous">

	<title> Editar Clube </TITLE>
</head>
<h1 style="font-family: sans-serif; font-weight: bold; color: dimgray; padding-left: 500px;">Editar Clube</h1>
<body background="..\imagens\clube.jpg">
	<form action="..\update\updateClube.php" method="post">
		<div class="container">
			<div style="padding-left: 300px" class="col-6">
				<div class="dropdown-menu">
					<a class="dropdown-item">1</a>

				</div>
                                <div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName"></label>
					<input type="hidden" class="form-control" name="idClube" value="<?php echo $dadosClube[0]; ?>">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Nome</label>
					<input type="text" class="form-control" name="nome" value="<?php echo $dadosClube[1]; ?>">
				</div>
                                <div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName"></label>
					<input type="hidden" class="form-control" name="idEndereco" value="<?php echo $dadosEndereco[0]; ?>">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CEP</label>
					<input type="text" class="form-control" name="cep" value="<?php echo $dadosEndereco[1]; ?>">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Numero</label>
					<input type="text" class="form-control" name="numero" value="<?php echo $dadosEndereco[2]; ?>">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">rua</label>
					<input type="text" class="form-control" name="rua" value="<?php echo $dadosEndereco[3]; ?>">
				</div>
				<button type="submit" class="btn btn-primary">Editar</button>

			</div>
		</div>
		</div>
	</form>

</body>

</html>