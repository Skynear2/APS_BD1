<?php
        include '..\home\conexao.php';
        
        $idFuncionario = $_POST['idFuncionario'];
        $idEndereco = $_POST['idEndereco'];
        
        $nome = $_POST['nome'];
        $salario = $_POST['salario'];
        $cpf = $_POST['cpf'];
        $cargo = $_POST['cargo'];
        $idClube = $_POST['idClube'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $rua = $_POST['rua'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', ruaEndereco = '$rua' WHERE idEndereco = '$idEndereco'";
        $result = $db->query($sql);
        $sql = "UPDATE funcionarios SET nomeFuncionario = '$nome', salarioFuncionario = '$salario', cpfFuncionario = '$cpf', cargoFuncionario = '$cargo', Clube_idClube = '$idClube' WHERE idFuncionario = '$idFuncionario'";
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
      