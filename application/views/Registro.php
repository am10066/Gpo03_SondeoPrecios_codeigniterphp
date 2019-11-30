<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Registro de Usuario </h1>
    <u1>
        <?php foreach ($menu as $item): ?>
            <li> <a href="<?=$item['url']?>"><?= $item['title']?></a> </li>
        <?php endforeach;?>
    </u1>
    <?php echo validation_errors(); ?>

    <?php
        echo "<br>";
        echo "<br>";
    echo form_open('RegistroCtr/create',array('method'=>'POST'));

    echo form_label('NombreUsuario');
    echo form_input('username');
    
    echo "<br>";
    echo "<br>";
    echo form_label('Correo Electronico');
    echo form_input(array('type'=>'email', 'name'=>'email'));
    
    echo "<br>";
    echo "<br>";
    echo form_label('Contraseña');
    echo form_password('password');

    echo "<br>";
    echo "<br>";
    echo form_label('Confirmacion de contraseña');
    echo form_password('password_confirm');
    echo "<br>";
    echo "<br>";
    echo form_submit('submit','Enviar Datos');

    echo form_close();

    ?>
    <?=isset($msg) ? $msg:''?>
</body>
</html>