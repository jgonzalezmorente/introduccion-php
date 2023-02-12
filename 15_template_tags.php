<?php 
  include_once './includes/header.php'; 
?>

<?php

  function the_title() {
    echo "Título de mi Blog";
  }

  function the_date() {
    echo date('Y m d');
  }

  function the_author() {
    echo "Juan";
  }

?>

<div class="entrada">
  <h2><?php the_title(); ?></h2>
  <p>Publicado el <?php the_date() ?></p>
  <p>Escrito por <?php the_author() ?></p>
</div>