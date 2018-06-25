<?php
     
    include '..\home\conexao.php';

    $nome = $_REQUEST['nome'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $rua = $_REQUEST['rua'];
    
    $sql = "SELECT max(idClube) FROM clubes";
    $result = $db->query($sql);
    $idClube = $result->fetch_row();
    $idClube[0] = $idClube[0] + 1;
    
    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;
    
    $result = $db->query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, ruaEndereco) VALUES('$idEndereco[0]','$cep','$numero','$rua')");
    
    $result = $db->query("INSERT INTO `clubes` (`idClube`, `nomeClube`, `Endereco_idEndereco`) VALUES ('$idClube[0]', '$nome', '$idEndereco[0]')");
    
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
