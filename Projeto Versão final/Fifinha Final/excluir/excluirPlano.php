
        <?php
     
            include '..\home\conexao.php';
            $algo = $_REQUEST['plano'];
            $sql = "SELECT * FROM planos WHERE idPlano = '$algo'";
            $result = $db->query($sql);
            $dadosPlano = $result->fetch_row();
            $sql = "DELETE FROM planos WHERE idPlano = '$dadosPlano[0]'";
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
 