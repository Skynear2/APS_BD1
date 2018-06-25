<?php
     
    include '..\home\conexao.php';
    
    $sql = "SELECT max(idCT)FROM ct";
    $result = $db->query($sql);
    $idCT = $result->fetch_row();
    $idCT[0] = $idCT[0] + 1;
    
    
    $algo = $_POST['idClube'];
    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
    $result = $db->query($sql);
    $idClube = $result->fetch_row();
    
    
    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;
    
    $nome = $_REQUEST['nome'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $rua = $_REQUEST['rua'];
    
    
    $result = $db->query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, ruaEndereco) VALUES('$idEndereco[0]','$cep','$numero','$rua')");
    
    $result = $db->query("INSERT INTO ct(idCT, nomeCt, Endereco_idEndereco, Clube_idClube) VALUES('$idCT[0]','$nome','$idEndereco[0]','$idClube[0]')");

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
