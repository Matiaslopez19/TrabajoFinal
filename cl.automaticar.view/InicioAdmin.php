<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>AutomatiCar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />

        <title></title>
    </head>
    <body>
        <div class="content">

                                                                    
                                                                    <h2 class="align-center">Home Administrador</h2>
								<hr />
								<form action="#" method="post">
									
                                                                    <br>
                                                                        <div class="field half">
                                                                        <ul class="actions align-center">
										<li><input type="button" class="button special" value="Ver horas reservadas" onClick=" window.location.href='.php' "></li> 
									</ul>
                                                                        </div>
                                                                        <div class="field half">
                                                                        <ul class="actions align-center">
										<li><input type="button" class="button special" value="Cerrar sesión" onClick=" window.location.href='Login.php' "></li> 
									</ul>
                                                                        </div>
                                                                        <div class="field half">
									<ul class="actions align-center">
										<li><input value="Subir PDF" class="button special" type="submit"></li>
									</ul>
                                                                        </div>    
                                                                        <div class="field half">
                                                                                    <input name="Dirección" id="direccion" type="file" placeholder="Dirección">
									</div>
                                                                        
								</form>
							</div>
        <?php
        // put your code here
        ?>
    </body>
</html>
