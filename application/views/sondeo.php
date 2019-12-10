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

        <table>
          <thead><tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Usuario</th>
            <th></th>

          </tr></thead>
          <?php foreach ($sondeos as $s):?>
          <tr>
              <td><?php echo $s['id'];?></td>
              <td><?php echo $s['fecha'];?></td>
              <td><?php echo $s['usuario'];?></td>
              <td>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_editar'>Editar</a>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_eliminar'>Eliminar</a>
                &nbsp;
              </td>


          </tr>
          <?php endforeach;?>

        </table>
      </article>

    </main>

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/misscripts.js"></script>

  </body>
</html>
