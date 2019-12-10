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
<<<<<<< HEAD
            <th>Username</th>
=======
            <th>Nickname</th>
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
            <th>Password</th>
            <th>Rol</th>
            <th>Nombres</th>
            <th>Apellidos</th>
<<<<<<< HEAD
            <th></th>
=======
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
          </tr></thead>
          <?php foreach ($usuarios as $u):?>
          <tr>
            <td><?php echo $u['username'];?></td>
              <td><?php echo $u['password'];?></td>
              <td><?php echo $u['rol'];?></td>
              <td><?php echo $u['nombres'];?></td>
              <td><?php echo $u['apellidos'];?></td>
<<<<<<< HEAD

              <td>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_editar'>Editar</a>
                &nbsp;
                <a href="<?php echo base_url();?>Usuario/eliminar/<?php echo $u['username'];?>" class='btn_eliminar'>Eliminar</a>
                &nbsp;
                <?php var_dump($u['username']);?>
              </td>
            </tr>
=======
              <td><a href="<?php echo base_url();?>" class='btn'>Editar</a></td>
              <td><a href="<?php echo base_url();?>" class='btn'>Eliminar</a></td>
              </tr>
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
            <?php endforeach;?>

            </table>


      </article>

    </main>

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/misscripts.js"></script>

  </body>
</html>
