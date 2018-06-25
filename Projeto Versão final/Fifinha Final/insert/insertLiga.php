<?php
     
    include '..\home\conexao.php';

    $nome = $_REQUEST['nome'];
    $descricao = $_REQUEST['descricao'];
    
    $sql = "SELECT max(idLiga) FROM liga";
    $result = $db->query($sql);
    
    $idLiga = $result->fetch_row();
    $idLiga[0] = $idLiga[0] + 1;   
    
    $sql = "INSERT INTO liga(idLiga, nomeLiga, descricaoLiga) VALUES('$idLiga[0]','$nome','$descricao')";
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

