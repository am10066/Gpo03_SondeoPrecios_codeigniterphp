<!DOCTYPE html>
<html lang="es" >

  <?= $head ?>

  <body>

    <?= $header ?>


    <main>

      <?= $aside ?>

      <article>



        <h1> USUARIOS </h1>
        <br/>

        <table>
          <thead><tr>
            <th>Username</th>
            <th>Password</th>
            <th>Rol</th>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th></th>
          </tr></thead>
          <?php foreach ($usuarios as $u):?>
          <tr>
            <td><?php echo $u['username'];?></td>
              <td><?php echo $u['password'];?></td>
              <td><?php echo $u['rol'];?></td>
              <td><?php echo $u['nombres'];?></td>
              <td><?php echo $u['apellidos'];?></td>

              <td>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_editar'>Editar</a>
                &nbsp;
                <a href="<?php echo base_url();?>Usuario/eliminar/<?php echo $u['username'];?>" class='btn_eliminar'>Eliminar</a>
                &nbsp;
                <?php var_dump($u['username']);?>
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
