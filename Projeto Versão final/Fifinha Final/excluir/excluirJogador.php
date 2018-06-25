
        <?php
     
            include '..\home\conexao.php';
            $algo = $_REQUEST['jogador'];
            $sql = "SELECT * FROM jogadores WHERE idJogador = '$algo'";
            $result = $db->query($sql);
            $dadosJogador = $result->fetch_row();
            
            $sql = "SELECT * FROM endereco WHERE idEndereco = '$dadosJogador[8]'";
            $result = $db->query($sql);
            $dadosEndereco = $result->fetch_row();
            
            $sql = "DELETE FROM jogadores WHERE idJogador = '$dadosJogador[0]'";
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
 