<?php
        include '..\home\conexao.php';
        
        $idJogador = $_POST['idJogador'];
        $idEndereco = $_POST['idEndereco'];
        
        $idClube = $_POST['idClube'];
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $altura = $_POST['altura'];
        $peso = $_POST['peso'];
        $salario = $_POST['salario'];
        $posicao = $_POST['posicao'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $rua = $_POST['rua'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', ruaEndereco = '$rua' WHERE idEndereco = '$idEndereco'";
        $result = $db->query($sql);
        $sql = "UPDATE jogadores SET nomeJogador = '$nome', alturaJogador = '$altura', pesoJogador = '$peso', cpfJogador = '$cpf', salarioJogador = '$salario', posicaoJogador = '$posicao', clube_idClube = '$idClube' WHERE idJogador = '$idJogador'";
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
      