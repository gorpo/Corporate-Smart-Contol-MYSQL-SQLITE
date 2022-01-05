<?php  




$pdo = new PDO('sqlite:../../databases/chat.db');
$select = $pdo->query("SELECT * FROM user_cpmvj  WHERE user_email = 'guilherme-paluch@hotmail.com'");
$total_column = $select->fetchColumn();
//$teste = var_dump($total_column);
echo $total_column[0];
if(is_null($total_column[0]))
    {
      echo 'oi';
    }





?>