
        <?php
     
            include '..\home\conexao.php';
            $algo = $_REQUEST['funcionario'];
            $sql = "SELECT * FROM funcionarios WHERE idFuncionario = '$algo'";
            $result = $db->query($sql);
            $dadosFuncionario = $result->fetch_row();
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosFuncionario[5]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();
            
            $sql = "DELETE FROM funcionarios WHERE idFuncionario = '$dadosFuncionario[0]'";
            $result = $db->query($sql);
            
            $sql = "DELETE FROM endereco WHERE idEndereco = '$dadosEndereco[0]'";
            $result= $db->query($sql);
            
            if(!$result){
            echo 'Desculpe, Ocorreu um erro em nossos servidores, tente novamente mais tarde!';
            ?>
<a href="..\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
            <?php
        }
        else{
            echo 'Exclusão realizada com sucesso!!';
            ?>
            <a href="..\home\index.html"> <input type="submit" value="Voltar a pagina inicial" /> </a>
        <?php
            }
           
        ?>
 