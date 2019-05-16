<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<html>
    <link rel="stylesheet" href="../assets/css/main.css" />
    <body>
    <form action="../cl.automaticar.controller/userController.php" method="post">
        <label>usuario: </label>
        <input type="text" name="username" placeholder="email"/>
        <br/>
        <label>clave: </label>
        <input type="password" name="userpass"/>
        <br/>
        <input type="submit" value="ingresar" id="user"/>
    </form>
        </body>
</html>