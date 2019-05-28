<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/main.css" />
    </head>
    <body>
    <form action="../cl.automaticar.controller/userController.php" method="post">
        <label>Correo electronico: </label>
        <input type="email" name="username" placeholder="Email"/>
        <br/>
        <label>Contraseña: </label>
        <input type="password" name="userpass" placeholder="Contraseña"/>
        <br/>
        <input type="submit" value="ingresar" id="user" class="Button special"/>
        <a href="CrearCuenta.php">Crear cuenta</a>
        <a href="RecuperarContrasenia.php">Recuperar contraseña</a>
        
    </form>
        </body>
</html>