
<!-- @Gorpo Orko - 2020 -->

<?php
session_start();
if(!$_SESSION['nome']) {
  header('Location: ../index.php');
  exit();
}
//inclui o arquivo de conexao com banco de dados


$email =  $_SESSION['email_login'];
$senha = $_SESSION['senha_login'];
$token = $_SESSION['token'];
$usuario = $_SESSION['nome'];



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Corporate Smart Control</title>
  <meta property="og:site_name" content="Corporate Smart Control"/>
  <meta property="og:title" content="Corporate Smart Control"/>
  <meta property="og:url" content="https://corporatesmartcontrol.com/"/>
  <meta property="og:description" content="Corporate Smart Control"/>
  <meta property="og:image" content="../../assets/images/logo.svg"/>
  <link rel="shortcut icon" href="../../assets/images/icon.png" />
  <script src="https://kit.fontawesome.com/a80232805f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="../../assets/css/style_claro_cinza.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../../assets/plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="" src="../../assets/images/logo.svg" height="600" width="600">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" id="navbar_cor"> 
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>



    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
           <!-- ================================================  SISTEMA DE PESQUISA  ================================================ -->
        <div class="navbar-search-block">
          <form method="get" class="form-inline" action="resultado_pesquisa.php">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="text" name="buscar" type="search" placeholder="Insira o nome ou o código de barras do produto" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search" value="Pesquisar">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      
      
      
    </ul>
  </nav>
  <!-- /.navbar -->


<!-- ================================================  MENUS DA ESQUERDA ================================================ -->
  <!-- Main Sidebar Container -->
  <aside class="menu_esquerda-link main-sidebar sidebar-dark-primary elevation-4 " id="cor_menu">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link" id="cor_logo">
      <img src="../../assets/images/logo.svg" alt="Corporate Smart Control" class="brand-image " style="opacity: .8">
      <span class="brand-text font-weight-light">⠀⠀</span>
    </a>

    <!-- Sidebar que exibe o nome de usuario e foto de quem esta logado-->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <?php
            $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
            $sql = 'SELECT * FROM usuarios ';
            foreach($pdo->query($sql)as $row){
                if($row["usuario"] == $_SESSION['usuario']){
                echo '<img src="../../assets/images/usuarios/'.$row['imagem'].'" class="img-circle elevation-2" alt="User Image">';
                echo '</div>';
                echo '<div class="info">';
                echo '<a href="" class="d-block">'.$row['nome'].'</a>';      
            }}
            ?>
        </div>
      </div>


    <!-- ================================================  MENUS DA ESQUERDA ================================================ -->
<?php 
include('menu.php'); 
include('customiza.php'); 
?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">PRODUTOS</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="logout.php">Logout</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
     


