<?php
     include_once '_sessao.php';

     isSession();

     include '../model/usuario_model.php';
     
     include '../view/header.php';

     include '../view/usuario/index.php';
    
     include '../view/footer.php';
?>