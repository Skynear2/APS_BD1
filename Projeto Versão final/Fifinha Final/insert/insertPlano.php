<?php
     
    include '..\home\conexao.php';

    $nome = $_REQUEST['nome'];
    $valor = $_REQUEST['valor'];
    $sql = "SELECT max(idPlano) FROM planos";
    $result = $db->query($sql);
    $idPlano = $result->fetch_row();
    $idPlano[0] = $idPlano[0] + 1;   
    
    $sql = "INSERT INTO planos(idPlano, nomePlano, valorPlano) VALUES('$idPlano[0]','$nome','$valor')";
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