<! -- ================================================  INFORMAÇÕES DA DASHBOARD DE PRODUTOS ================================================   -->
<section class="content">
<div class="container-fluid">
<!-- ================================================ CAIXAS DAS INFORMAÇÕES DO TOPO ================================================ -->
        <div class="row">
          <!------------------------Quantidade de Produtos Cadastrados---------------------->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-shopping-cart"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total de Produtos Cadastrados</span>
                <span class="info-box-number"><?php
                  $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                  $sql = "SELECT produto FROM produtos";
                  $contador_produtos = 0;
                  foreach($pdo->query($sql)as $row){
                    $contador_produtos = $contador_produtos +1;
                  }
                  echo $contador_produtos;
                  ?> </span>
              </div>
          </div></div>
          <!------------------------Quantidade Produtos em baixa---------------------->
          <div class="clearfix hidden-md-up"></div>
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-cart-arrow-down"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><a href="" onclick="produtos_em_baixa()" style="color: inherit;">Total de Produtos em Baixa</a></span>
                <span class="info-box-number">
                  <?php
              $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
              $sql = "SELECT * FROM produtos";
              $contador = 0;
              $produtos_em_baixa = array();
              $tamanho_em_baixa = array();
              $cor_em_baixa = array();
              foreach($pdo->query($sql)as $row){
                  $produto =  $row['produto']; 
                  $tamanho =  $row['tamanho']; 
                  $cor =  $row['cor']; 
                  $quantidade = $row['quantidade'];
                  if($quantidade <= 5){
                    $contador = $contador + 1;
                    $produtos_em_baixa[]  =  $produto;
                    $tamanho_em_baixa[]  =  $tamanho;
                    $cor_em_baixa[]  =  $cor;
                  }
                  
              }
              echo $contador;
              //echo json_encode($produtos_em_baixa, JSON_UNESCAPED_UNICODE);
            ?>  
                </span>
          </div></div></div>

          <script type="text/javascript">/* POP UP INFORMANDO PRODUTOS EM BAIXA */
          function produtos_em_baixa() {
              var js_array = confirm([<?php
               //echo '"'.implode('\n', $produtos_em_baixa ).'"';
                $arr = array();
                for ($index = 0; $index < count($produtos_em_baixa); $index++) {
                    $arr[$index] = $produtos_em_baixa[$index]." | ".$tamanho_em_baixa[$index]." | ".$cor_em_baixa[$index];
                }
                echo '"'.implode('\n', $arr ).'"';
                ?>]);
              }
          </script>
          <!------------------------Total de Produtos Acima do Estoque---------------------->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cart-plus"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"> <a href="" onclick="produtos_acima_estoque()"  style="color: inherit;">Total de Produtos Acima do Estoque </a></span>
                <span class="info-box-number">
                  <?php
                    $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                    $sql = "SELECT * FROM produtos";
                    $contador = 0;
                    $produtos_acima_estoque = array();
                    $tamanho_acima_estoque = array();
                    $cor_acima_estoque = array();
                    foreach($pdo->query($sql)as $row){
                        $produto =  $row['produto']; 
                        $tamanho =  $row['tamanho']; 
                        $cor =  $row['cor']; 
                        $quantidade = $row['quantidade'];
                        if($quantidade >= 500){
                          $contador = $contador + 1;
                          $produtos_acima_estoque[]  =  $produto;
                          $tamanho_acima_estoque[]  =  $tamanho;
                          $cor_acima_estoque[]  =  $cor;
                        }
                        
                    }
                    echo $contador;
                    //echo json_encode($produtos_acima_estoque, JSON_UNESCAPED_UNICODE);
                  ?>  
                </span>
              </div></div> </div>

              <script type="text/javascript">/* POP UP INFORMANDO PRODUTOS EM BAIXA */
          function produtos_acima_estoque() {
              var js_array = confirm([<?php
                $arr = array();
                for ($index = 0; $index < count($produtos_acima_estoque); $index++) {
                    $arr[$index] = $produtos_acima_estoque[$index]." | ".$tamanho_acima_estoque[$index]." | ".$cor_acima_estoque[$index];
                }
                echo '"'.implode('\n', $arr ).'"';
                ?>]);
              }
          </script>

          <!------------------------PRODUTOS EM FALTA---------------------->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-bell"></i></span>
              <div class="info-box-content">
                <span class="info-box-text"><a href=""  onclick="produtos_em_falta()" style="color: inherit;">Total de Produtos em Falta</a></span>
                <span class="info-box-number">
                  <?php
                    $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                    $sql = "SELECT * FROM produtos";
                    $contador = 0;
                    $produtos_em_falta = array();
                    $tamanho_em_falta = array();
                    $cor_em_falta = array();
                    foreach($pdo->query($sql)as $row){
                        $produto =  $row['produto'];
                        $tamanho =  $row['tamanho']; 
                        $cor =  $row['cor']; 
                        $quantidade = $row['quantidade'];
                        if($quantidade == 0){
                          $contador = $contador + 1;
                          $produtos_em_falta[] = $produto;
                          $tamanho_em_falta[]  =  $tamanho;
                          $cor_em_falta[]  =  $cor;
                        }
                        
                    }
                    echo $contador;
                    //echo json_encode($produtos_em_falta, JSON_UNESCAPED_UNICODE);
                  ?> 
                </span>
              </div></div></div>

              <script type="text/javascript">/* POP UP INFORMANDO PRODUTOS EM BAIXA */
          function produtos_em_falta() {
              var js_array = confirm([<?php
                $arr = array();
                for ($index = 0; $index < count($produtos_em_falta); $index++) {
                    $arr[$index] = $produtos_em_falta[$index]." | ".$tamanho_em_falta[$index]." | ".$cor_em_falta[$index];
                }
                echo '"'.implode('\n', $arr ).'"';
                ?>]);
              }
          </script>
          
    </div>
    <!-- FINAL DAS CAIXAS DAS INFORMAÇÕES DO TOPO -->

<!-- ==================================================== CAMISA FPU50+ ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Camisetas FPU50+</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'camisa_fpu' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>

<!-- ==================================================== CAMISA REPELENTE ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Camisetas Repelentes</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'camisa_repelente' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>      


<!-- ==================================================== CAMISA ´TERMICA ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Camisetas Térmicas</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'camisa_termica' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div> 

<!-- ==================================================== CAMISA CICLISMO ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Camisetas Ciclismo</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'camisa_ciclismo' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div> 



<!-- ==================================================== LYCRAS ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Lycras </h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'lycra' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>


<!-- ==================================================== NEOLYCRAS ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Neoycras </h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'neolycra' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>


