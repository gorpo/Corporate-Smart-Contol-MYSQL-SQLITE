<?php 
session_start();




//codigo que reduz a quantidade de itens do estoque
//pega os dados do form e retorna a pagina repassando a pesquisa(buscar)
if(isset($_GET['id'])){
      $id = $_GET['id'];
      $quantidade = $_GET['quantidade'];
      $email =  $_SESSION['email_login'];
      $senha = $_SESSION['senha_login'];
      $token = $_SESSION['token'];
      $usuario = $_SESSION['nome'];
      $buscar = $_GET['buscar'];
      try{
      $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE produtos SET quantidade = quantidade - $quantidade WHERE id = $id");
      $sql->execute();
      } catch (Exception $e) {
          echo 'Exceção capturada1: ',  $e->getMessage(), "\n";
      } 
      
      
      //cria uma tabela para armazenar as retiradas totais
      //$pdo = new PDO('sqlite:../../../../databases/'.$_SESSION['email_cliente'].'.db'); 
      //$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      //$sql = $pdo->prepare("CREATE TABLE IF NOT EXISTS retiradas_totais (produto VARCHAR(300),tipo_produto VARCHAR(300), cor VARCHAR(300), tamanho VARCHAR(300),quantidade VARCHAR(300),data_atual datetime");
      //$sql->execute();
      //
      try{
      //grava os dados doque o usuario retirou do estoque
      $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $usuario = $_GET['usuario'];
      $produto = $_GET['produto'];
      $tipo_produto = $_GET['tipo_produto'];
      $genero = $_GET['genero'];
      $imagem = $_GET['imagem'];
      $referencia = $_GET['referencia'];
      $cor = $_GET['cor'];
      $tamanho = $_GET['tamanho'];
      $codigo_barra = $_GET['buscar'];
      $lote = $_GET['lote'];
      $quantidade = $_GET['quantidade'];
      $pdo = new PDO('sqlite:../../../../databases/'.$_SESSION['email_cliente'].'.db');
      $sql = $pdo->prepare("INSERT INTO retiradas_$usuario (usuario, produto, tipo_produto, genero, imagem, referencia, cor, tamanho, codigo_barra, lote, quantidade, data_atual) VALUES (?,?,?,?,?,?,?,?,?,?,?,date('now'))");
      $sql->execute(array($usuario, $produto, $tipo_produto, $genero, $imagem, $referencia, $cor, $tamanho, $codigo_barra,$lote, $quantidade));
      } catch (Exception $e) {
          echo 'Exceção capturada1: ',  $e->getMessage(), "\n";
      } 

      //volta para a pagina após executar as funçoes
      header("Location: bip_quantidade.php?buscar=$buscar");     
} 


?>