<?php
        include '..\home\conexao.php';
        
        $idSocio = $_POST['idSocio'];
        $idEndereco = $_POST['idEndereco'];
        
        $idPlano = $_POST['idPlano'];
        $idClube = $_POST['idClube'];
        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        
        $cep = $_POST['cep'];
        $numero = $_POST['numero'];
        $rua = $_POST['rua'];
        
        $sql = "UPDATE endereco SET cepEndereco = '$cep', numeroEndereco = '$numero', ruaEndereco = '$rua' WHERE idEndereco = '$idEndereco'";
        $result = $db->query($sql);
        $sql = "UPDATE socios SET nomeSocio = '$nome', cpfSocio = '$cpf', emailSocio = '$email', plano_idPlano = '$idPlano', clube_idclube = '$idClube' WHERE idSocio = '$idSocio'";
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
      