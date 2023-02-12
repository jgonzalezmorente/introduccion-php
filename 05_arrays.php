<?php 
  include_once './includes/header.php'; 
?>


<?php

  $frutas = array( 'manzana', 'naranjas', 'melón', 'uvas' );
  $frutas2 = [ 'manzana', 'naranjas', 'melón', 'uvas' ];

  array_push( $frutas, 'peras' );
  
  unset( $frutas[2] );

  echo "<pre>";
    var_dump( $frutas2 );
  echo "</pre>";

?>

