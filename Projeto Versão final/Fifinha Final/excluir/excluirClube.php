
        <?php
     
            include '..\home\conexao.php';
            $algo = $_REQUEST['clube'];
            $sql = "SELECT * FROM clubes WHERE idClube = '$algo'";
            $result = $db->query($sql);
            $dadosClube = $result->fetch_row();
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosClube[2]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();
            
            $sql = "DELETE FROM clubes WHERE idClube = '$dadosClube[0]'";
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
 