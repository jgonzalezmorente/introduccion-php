<?php 
  include_once './includes/header.php'; 
?>

<?php

  $estudiante = [
    'nombre' => 'Juan',
    'apellido' => 'De la Torre',
    'pais' => 'México',
  ];
  
  echo $estudiante[ 'nombre' ] . " " . $estudiante[ 'apellido' ] . " del país " . $estudiante[ 'pais' ];

?>