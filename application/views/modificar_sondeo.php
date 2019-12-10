<!DOCTYPE html>
<html lang="es" >

  <?= $head ?>

  <body>

    <?= $header ?>


    <main>

      <?= $aside ?>

      <article>

        <h1> SONDEOS </h1>
      <br/>
     
      <form method= "post" action='<?php echo base_url()."Sondeo/modificarSondeo"; ?>'>
      
      <label for="ID">ID</label>
      </br>
      </br>
      <input type="number"  name="id" placeholder="ID" >
      </br>
      </br>
      <label for="ID">FECHA</label>
      </br>
      </br>
      <input type="datetime-local" name="fecha" placeholder="Fecha" >
      </br>
      </br>
      <label for="USUARIO">USUARIO</label>
      </br>
      </br>
      <input type="text" name="usuario" placeholder="Usuario" >
      </br>
      </br>
      <input type="submit" value="Guardar" >
  
        </form>
        </br>
        </br>

    


      </article>

    </main>

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/misscripts.js"></script>

  </body>
</html>
