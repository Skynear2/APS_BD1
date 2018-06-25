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
            $algo = $_REQUEST['estadio'];
            $sql = "SELECT * FROM estadio WHERE idEstadio = '$algo'";
            $result = $db->query($sql);
            $dadosEstadio = $result->fetch_row();
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosEstadio[3]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();
           
        ?>
        
	<title> FIFINHA </TITLE>
</head>
<h1 style="font-family: sans-serif; font-weight: bold; color: dimgray; padding-left: 500px;">Editar Estadio</h1>
<body background="..\imagens\estadio.jpg" style="height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center">
	<form action="..\update\updateEstadio.php" method="post">
		<div class="container">
			<div style="padding-left: 300px" class="col-6">
				<div class="dropdown-menu">
					<a class="dropdown-item">1</a>

				</div>
                                <div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName"></label>
					<input type="hidden" class="form-control" name="idEstadio" value=" <?php echo $dadosEstadio[0]; ?> ">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Nome</label>
					<input type="text" class="form-control" name="nome" value=" <?php echo $dadosEstadio[1]; ?> ">
				</div>
				<div class="form-group">
						<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Capacidade</label>
						<input type="text" class="form-control" name="capacidade" value=" <?php echo $dadosEstadio[2]; ?> ">
				</div>
                                <div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4"></label>
                                        <input type="hidden" class="form-control" name="idEndereco" value=" <?php echo $dadosEndereco[0]; ?> ">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CEP</label>
					<input type="text" class="form-control" name="cep" value=" <?php echo $dadosEndereco[1]; ?> ">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Numero</label>
					<input type="text" class="form-control" name="numero" value=" <?php echo $dadosEndereco[2]; ?> ">
				</div>
				<div class="form-group">
					<label style="color: dimgray; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">rua</label>
					<input type="text" class="form-control" name="rua" value=" <?php echo $dadosEndereco[3]; ?> ">
				</div>
				<button type="submit" class="btn btn-primary">Editar</button>

			</div>
		</div>
		</div>
	</form>

</body>

</html>