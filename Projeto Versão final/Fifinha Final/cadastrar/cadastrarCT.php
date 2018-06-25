<!doctype html>
<html lang="br">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <?php
        
        include '..\home\conexao.php';
        
        ?>
	<title> FIFINHA </TITLE>
</head>
<h1 style="font-family: sans-serif; font-weight: bold; color:grey; padding-left: 500px;">Cadastrar CT</h1>

<body background="..\imagens\ct.jpg" style="height: 100%; background-repeat: no-repeat; background-size: cover; background-position: center">
	<form action="..\insert\insertCT.php" method="post">
		<div class="container">
			<div style="padding-left: 300px" class="col-6">
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputName">Nome</label>
					<input type="text" class="form-control" name="nome" placeholder="Nome">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputPassword4">CEP</label>
					<input type="text" class="form-control" name="cep" placeholder="CEP">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress">Numero</label>
					<input type="text" class="form-control" name="numero" placeholder="Numero">
				</div>
				<div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">rua</label>
					<input type="text" class="form-control" name="rua" placeholder="Brasil, Japão, Colômbia">
				</div>
                            <div class="form-group">
					<label style="color: white; font-family: sans-serif; font-size: large; font-weight: bold;" for="inputAddress2">Clube</label>
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
				<button type="submit" class="btn btn-primary">Cadastrar</button>
			</div>
		</div>
	</form>

</body>