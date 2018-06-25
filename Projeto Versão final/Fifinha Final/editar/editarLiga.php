<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="..\css\ligaCss.css" />
                
               <?php

                    include '..\home\conexao.php';
                    $algo = $_REQUEST['liga'];
                    $sql = "SELECT * FROM liga WHERE idLiga = '$algo'";
                    $result = $db->query($sql);
                    $dadosLiga = $result->fetch_row();

                ?>
                
                
	</head>
        
	<body background = "..\imagens\liga.jpg">
		<form action="..\update\updateliga.php" method="post">
			<div id="titulo">
				<label> Editar Liga </label>
			</div>	
			<div id="liga">
                            <input type="hidden" name="idLiga" value=" <?php echo $dadosLiga[0]; ?> "/>
				<label>Nome</label>
                                <input type="text" name="nome" value=" <?php echo $dadosLiga[1]; ?> "/>
				<label>Descrição da Liga</label>
                                <textarea rows="10" cols="30" name='descricao' > <?php echo $dadosLiga[2]; ?> </textarea>
				<button type="submit" name="submit">Enviar</button>
            </div>
		</form>
	</body>
</html>