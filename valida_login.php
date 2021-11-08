<?php
   session_start();

   $usuario_autenticado = false;

   $usuarios_app = array(
      array('email' => 'adm@adm.com', 'senha' => '565765546'),
   );

   foreach($usuarios_app as $user){
      if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
         $usuario_autenticado = true;
      }
   }

      if($usuario_autenticado){
         $_SESSION['autenticado'] = 'SIM';
         header('Location: home.php');
      }else{
         $_SESSION['autenticado'] = 'NAO';
         header('Location: index.php?login=erro');
      }
?>