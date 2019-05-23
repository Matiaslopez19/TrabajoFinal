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
                                                                    <h2 class="align-center">Agendar Hora</h2>
								<hr />
								<form action="#" method="post">
									<div class="field half first">
										<label for="name">Número de patente</label>
										<input name="name" id="name" type="text" placeholder="Patente">
									</div>
									<div class="field half">
										<label for="email">E-mail</label>
										<input name="email" id="email" type="email" placeholder="Email">
									</div>
									<div class="field">
										<label for="dept">Department</label>
										<div class="select-wrapper">
											<select name="dept" id="dept">
												<option value="">- linea 170 -</option>
												<option value="1">linea 171</option>
												<option value="1">linea 172</option>
												<option value="1">linea 173</option>
												<option value="1">linea 174</option>
											</select>
										</div>
									</div>
									<div class="field">
										<label for="message">Message</label>
										<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
									</div>
									<ul class="actions align-center">
										<li><input value="Send Message" class="button special" type="submit"></li>
									</ul>
								</form>
							</div>
        <?php
        // put your code here
        ?>
    </body>
</html>
