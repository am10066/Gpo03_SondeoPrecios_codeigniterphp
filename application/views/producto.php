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
<<<<<<< HEAD

=======
  
        <form method= "post" action='<?php echo base_url()."Producto/insertarProducto"; ?>'>
        
  
      <select id="nombre" name="nombre">
       <option value="0">Producto</option>
        <?php
          foreach ($producto_marca as $p) {
            echo '<option value=""'. $p->nombre .' ">'. $p->nombre .' '. $p->marca.'</option>';
          }
           
         ?>
       </select>


       <select id="nombre" name="nombre">
        <option value="0">Presentación</option>
        <?php
          foreach ($presentacion as $p) {
            echo '<option value=""'. $p->nombre .' ">'. $p->nombre .' '. $p->cantidad.' '. $p->unidad_de_medida.'</option>';
          }
           
         ?>
       </select>
       
      
        </br>
        </br>
        
    
       </select>
      
        </br>
        </br>
        <input type="submit"  value="Registar" >

        </form>
    
        </br>
        </br>
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
        <table>
          <thead><tr>
            <th>Nombre</th>
            <th>Presentacion</th>
            <th>Marca</th>
            <th>Cantidad</th>
            <th>Unidad</th>
<<<<<<< HEAD
            <th></th>
=======
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114
          </tr></thead>
          <?php foreach ($productos as $p):?>
          <tr>
            <td><?php echo $p['nombre_producto'];?></td>
              <td><?php echo $p['nombre_presentacion'];?></td>
              <td><?php echo $p['marca_producto'];?></td>
              <td><?php echo $p['cantidad_presentacion'];?></td>
              <td><?php echo $p['unidad_de_medida_presentacion'];?></td>
<<<<<<< HEAD
              <td>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_editar'>Editar</a>
                &nbsp;
                <a href="<?php echo base_url();?>" class='btn_eliminar'>Eliminar</a>
                &nbsp;
              </td>
=======
              <td><a href="<?php echo base_url();?>" class='btn'>Editar</a></td>
              <td><a href="<?php echo base_url();?>" class='btn'>Eliminar</a></td>
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

              </tr>
            <?php endforeach;?>

            </table>


      </article>

    </main>

    <script src="<?php echo base_url();?>js/jquery.js"></script>
    <script src="<?php echo base_url();?>js/misscripts.js"></script>
<<<<<<< HEAD
=======
    
>>>>>>> 137b4e881be5274e64ba8b496b5e901dc23e5114

  </body>
</html>
