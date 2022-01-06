<!-- @Gorpo Orko - 2020 -->

<?php




//dark_mode
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['dark_mode'] == 'dark_mode') {
    echo '<script type="text/javascript">
            var body = document.body;
            body.classList.add("dark-mode");
          </script>';
  }else{

  }
}


//fixar_cabecalho
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['fixar_cabecalho'] == 'fixar_cabecalho') {
    echo '<script type="text/javascript">
            var body = document.body;
            body.classList.add("layout-navbar-fixed");
          </script>';
  }else{

  }
}


//dropdown-legacy 
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['dropdown_legacy'] == 'dropdown_legacy') {
    echo '<script type="text/javascript">
            var dropdown-legacy  = document.getElementsByClassName("main-header");
           dropdown-legacy [0].classList.add("dropdown-legacy");
          </script>';
  }else{

  }
}


//sem_bordas
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['sem_bordas'] == 'sem_bordas') {
    echo '<script type="text/javascript">
            var main_header = document.getElementsByClassName("main-header");
            main_header[0].classList.add("border-bottom-0");
          </script>';
  }else{

  }
}


//menu_fechado
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['menu_fechado'] == 'menu_fechado') {
    echo '<script type="text/javascript">
            var body = document.body;
            body.classList.add("sidebar-collapse");
          </script>';
  }else{

  }
}




//menu_flat
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['menu_flat'] == 'menu_flat') {
    echo '<script type="text/javascript">
            var navsidebar = document.getElementsByClassName("nav-sidebar");
            navsidebar[0].classList.add("nav-flat");
          </script>';
  }else{

  }
}


//menu_legacy
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['menu_legacy'] == 'menu_legacy') {
    echo '<script type="text/javascript">
            var navsidebar1 = document.getElementsByClassName("nav-sidebar");
            navsidebar1[0].classList.add("nav-legacy");
          </script>';
  }else{

  }
}


//menu_compact 
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['menu_compact'] == 'menu_compact') {
    echo '<script type="text/javascript">
            var navsidebar2 = document.getElementsByClassName("nav-sidebar");
            navsidebar2[0].classList.add("nav-compact");
          </script>';
  }else{

  }
}


//submenu
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['submenu'] == 'submenu') {
    echo '<script type="text/javascript">
            var navsidebar3 = document.getElementsByClassName("nav-sidebar");
            navsidebar3[0].classList.add("nav-child-indent");
          </script>';
  }else{

  }
}


//submenu_esconder
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['submenu_esconder'] == 'submenu_esconder') {
    echo '<script type="text/javascript">
            var navsidebar4 = document.getElementsByClassName("nav-sidebar");
            navsidebar4[0].classList.add("nav-collapse-hide-child");
          </script>';
  }else{

  }
}


//desabilitar_auto_expand
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['desabilitar_auto_expand'] == 'desabilitar_auto_expand') {
    echo '<script type="text/javascript">
            var navsidebar5 = document.getElementsByClassName("main-sidebar");
            navsidebar5[0].classList.add("sidebar-no-expand");
          </script>';
  }else{

  }
}


//fixa_rodape
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['fixa_rodape'] == 'fixa_rodape') {
    echo '<script type="text/javascript">
            var body = document.body;
            body.classList.add("layout-footer-fixed");
          </script>';
  }else{

  }
}


//texto_corpo
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['texto_corpo'] == 'texto_corpo') {
    echo '<script type="text/javascript">
            var body = document.body;
            body.classList.add("text-sm");
          </script>';
  }else{

  }
}


//texto_barra_navegacao
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['texto_barra_navegacao'] == 'texto_barra_navegacao') {
    echo '<script type="text/javascript">
            var navsidebar6 = document.getElementsByClassName("main-header");
            navsidebar6[0].classList.add("text-sm");
          </script>';
  }else{

  }
}


//texto_logotipo
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['texto_logotipo'] == 'texto_logotipo') {
    echo '<script type="text/javascript">
            var navsidebar7 = document.getElementsByClassName("brand-link");
            navsidebar7[0].classList.add("text-sm");
          </script>';
  }else{

  }
}


//texto_barra_lateral
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['texto_barra_lateral'] == 'texto_barra_lateral') {
    echo '<script type="text/javascript">
            var navsidebar8 = document.getElementsByClassName("nav-sidebar");
            navsidebar8[0].classList.add("text-sm");
          </script>';
  }else{

  }
}


//texto_rodape
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['texto_rodape'] == 'texto_rodape') {
    echo '<script type="text/javascript">
            var navsidebar9 = document.getElementsByClassName("main-footer");
            navsidebar9[0].classList.add("text-sm");
          </script>';
  }else{

  }
}



//cor_barra_topo
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['cor_barra_topo'] != 'cor_barra_topo_off') {

    echo '<script type="text/javascript">
            document.getElementById("navbar_cor").classList.remove("navbar-white");
            document.getElementById("navbar_cor").classList.add("'.$row['cor_barra_topo'] .'");
          </script>';
  }else{

  }
}


//cor_logo
$pdo = new PDO('sqlite: ../../../../databases/'.$_SESSION['email_cliente'].'.db');
$sql = "SELECT * FROM customizar";
foreach($pdo->query($sql)as $row){
  if ($row['cor_logo'] != 'cor_barra_topo_off') {

    echo '<script type="text/javascript">
            //document.getElementById("cor_logo").classList.remove("navbar-white");
            document.getElementById("cor_logo").classList.add("'.$row['cor_logo'] .'");
          </script>';
  }else{

  }
}



?>
