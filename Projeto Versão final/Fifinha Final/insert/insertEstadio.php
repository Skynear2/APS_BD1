<?php
     
    include '..\home\conexao.php';

    $algo = $_POST['idClube'];
    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
    $result = $db->query($sql);
    $dadosClube = $result->fetch_row();
    
    $nome = $_REQUEST['nome'];
    $capacidade = $_REQUEST['capacidade'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $rua = $_REQUEST['rua'];
    
    $sql = "SELECT max(idEstadio) FROM estadio";
    $result = $db->query($sql);
    $idEstadio = $result->fetch_row();
    $idEstadio[0] = $idEstadio[0] + 1;
    
    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;

    
    $result = $db->query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, ruaEndereco) VALUES('$idEndereco[0]','$cep','$numero','$rua')");
    
    $result = $db->query("INSERT INTO estadio(idEstadio, nomeEstadio, capacidadeEstadio, endereco_idEndereco, clube_idClube) VALUES('$idEstadio[0]','$nome','$capacidade','$idEndereco[0]', '$dadosClube[0]')");
    
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
