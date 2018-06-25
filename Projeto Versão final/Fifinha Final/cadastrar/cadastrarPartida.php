<html>
	<head>
		<title> FIFINHA </TITLE>
		<link rel="stylesheet" type="text/css" href="..\css\partidaCss.css" />
                <?php
                     include '..\home\conexao.php';
                ?>
	</head>
	<body background="..\imagens\partida.jpg">
		<form action="..\insert\insertPartida.php" method="post">
			<div id="titulo">
				<label> Cadastrar Partida </label>
			</div>	
			<div id="partida">	
                                <label>Clube da Casa</label>
                                <select name="clubeCasa">
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
                                <label>Clube Visitante</label>
                                <select name="clubeVisitante">
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
                                <label>Liga</label>
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
                                <label>Data da Partida</label>
                		<input type="text" name="data"/>
				<button type="submit" name="submit">Enviar</button>
            		</div>
		</form>
	</body>
</html>
