<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>PRUEBA LOCAL TZUNDA TZALEZ</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/estilos.css" rel="stylesheet">
       <!-- <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>--//Esto ya veremos-->
        <script src="js/nuestro.js"></script>
    </head>
    <body>
       <?php echo '<p>Hola Mundo y esos Aliens y el Campos de trigoooooo yeHHH trtrtr</p>'; 
       //te he comitado encima tio cata el historial juajajaja xk los estoy aciendo desde la web y aqui no se hacer pull
       //Se hacen auto en la version web me da ammi porque me ha aparecido del tiron actualizado
       //nose yo algo raro e catao
       
       //esta funcion sirve para que al acceder a los datos que envia el user en un form, no se puede inyectar ni scripts ni htlm 
       //vamos que para seguridad
       /* 
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
       Name: <input type="text" name="name">
        E-mail: <input type="text" name="email">
        Website: <input type="text" name="website">
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        </form>
        
       <?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";
//El formulario a sido enviado esto seria su procesado en el action
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data) {
  $data = trim($data);// quita espacios y tabulados etc
  $data = stripslashes($data);// quita los backslash
  $data = htmlspecialchars($data);// cadifica string para prevenir inyecciones
  return $data;
}
?>*/
       ?>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
    </body>
</html>
