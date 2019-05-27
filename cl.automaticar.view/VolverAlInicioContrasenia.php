<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <center><h1>Contraseña cambiada</h1>
        <h2>En 5 segundos sera redirigido a Login</h2></center>
    
    
        <?php
            echo    '<script type="text/javascript">
         setTimeout("location.href=\'Login.php\'",5000)
         </script>'
        ?>
    </body>
</html>
