<!DOCTYPE html>
<html lang="es" >

  <?= $head ?>

  <body>

    <?= $header ?>


    <main>

      <?= $aside ?>

      <article>
        <h1> REPORTES GRANOS BASICOS </h1>
        <br/>     
      <table>
          <thead><tr>
          <th>Id</th>
          <th>fecha</th>
          <th>sondeo</th>
          <th>nombreProducto</th>
          <th>nombrePresentacion</th>
            <th>marca_producto</th>
            <th>cantidad_presentacion</th>
            <th>unidad_medida_presentacion</th>
            <th>categoria</th>
            <th>tipo_de_establecimiento</th>
            <th>direccion</th>
            <th>municipio</th>
            <th>departamento</th>
            <th>precio</th>
            <th>usuario</th>
          </tr></thead>
          <?php foreach ($granobasico as $p):?>
          <tr>
            <td><?php echo $p['id'];?></td>
              <td><?php echo $p['fecha'];?></td>
              <td><?php echo $p['sondeo'];?></td>
              <td><?php echo $p['nombre-producto'];?></td>
              <td><?php echo $p['nombre-presentacion'];?></td>
              <td><?php echo $p['marca-producto'];?></td>
              <td><?php echo $p['cantidad-presentacion'];?></td>
              <td><?php echo $p['unidad-de-medida-presentacion'];?></td>
              <td><?php echo $p['categoria'];?></td>
              <td><?php echo $p['tipo_de_establecimiento'];?></td>
              <td><?php echo $p['direccion'];?></td>
              <td><?php echo $p['municipio'];?></td>
              <td><?php echo $p['departamento'];?></td>
              <td><?php echo $p['precio'];?></td>
              <td><?php echo $p['usuario'];?></td>
              </tr>
            <?php endforeach;?>

            </table>
            </article>

    </main>

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/misscripts.js"></script>

  </body>
</html>
