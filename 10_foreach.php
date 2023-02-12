<?php 
  include_once './includes/header.php'; 
?>

<?php
  $frutas = [ 'manzana', 'naranjas', 'melón', 'uvas', 'mango' ];

  for( $i = 0; $i < count( $frutas ); $i++ ) {
    echo $frutas[$i] . '<br/>';
  }

  foreach( $frutas as $fruta ) {
    echo $fruta . '<br/>';;
  }
?>