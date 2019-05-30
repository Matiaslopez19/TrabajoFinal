<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    
    <head>
        <title><?php
        echo implode(";", $arrayUsuario);
        ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
    </head>
    <body>
        <div class="content">

                                                                    
                                                                    <h2 class="align-center">Home Cliente</h2>
								<hr />
								<form action="#" method="post">
									
                                                                    <br>
                                                                        <div class="field half">
                                                                        <ul class="actions align-center">
										<li><input type="button" class="button special" value="Agendar hora" onClick=" window.location.href='full.php' "></li> 
									</ul>
                                                                        </div>
                                                                        <div class="field half">
                                                                        <ul class="actions align-center">
										<li><input type="button" class="button special" value="Cerrar sesión" onClick=" window.location.href='Login.php' "></li> 
									</ul>
                                                                        </div>
                                                                        <div class="field half">
									<ul class="actions align-center">
										<li><input type="button" class="button special" value="Descargar historial" onClick=" window.location.href='Historial.php' "></li>
									</ul>
                                                                        </div>                 
								</form>
							</div>
        <?php
        // put your code here
        ?>
    </body>
</html>
