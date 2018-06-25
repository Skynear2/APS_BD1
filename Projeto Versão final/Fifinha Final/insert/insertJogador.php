<?php
     
    include '..\home\conexao.php';

    $algo = $_POST['idClube'];
    $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
    $result = $db->query($sql);
    $dadosClube = $result->fetch_row();
    
    $nome = $_REQUEST['nome'];
    $peso = $_REQUEST['peso'];
    $posicao = $_REQUEST['posicao'];
    $salario = $_REQUEST['salario'];
    $altura = $_REQUEST['altura'];
    $cpf = $_REQUEST['cpf'];
    $cep = $_REQUEST['cep'];
    $numero = $_REQUEST['numero'];
    $rua = $_REQUEST['rua'];
    
    $sql = "SELECT max(idJogador) FROM jogadores";
    $result = $db->query($sql);
    $idJogador = $result->fetch_row();
    $idJogador[0] = $idJogador[0] + 1;
    
    $sql = "SELECT max(idEndereco) FROM endereco";
    $result = $db->query($sql);
    $idEndereco = $result->fetch_row();
    $idEndereco[0] = $idEndereco[0] + 1;
    
    $result = $db->query("INSERT INTO endereco(idEndereco, cepEndereco, numeroEndereco, ruaEndereco) VALUES('$idEndereco[0]','$cep','$numero','$rua')");
    
    $result = $db->query("INSERT INTO `jogadores` (`idJogador`, `nomeJogador`, `alturaJogador`, `pesoJogador`, `cpfJogador`, `salarioJogador`, `posicaoJogador`, `Clube_idClube`, `Endereco_idEndereco`) VALUES ('$idJogador[0]', '$nome', '$altura', '$peso', '$cpf', '$salario', '$posicao', '$dadosClube[0]', '$idEndereco[0]')"); 
            
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
