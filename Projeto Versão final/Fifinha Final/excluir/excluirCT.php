
        <?php
     
            include '..\home\conexao.php';
            $algo = $_REQUEST['ct'];
            $sql = "SELECT * FROM ct WHERE idCT = '$algo'";
            $result = $db->query($sql);
            $dadosCT = $result->fetch_row();
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosCT[2]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();
            
            $sql = "DELETE FROM ct WHERE idCT = '$dadosCT[0]'";
            $result = $db->query($sql);
            
            $sql = "DELETE FROM endereco WHERE idEndereco = '$dadosEndereco[0]'";
            $result = $db->query($sql);
            
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
 