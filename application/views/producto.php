<!DOCTYPE html>
<html lang="es" >

  <?= $head ?>

  <body>

    <?= $header ?>


    <main>

      <?= $aside ?>

      <article>

        <h1> PRODUCTOS </h1>
        <br/>

        <table>
          <thead><tr>
            <th>Nombre</th>
            <th>Presentacion</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Unidad</th>
            <th></th>
          </tr></thead>
          <?php foreach ($productos as $p):?>
          <tr>
            <td><?php echo $p['nombre_producto'];?></td>
              <td><?php echo $p['nombre_presentacion'];?></td>
              <td><?php echo $p['marca_producto'];?></td>
              <td><?php echo $p['cantidad_presentacion'];?></td>
              <td><?php echo $p['unidad_de_medida_presentacion'];?></td>
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
