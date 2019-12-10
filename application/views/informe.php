<!DOCTYPE html>
<html lang="es" >

  <?= $head ?>

  <body>

    <?= $header ?>


    <main>

      <?= $aside ?>

      <article>

        <h1> LISTA DE INFORMES A GENERAR </h1>
<br><br><br>
<h2> Categorias </h2>
<br><br>
        <ul id=”button”>
 <li><h3><a href="<?php echo base_url();?>GranosBasicos">Granos Basicos</a></h3></li>
 <li><h3><a href="<?php echo base_url();?>ProductosBasicos">Productos Basicos</a></h3></li>
 <li><h3><a href="<?php echo base_url();?>Harinas">Harinas</a></h3></li>
 <li><h3><a href="<?php echo base_url();?>FrutasVerduras">Frutas y Verduras</a></h3></li>
 <li><h3><a href="<?php echo base_url();?>UtilesEscolares">Utiles escolares</a></h3></li>
 </ul> 


      </article>

    </main>

   
    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/misscripts.js"></script>

  </body>
</html>
