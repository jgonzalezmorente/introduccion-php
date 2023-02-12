<?php 
  include_once './includes/header.php'; 
?>

<?php

  $frutas = [ 'manzana', 'naranjas', 'melón', 'uvas', 'mango' ];

  echo count( $frutas );

  echo '<br />';

  $mi_nombre = 'Juan Pablo de la Torre';
  echo strtoupper( $mi_nombre );
  
  echo '<br />';
  echo strtolower( $mi_nombre );

  echo '<br />';
  $password = '       passwordadfadsfffffffasdff';

  var_dump( trim( $password ) );

  if( strlen( trim($password)) < 10 ) {
    echo 'El password es muy débil';
  } else {
    echo 'El password es muy fuerte';
  }

?>