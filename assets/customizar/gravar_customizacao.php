<!-- @Gorpo Orko - 2020 -->

<?php

session_start();
$customizar = $_GET['customizar'];

if(!$_SESSION['nome']) {
  header('Location: ../../index.php');
  exit();
}
    

//seta o darkmode
if($customizar =='dark_mode'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET dark_mode='dark_mode' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='dark_mode_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET dark_mode='dark_mode_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//seta o fixar_cabecalho
if($customizar =='fixar_cabecalho'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET fixar_cabecalho='fixar_cabecalho' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='fixar_cabecalho_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET fixar_cabecalho='fixar_cabecalho_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//dropdown-legacy
if($customizar =='dropdown_legacy'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET dropdown_legacy='dropdown_legacy' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='dropdown_legacy_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET dropdown_legacy='dropdown_legacy_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//sem_bordas
if($customizar =='sem_bordas'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET sem_bordas='sem_bordas' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='sem_bordas_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET sem_bordas='sem_bordas_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//menu_fechado
if($customizar =='menu_fechado'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_fechado='menu_fechado' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='menu_fechado_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_fechado='menu_fechado_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//menu_flat
if($customizar =='menu_flat'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_flat='menu_flat' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='menu_flat_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_flat='menu_flat_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//menu_legacy
if($customizar =='menu_legacy'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_legacy='menu_legacy' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='menu_legacy_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_legacy='menu_legacy_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//menu_compact
if($customizar =='menu_compact'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_compact='menu_compact' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='menu_compact_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET menu_compact='menu_compact_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//submenu
if($customizar =='submenu'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET submenu='submenu' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='submenu_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET submenu='submenu_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//submenu_esconder
if($customizar =='submenu_esconder'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET submenu_esconder='submenu_esconder' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='submenu_esconder_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET submenu_esconder='submenu_esconder_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//desabilitar_auto_expand
if($customizar =='desabilitar_auto_expand'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET desabilitar_auto_expand='desabilitar_auto_expand' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='desabilitar_auto_expand_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET desabilitar_auto_expand='desabilitar_auto_expand_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//fixa_rodape
if($customizar =='fixa_rodape'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET fixa_rodape='fixa_rodape' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='fixa_rodape_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET fixa_rodape='fixa_rodape_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//texto_corpo
if($customizar =='texto_corpo'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_corpo='texto_corpo' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='texto_corpo_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_corpo='texto_corpo_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//texto_barra_navegacao
if($customizar =='texto_barra_navegacao'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_barra_navegacao='texto_barra_navegacao' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='texto_barra_navegacao_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET fixa_rodapetexto_corpo='texto_barra_navegacao_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//texto_logotipo
if($customizar =='texto_logotipo'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_logotipo='texto_logotipo' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='texto_logotipo_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_logotipo='texto_logotipo_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//texto_barra_lateral
if($customizar =='texto_barra_lateral'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_barra_lateral='texto_barra_lateral' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='texto_barra_lateral_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_barra_lateral='texto_barra_lateral_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }



//texto_rodape
if($customizar =='texto_rodape'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_rodape='texto_rodape' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='texto_rodape_off'){
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET texto_rodape='texto_rodape_off' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }




//cor_barra_topo
if($customizar =='cor_barra_topo'){
      $cor = $_GET['cor'];
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET cor_barra_topo='$cor' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='cor_barra_topo_off'){
      $cor = $_GET['cor'];
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET cor_barra_topo='$cor' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//cor_logo
if($customizar =='cor_logo'){
      $cor1 = $_GET['cor_logo'];
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET cor_logo='$cor1' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='cor_logo_off'){
      $cor1 = $_GET['cor_logo'];
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET cor_logo='$cor1' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


//cor_menu_esquerda
if($customizar =='cor_menu_esquerda'){
      $cor2 = $_GET['cor_menu_esquerda'];
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET cor_menu_esquerda='$cor2' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }
    
if($customizar =='cor_menu_esquerda_off'){
      $cor2 = $_GET['cor_menu_esquerda'];
      $pdo = new PDO('sqlite:../../databases/'.$_SESSION['email_cliente'].'.db');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = $pdo->prepare("UPDATE customizar SET cor_menu_esquerda='$cor2' WHERE id='1';");
      $sql->execute();
      header('Location: '.$_GET['old_url']);
    }


?>

