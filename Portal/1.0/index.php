<?php
  require('globals.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      require('webroot/conteudos/head/conteudo_head.php');
    ?>
  </head>
  <body>

    <!-- -->
    <div class="container-fluid div-total-topo">
      <?php 
        require('webroot/conteudos/topo/conteudo_topo.php');
      ?>
    </div>

    <!-- -->
    <div class="container-fluid div-total-meio">
      <?php 
        require('webroot/conteudos/meio/conteudo_inicial.php');
      ?>       
    </div>

    <!-- -->
    <div class="container-fluid div-total-rodape">
      <?php 
        require('webroot/conteudos/rodape/conteudo_rodape.php');
      ?>
    </div>
    
  </body>
</html>