<!-- @Guilherme Paluch 2021 -->
<?php
session_start();

require '../databases/conexao_mysql.php';
//variaveis 
$ip = $_SERVER['REMOTE_ADDR']; 
$email =  $_SESSION['email_login'];
$senha = $_SESSION['senha_login'];
$token = $_SESSION['token'];



// Cria um cookie chamado token com o valor 'a3793243d083464baeff0bf59c24a56a'
setcookie('token', $token);
// Cria o mesmo cookie acima só que irá durar cinco dias
//setcookie('token', 'a3793243d083464baeff0bf59c24a56a', (time() + (5 * 24 * 3600)));
// Cria o novo cookie para durar seis horas
//setcookie('token', 'a3793243d083464baeff0bf59c24a56a', (time() + (6 * 3600)));


//se usuario ou senha estiverem vazios leva o usuario para o login novamente
if(empty($email) || empty($senha)) {
	header('Location: index.php');
	exit();
}


//verifica o usuario
$pdo = Database::conectar();
$sql = $pdo->prepare("SELECT * FROM usuarios ");
$sql->execute();
$info = $sql->fetchAll();
foreach($info as $key => $row){
	if($row['email'] != $email){
		session_destroy();
		header('Location: ./index.php');
		exit();
	}else{
		if($row['email'] == $email){

				//CRIA A TABELA DE USUARIOS NAO EXISTA
			    $pdo = new PDO('sqlite:../databases/'.$row['email_cliente'].'.db');
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `usuarios` (
			    `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
			    `nome` varchar(200) NOT NULL,
			    `sobrenome` varchar(200) NOT NULL,
			    `usuario` varchar(200) NOT NULL,
			    `telefone` varchar(200) NOT NULL,
			    `email` varchar(329) NOT NULL,
			    `email_cliente` varchar(329) NOT NULL,
			    `senha` varchar(999) NOT NULL,
			    `nivel` varchar(999) NOT NULL,
			    `prazo` varchar(999) NOT NULL,
			    `imagem` varchar(999) NOT NULL,
			    `cadastro` datetime NOT NULL,
			    `token` varchar(999) NOT NULL
			    );");
			    $sql->execute();
			    

			    //CRIA A TABELA DE CUSTOMIZAÇÃO
			    $pdo = new PDO('sqlite:../databases/'.$row['email_cliente'].'.db');
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `customizar` (
			      `id` int(11) NOT NULL,
				  `dark_mode` varchar(200) NOT NULL,
				  `fixar_cabecalho` varchar(200) NOT NULL,
				  `dropdown_legacy` varchar(200) NOT NULL,
				  `sem_bordas` varchar(200) NOT NULL,
				  `menu_fechado` varchar(200) NOT NULL,
				  `menu_flat` varchar(200) NOT NULL,
				  `menu_legacy` varchar(200) NOT NULL,
				  `menu_compact` varchar(200) NOT NULL,
				  `submenu` varchar(200) NOT NULL,
				  `submenu_esconder` varchar(200) NOT NULL,
				  `desabilitar_auto_expand` varchar(200) NOT NULL,
				  `fixa_rodape` varchar(200) NOT NULL,
				  `texto_corpo` varchar(200) NOT NULL,
				  `texto_barra_navegacao` varchar(200) NOT NULL,
				  `texto_logotipo` varchar(200) NOT NULL,
				  `texto_barra_lateral` varchar(200) NOT NULL,
				  `texto_rodape` varchar(200) NOT NULL,
				  `cor_barra_topo` varchar(200) NOT NULL,
				  `cor_logo` varchar(200) NOT NULL,
				  `cor_menu_esquerda` varchar(200) NOT NULL
			    );");
			    $sql->execute();
			    

			    //CRIA A TABELA DE INFORMACOES
			    $pdo = new PDO('sqlite:../databases/'.$row['email_cliente'].'.db');
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `informacoes` (
				  `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
				  `informacao` varchar(999) NOT NULL,
				  `confirmacao` varchar(999) NOT NULL,
				  `status` varchar(999) NOT NULL,
				  `data` datetime NOT NULL
			    );");
			    $sql->execute();
			    

			    //CRIA A TABELA DE LOGIN REPRESENTANTES
			    $pdo = new PDO('sqlite:../databases/'.$row['email_cliente'].'.db');
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `login_representantes` (
			      `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
				  `usuario` varchar(200) NOT NULL,
				  `imagem` varchar(200) NOT NULL,
				  `senha` varchar(329) NOT NULL,
				  `nome` varchar(999) NOT NULL,
				  `cadastro` datetime NOT NULL,
				  `nivel` varchar(999) NOT NULL
			    );");
			    $sql->execute();
			    

			    //CRIA A TABELA REPRESENTANTES
			    $pdo = new PDO('sqlite:../databases/'.$row['email_cliente'].'.db');
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `representantes` (
				  `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
				  `imagem` varchar(300) DEFAULT NULL,
				  `representante` varchar(300) DEFAULT NULL,
				  `nome_fantasia` varchar(300) DEFAULT NULL,
				  `cnpj` varchar(300) DEFAULT NULL,
				  `inscricao_estadual` varchar(300) DEFAULT NULL,
				  `email` varchar(300) DEFAULT NULL,
				  `telefone` varchar(300) DEFAULT NULL,
				  `endereco` varchar(300) DEFAULT NULL,
				  `cidade` varchar(300) DEFAULT NULL,
				  `estado` varchar(300) DEFAULT NULL,
				  `cep` varchar(300) DEFAULT NULL,
				  `data_atual` datetime DEFAULT NULL
			    );");
			    $sql->execute();
			    

			    //CRIA A TABELA ORDEM DE SERVICO
			    $pdo = new PDO('sqlite:../databases/'.$row['email_cliente'].'.db');
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `ordem_servico` (
				  `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
				  `produto` varchar(300) DEFAULT NULL,
				  `quantidade` varchar(300) DEFAULT NULL,
				  `data` datetime DEFAULT NULL
			    );");
			    $sql->execute();
			    

			    //CRIA A TABELA DE PRODUTOS
			    $pdo = new PDO('sqlite:../databases/'.$row['email_cliente'].'.db');
			    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `produtos` (
				  `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
				  `produto` varchar(200) NOT NULL,
				  `tipo_produto` varchar(200) NOT NULL,
				  `genero` varchar(200) NOT NULL,
				  `imagem` varchar(329) NOT NULL,
				  `referencia` varchar(999) NOT NULL,
				  `cor` varchar(329) NOT NULL,
				  `tamanho` varchar(999) NOT NULL,
				  `codigo_barra` varchar(999) NOT NULL,
				  `valor` varchar(999) NOT NULL,
				  `lote` varchar(999) NOT NULL,
				  `quantidade` varchar(999) NOT NULL,
				  `data` datetime NOT NULL
			    );");
			    $sql->execute();


			    include('../databases/dump_produtos.php');



			    //pega os dados no banco principal para gravar no banco do usuario
			    $pdo = Database::conectar();
			    $sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE email = '$email'  ");
			    $sql->execute();
			    $info = $sql->fetchAll();
			    foreach($info as $key => $row){
			    	$id_cadastrada = $row['id'];
			    	$nome_cadastrado = $row['nome'];
			    	$sobrenome_cadastrado = $row['sobrenome'];
			    	$usuario_cadastrado = $row['usuario'];
			    	$telefone_cadastrado = $row['telefone'];
			        $email_cadastrado = $row['email'];
			        $email_cliente_cadastrado = $row['email_cliente'];
			        $senha_cadastrada = $row['senha'];
			        $nivel_cadastrado = $row['nivel'];
			        $prazo_cadastrado = $row['prazo'];
			        $imagem_cadastrada = $row['imagem'];
			        $data_cadastrada = $row['cadastro']; 
			        $token_cadastrado = $row['token']; 
			    }Database::desconectar();


			    if($email_cadastrado == $email){
			        	//VALIDA O BANCO DE DADOS
			        	//verifica se a db esta vazia ou tem dados na tabela dos usurios
			        	$pdo = new PDO('sqlite:../databases/'.$email_cliente_cadastrado.'.db');
						$select = $pdo->query('SELECT * FROM usuarios');
						$total_column = $select->fetchColumn();
					    if(is_null($total_column[0])){
					        $verifica_db = '0';//vazia
					    }else{
					    	$verifica_db = '1';//tem dados
					    }


					    //se a db esta vazia ele cadastra somente o adm
					    if($verifica_db == '0'){
					    		//cria a tabela de login que armazena dados como ip dos usuarios caso nao exista
							    $pdo = new PDO('sqlite:../databases/'.$email_cliente_cadastrado.'.db');
							    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `user_$usuario_cadastrado` (
							    `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
							    `usuario` varchar(200) NOT NULL,
							    `senha` varchar(999) NOT NULL,
							    `ip` varchar(999) NOT NULL,
							    `data_atual` varchar(300) DEFAULT NULL,
							    `cor` varchar(999) NOT NULL
							    );");
							    $sql->execute();
							    

							    //CRIA A TABELA RETIRADAS DO USUARIO
							    $pdo = new PDO('sqlite:../databases/'.$email_cliente_cadastrado.'.db');
							    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
							    $sql = $pdo->prepare("CREATE TABLE  IF NOT EXISTS `retiradas_$usuario_cadastrado` (
								  `id` INTEGER PRIMARY KEY   AUTOINCREMENT,
								  `usuario` varchar(300) DEFAULT NULL,
								  `produto` varchar(300) DEFAULT NULL,
								  `tipo_produto` varchar(300) DEFAULT NULL,
								  `genero` varchar(300) DEFAULT NULL,
								  `imagem` varchar(300) DEFAULT NULL,
								  `referencia` varchar(300) DEFAULT NULL,
								  `cor` varchar(300) DEFAULT NULL,
								  `tamanho` varchar(300) DEFAULT NULL,
								  `codigo_barra` varchar(300) DEFAULT NULL,
								  `lote` varchar(300) DEFAULT NULL,
								  `quantidade` varchar(300) DEFAULT NULL,
								  `data_atual` varchar(300) DEFAULT NULL
							    );");
							    $sql->execute();

					    		//insere o usuario no banco de dados do chat
								$pdo = Database::conectar();
								$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
								$sql = $pdo->prepare("INSERT INTO `user_cpmvj` ( `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_image`, `user_status`,`user_datetime`, `user_verification_code`) VALUES 
								(?,?,?,?,?,?,?,?);");
								$sql->execute(array( $nome_cadastrado, $sobrenome_cadastrado, $email_cadastrado, $senha_cadastrada, $imagem_cadastrada, 'Offline', $data_cadastrada, bin2hex(random_bytes(16))));
								Database::desconectar();


					    		$pdo = new PDO('sqlite:../databases/'.$email_cliente_cadastrado.'.db');
					            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					            $sql = $pdo->prepare("INSERT INTO `usuarios` (`nome`,`sobrenome`,`usuario`, `telefone`, `email`,`email_cliente`, `senha`, `nivel`, `prazo`,`imagem`, `cadastro`, `token`) VALUES 
					            (?,?,?,?,?,?,?,?,?,?,?,?);");
					            $sql->execute(array($nome_cadastrado,$sobrenome_cadastrado, $usuario_cadastrado, $telefone_cadastrado, $email_cadastrado,$email_cliente_cadastrado, $senha_cadastrada, $nivel_cadastrado, $prazo_cadastrado, $imagem_cadastrada, $data_cadastrada, $token_cadastrado));


					            
							    //verifica a data de cadastro no banco de dados
								$pdo = Database::conectar();
								$sql = $pdo->prepare("SELECT cadastro FROM usuarios WHERE email = '$email' ");
								$sql->execute();
								$info = $sql->fetch();
								$expiracao = date("Y-m-d",strtotime($info[0] .'+29 days'));
								$hoje = date('Y-m-d');

								//bane usuario expirado
								if ($expiracao == $hoje) {
									echo 'Prazo do usuario expirou, sera redirecionado em 5 segundos...';
									header("refresh:5; url=./index.php"); 
								}else{
								//envia o usuario para a sessão
								$_SESSION['id'] = $row['id'];
								$_SESSION['email'] = $email;
								$_SESSION['email_cliente'] = $email_cliente_cadastrado;
								$_SESSION['nome'] = $nome_cadastrado;
								$_SESSION['usuario'] = $usuario_cadastrado;
								$_SESSION['imagem'] = $imagem_cadastrada;
								$_SESSION['nivel'] = $nivel_cadastrado;
								$_SESSION['data'] = $data_cadastrada;
								$_SESSION['prazo'] = $prazo_cadastrado;
								$_SESSION['token'] = $token_cadastrado;
								header('Location: crud/index.php');
								echo 'fim';
								}//else
						}//if		
				}//if cadastro do adm e criação dos bancos de dados dele



//VALIDA LOGIN APOS CADASTRO DO ADM	
//verifica se usuario/adm esta cadastrado no banco do adm		
if($verifica_db == '1'){	
	$pdo = new PDO('sqlite:../databases/'.$email_cliente_cadastrado.'.db');
	$sql = "SELECT * FROM usuarios WHERE token = '$token'";
	foreach($pdo->query($sql)as $row){
		if($row['email'] == $email){
			//envia o usuario para a sessão ou para o login
			$_SESSION['id'] = $row['id'];
			$_SESSION['email'] = $row['email'];
			$_SESSION['email_cliente'] = $row['email_cliente'];
			$_SESSION['nome'] = $row['nome'];
			$_SESSION['senha'] = $row['senha'];
			$_SESSION['usuario'] = $row['usuario'];
			$_SESSION['imagem'] = $row['imagem'];
			$_SESSION['nivel'] = $row['nivel'];
			$_SESSION['data'] = $row['cadastro'];
			$_SESSION['prazo'] = $row['prazo'];
			$_SESSION['token'] = $row['token'];
			header('Location: valida_login.php');
		}
	}
}
		    
//if, else e foreach do inicio do codigo...
		}//if
	}//else
}//foreach 
?>