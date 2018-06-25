<?php
     
    include '..\home\conexao.php';

    $algo = $_POST['idClube'];
    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
    $result = $db->query($sql);
    $dadosClube = $result->fetch_row();
    
    $nome = $_REQUEST['nome'];
    $cargo = $_REQUEST['cargo'];
    $salario = $_REQUEST['salario'];
    $cpf = $_REQUEST['cpf'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $rua = $_REQUEST['rua'];
    
    $sql = "SELECT max(idFuncionario) FROM funcionarios";
    $result = $db->query($sql);
    $idFuncionario = $result->fetch_row();
    $idFuncionario[0] = $idFuncionario[0] + 1;
    
    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;
    
    $result = $db->query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, ruaEndereco) VALUES('$idEndereco[0]','$cep','$numero','$rua')");
    
    $result = $db->query("INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `CargoFuncionario`, `SalarioFuncionario`, `cpfFuncionario`, `Endereco_idEndereco`, `Clube_idClube`) VALUES ('$idFuncionario[0]', '$nome', '$cargo', '$salario', '$cpf', '$idEndereco[0]', '$dadosClube[0]')"); 

            
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
