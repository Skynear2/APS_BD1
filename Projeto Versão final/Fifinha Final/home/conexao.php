<?php

    $db = new mysqli('localhost', 'root', '', 'fifinha');
    if (!$db) {
        die('Não foi possível conectar: '. mysql_error());
    }
 
   
?>
  