<?php
        include '..\home\conexao.php';
        
        $idPlano = $_POST['idPlano'];
        
        $nome = $_POST['nome'];
        $valor = $_POST['valor'];
        
        $sql = "UPDATE planos SET nomePlano = '$nome', valorPlano = '$valor' WHERE idPlano = '$idPlano'";
        $result = $db->query($sql);
        
        if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
<a href="..\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
             echo 'Alteração realizada com sucesso!!';
            ?>
            <a href="..\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            }
?>
      