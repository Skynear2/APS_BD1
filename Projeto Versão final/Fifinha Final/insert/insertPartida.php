<?php
     
    include '..\home\conexao.php';

    $clubeCasa = $_REQUEST['clubeCasa'];
    $clubeVisitante = $_REQUEST['clubeVisitante'];
    $liga = $_REQUEST['liga'];
    $data = $_REQUEST['data'];
    
    $sql = "SELECT max(idPartida) FROM partida";
    $result = $db->query($sql);
    $idPartida = $result->fetch_row();
    $idPartida[0] = $idPartida[0] + 1;   
    
    $sql = "INSERT INTO partida(idPartida, dataPartida) VALUES('$idPartida[0]','$data')";
    $result = $db->query($sql);
    
    $sql = "INSERT INTO clube_has_partida(Clube_Casa, Clube_Visitante, Partida_idPartida, Liga_idLiga) VALUES('$clubeCasa', '$clubeVisitante', '$idPartida[0]','$liga')";
    $result = $db->query($sql);
    if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
                <a href="..\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Cadastro realizado com sucesso!!';
            ?>
            <a href="..\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        } 
        ?>
        
