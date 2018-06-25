
        <?php
     
            include '..\home\conexao.php';
            $algo = $_REQUEST['estadio'];
            $sql = "SELECT * FROM estadio WHERE idEstadio = '$algo'";
            $result = $db->query($sql);
            $dadosEstadio = $result->fetch_row();
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosEstadio[3]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();
            $sql = "DELETE FROM estadio WHERE idEstadio = '$dadosEstadio[0]'";
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
 