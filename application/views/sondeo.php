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
<<<<<<< HEAD
=======
     
      <form method= "post" action='<?php echo base_url()."Sondeo/guardarSondeo"; ?>'>
      
      <label for="ID">ID</label>
      </br>
      </br>
      <input type="number" name="id" placeholder="ID" >
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

    
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

        <table>
          <thead><tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Usuario</th>
<<<<<<< HEAD
            <th></th>
=======
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

          </tr></thead>
          <?php foreach ($sondeos as $s):?>
          <tr>
              <td><?php echo $s['id'];?></td>
              <td><?php echo $s['fecha'];?></td>
              <td><?php echo $s['usuario'];?></td>
<<<<<<< HEAD
              <td>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_editar'>Editar</a>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_eliminar'>Eliminar</a>
                &nbsp;
              </td>
=======
              <td><a href="<?php echo base_url("Sondeo/modificarSondeo").'/'.$s['id'];?>" class='btn'>Editar</a></td>
              <td><a href="<?php echo base_url();?>" class='btn'>Eliminar</a></td>
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114


          </tr>
          <?php endforeach;?>

        </table>
      </article>

    </main>

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/misscripts.js"></script>

  </body>
</html>
