<?php 
  include_once './includes/header.php'; 
?>

<?php
  function saludar() {
    echo 'Bienvenido al sitio <br />';
  }

  saludar();

  function suma() {
    echo 2 + 2 . '<br />';    
  }

  suma();
?>
