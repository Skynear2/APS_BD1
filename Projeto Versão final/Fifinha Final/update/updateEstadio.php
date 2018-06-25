<?php
        include '..\home\conexao.php';
        
        $idEstadio = $_POST['idEstadio'];
        $idEndereco = $_POST['idEndereco'];
        
        $nome = $_POST['nome'];
        $capacidade = $_POST['capacidade'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $rua = $_POST['rua'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', ruaEndereco = '$rua' WHERE idEndereco = '$idEndereco'";
        $result = $db->query($sql);
        $sql = "UPDATE estadio SET nomeEstadio = '$nome', capacidadeEstadio = '$capacidade' WHERE idEstadio = '$idEstadio'";
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
      