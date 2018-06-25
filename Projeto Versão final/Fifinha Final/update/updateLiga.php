<?php
        include '..\home\conexao.php';
        
        $idLiga = $_POST['idLiga'];
        $nome = $_POST['nome'];
        $descricao = $_POST['descricao'];
        
        $sql = "UPDATE liga SET nomeLiga = '$nome', descricaoLiga = '$descricao' WHERE idLiga = '$idLiga'";
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
      