<!-- ==================================================== BERMMUDA ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Bermudas</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'bermuda' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>
      <!-- ==================================================== CALÇAS ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Calças </h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'calca' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>

      <!-- ==================================================== JAQUETAS ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Jaqueta</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'jaqueta' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>

      <!-- ==================================================== FLOAT ADULTO ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Float Adulto </h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'float_adulto' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>

      <!-- ==================================================== COLETE ADULTO HOMOLOGADO ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Colete Adulto Homologado</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'colete_adulto_homologado' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>

      <!-- ==================================================== COLETE ADULTO EAF ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Colete Adulto EAF</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'colete_adulto_eaf' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>
      <!-- ==================================================== COLETE ADULTO EAF ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Colete Adulto Kitesurf</h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'colete_adulto_kite' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>



<!-- ==================================================== COLETES KIDS ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Coletes Kids </h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'colete_kids' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>

<!-- ==================================================== FLOAT KIDS ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Floats Kids </h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'float_kids' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div>      

     
<!-- ==================================================== SAPATILHA KIDS ======================================================== -->
      <div class="card collapsed-card">
      <div class="card-header">
        <h3 class="card-title">Sapatilhas </h3>
        <div class="card-tools">
              <button type="button" class="btn btn-tool collapsed-box" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div></div>
        <div class="card-body p-0 " style="margin-left:20px; margin-right: 20px;">
                      <?php  
                        $pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
                        $sql = "SELECT * FROM produtos WHERE tipo_produto = 'sapatilha' ORDER BY produto ASC";
                        foreach($pdo->query($sql)as $row){
                        echo '<div class="progress-group">
                        '.$row['produto'].' | Tamanho:'.$row['tamanho'].' | Cor:'.$row['cor'].' | Gênero:'.$row['genero'].' | Lote:'.$row['lote'].' | Código SKU:'.$row['codigo_barra'].' | Referência:'.$row['referencia'].' | Valor:'.$row['valor'].'
                        <span class="float-right"><b>'.$row['quantidade'].'</b></span>
                        <div class="progress progress-sm">';
                        if($row['quantidade'] <= '5'){
                        echo '<div class="progress-bar bg-danger" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '6' and $row['quantidade'] <= '10'){
                        echo '<div class="progress-bar bg-warning" style="width: '.$row['quantidade'].'%"></div>';}
                        if($row['quantidade'] >= '10'){
                        echo '<div class="progress-bar bg-primary" style="width: '.$row['quantidade'].'%"></div>';}
                        echo '</div>
                              </div>';
                        }
                      ?>
      </div></div> 












</div></section>
<!-- /.content-header -->
 </div></div></div>

  <!-- /.content-wrapper -->
    <footer class="main-footer">
    <strong>Corporate Smart Control - v_1.0 - Copyright &copy; 2022</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- --------------------------------  JavaScript -------------------------------- -->






<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="../../assets/js/bootstrap.min.js"></script>

<!-- Jquery que faz o layout dos inputs e botoes adicionais ficar responsivo -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
function resizeSidebar() {
    var window_width = $(window).width();
    if ( window_width < 800 ) {
        $('.site-left-col').addClass('site-left-col-resized');
        $('.site-left-col-inner').addClass('site-left-col-inner-resized');
        $('.site-center-col').addClass('site-center-col-resized');
        $('.site-center-col-inner').addClass('site-center-col-inner-resized');
        $('.site-right-col').addClass('site-right-col-resized');
        $('.site-center-col').addClass('site-center-col-resized');
        $('.site-center-col-inner').addClass('site-center-col-inner-resized');
        $('.coluna-barrapesquisa').addClass('coluna-barrapesquisa-resized');
        $('.coluna-barrapesquisa-inner').addClass('coluna-barrapesquisa-inner-resized');
        $('.coluna-botaopesquisa').addClass('coluna-botaopesquisa-resized');
        $('.coluna-botaopesquisa-inner').addClass('coluna-botaopesquisa-inner-resized');
    } else {
        $('.site-left-col').removeClass('site-left-col-resized');
        $('.site-left-col-inner').removeClass('site-left-col-inner-resized');
        $('.site-center-col').removeClass('site-center-col-resized');
        $('.coluna-barrapesquisa-inner').removeClass('coluna-barrapesquisa-inner-resized');
        $('.coluna-barrapesquisa').removeClass('coluna-barrapesquisa-resized');
        $('.coluna-botaopesquisa-inner').removeClass('coluna-botaopesquisa-inner-resized');
        $('.coluna-botaopesquisa').removeClass('coluna-botaopesquisa-resized');
    }
}
jQuery(function(){
    resizeSidebar();
    
    $(window).resize(function(){
        resizeSidebar();
    });
});
</script>

<!-- jQuery -->
<script src="../../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../../assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../../assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../../assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../../assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../../assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../../assets/plugins/moment/moment.min.js"></script>
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../../assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/customizar/customizar.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../assets/js/pages/dashboard.js"></script>
</body>
</html>
<?php 
include_once('chat.php');
?>
