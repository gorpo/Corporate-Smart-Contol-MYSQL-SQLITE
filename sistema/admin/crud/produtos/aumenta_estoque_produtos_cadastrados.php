<?php 
session_start();




//codigo que reduz a quantidade de itens do estoque
//pega os dados do form e retorna a pagina repassando a pesquisa(buscar)
if(isset($_GET['id'])){
      $id = $_GET['id'];
      $quantidade = $_GET['quantidade'];
      $usuario = $_SESSION['nome'];
      echo $quantidade;
      $buscar = $_GET['buscar'];
      $pdo = new PDO('sqlite:../../../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE produtos SET quantidade = quantidade + $quantidade WHERE id = $id");
      $sql->execute();
      
      //volta para a pagina após executar as funçoes
      header("Location: produtos_cadastrados.php?buscar=$buscar");     
} 


?>