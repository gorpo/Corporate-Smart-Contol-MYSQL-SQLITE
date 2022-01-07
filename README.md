# Corporate-Smart-Contol-V1
Corporate Smart Contol V1

-- Sistema com token para validação do banco de dados

Versao conta com chat funcionando e com sistema de personalização, foi deletado imagens e toda sujeira, mudada cor dos fundos da pagina principal, o chat é unificado, todos usam.

Foi modificado para criar bancos de dados com nome csc_ na frente para facilitar usar eles no phpmyadmin

Precisa por o codigo de increment em baixo de onde cria as tabelas nos arquivos login.php


-- CODIGO PARA TER OS NOMES DAS COLUNAS DAS TABELAS EM SQLITE
$pdo = new PDO('sqlite:../../databases/'.$email.'.db');
$select = $pdo->query('SELECT * FROM usuarios');
$total_column = $select->columnCount();
//var_dump($total_column);
for ($counter = 0; $counter < $total_column; $counter ++) {
    $meta = $select->getColumnMeta($counter);
    $column[] = $meta['name'];
}
print_r($column);


--CODIGO PARA SABER SE UMA TABELA ESTA VAZIA 
$pdo = new PDO('sqlite:../../databases/guilherme-paluch@hotmail.com.db');
$select = $pdo->query('SELECT * FROM usuarios');
$total_column = $select->fetchColumn();
//$teste = var_dump($total_column);
//echo $total_column[0];
if(is_null($total_column[0]))
    {
      echo 'oi';
    }

    ATENÇAO TROCAR @_session['email_cliente'] por $email_cliente_cadastrado nos login.php