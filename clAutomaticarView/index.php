<!DOCTYPE HTML>
<!--
        Transitive by TEMPLATED
        templated.co @templatedco
        Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<?php include '../clAutomaticarDAO/ServicioDAO.php'; ?>
<html>
    <head>
        <title>AutomatiCar</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="../assets/css/main.css" />


    </head>
    <body>
        <header id="header" class="alt">
            <div class="logo"><a href="index.php">AutomatiCar </a></div>
            <a href="#menu" class="toggle"><span>Menú</span></a>
        </header>

        <nav id="menu">
            <ul class="links">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="Login.php">Login Admin/Trabajador</a></li>
                <li><a href="#three">Nuestra empresa</a></li>
            </ul>
        </nav>
        <section id="banner" data-video="../images/banner">
            <div class="inner">
                <h1>AutomatiCar</h1>
                <p>Nuestro software te brindará el control y el manejo indispensable<br/>
                    que necesitas para tu<a href="#"> Taller mecánico </a></p>
                <a href="#one" class="button special scrolly">Servicios</a>
            </div>
        </section>
        <!-- One -->
        <div class="image fit">
            <img src="../images/pic02.jpg" alt="" />
        </div>
        <section id="one" class="wrapper style2">
            <div class="inner">
                <div class="grid-style">
                    <div>
                        <div class="box">

                            <div class="content">
                                <header class="align-center">
                                    <h2>Reparación</h2>
                                </header>
                                <hr />
                                <?php ServicioDAO::findAllReparacion() ?>
                            </div>
                        </div>
                    </div>
                    <div class="image fit">
                                <img src="../images/pic03.jpg" alt="" />
                            </div>
                    <div>
                        <div class="box">
                            
                            <div class="content">
                                <header class="align-center">
                                    <h2>Mantención</h2>
                                </header>
                                <hr />
                                <?php ServicioDAO::findAllMantencion() ?>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="two" class="wrapper style3">
        </section>
        <section id="three" class="wrapper style2">
            <div class="inner">
                <div>
                    <div class="box">
                        <div class="image fit">
                            <img src="../images/pic02.jpg" alt="" />
                        </div>
                        <div class="content">
                            <header class="align-center">
                                <h2>Nuestra empresa</h2>
                            </header>
                            <hr />
                            <label>
                                Actualmente en los talleres modernos se puede recurrir al uso de herramientas informáticas en infinidad de tareas. 
                                Desde consultar catálogos electrónicos a comprar recambios online, encontrar información técnica, usar herramientas de valoración o software de gestión.
                                No obstante, Las tecnologías que utilizan la mayoría de los talleres son de baja calidad, ya que, generalmente los talleres no cuentan con la implementación optima y/o actual. 
                                La tecnología avanza a pasos agigantados y los automóviles se ven contemplados dentro de estos pasos. Pocos talleres cuentan con la totalidad de implementación para atender todas las necesidades de un auto actual. 
                                Nuestro proyecto apunta a talleres mecánicos los cuales busquen automatizar sus procesos y aumentar su eficiencia, talleres los cuales no cuenten con softwares de gestión y se vean atareados con las planificaciones, en este caso, 
                                UrbanCar entra dentro de esta amplia bolsa de talleres, en la cual nuestra solución brindará asistencia y beneficios del tipo monetarios y horarios.
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="four" class="wrapper style3">
            <div class="inner">
                <header class="align-center">
                </header>
            </div>
        </section>
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/jquery.scrolly.min.js"></script>
        <script src="../assets/js/jquery.scrollex.min.js"></script>
        <script src="../assets/js/skel.min.js"></script>
        <script src="../assets/js/util.js"></script>
        <script src="../assets/js/main.js"></script>

    </body>

	<head>
		<title>AutomatiCar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../assets/css/main.css" />
                
                
	</head>
	<body>
			<header id="header" class="alt">
                            <div class="logo"><a href="index.php">AutomatiCar </a></div>
				<a href="#menu" class="toggle"><span>Menú</span></a>
			</header>
            
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Inicio</a></li>
                                        <li><a href="Login.php">Login Admin/Trabajador</a></li>
                                        <li><a href="#three">Nuestra empresa</a></li>
				</ul>
			</nav>
			<section id="banner" data-video="../images/banner">
				<div class="inner">
					<h1>AutomatiCar</h1>
					<p>Nuestro software te brindará el control y el manejo indispensable<br/>
					que necesitas para tu<a href="#"> Taller mecánico </a></p>
					<a href="#one" class="button special scrolly">Servicios</a>
				</div>
			</section>
		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					<div class="grid-style">
						<div>
							<div class="box">
								<div class="image fit">
									<img src="../images/pic02.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Reparación</h2>
									</header>
									<hr />
                                                                        <?php ServicioDAO::findAllReparacion()?>
								</div>
							</div>
						</div>
						<div>
							<div class="box">
								<div class="image fit">
									<img src="../images/pic03.jpg" alt="" />
								</div>
								<div class="content">
									<header class="align-center">
										<h2>Mantención</h2>
									</header>
									<hr />
                                                                        <?php ServicioDAO::findAllMantencion()?>
								</div>      
							</div>
						</div>
					</div>
				</div>
			</section>
                			<section id="two" class="wrapper style3">
			</section>
                <section id="three" class="wrapper style2">
				<div class="inner">
					<div>
						<div class="box">
							<div class="image fit">
								<img src="../images/pic02.jpg" alt="" />
							</div>
							<div class="content">
								<header class="align-center">
									<h2>Nuestra empresa</h2>
								</header>
								<hr />
                                                                <center>       
                                                                    <img src="../images/Logo2.PNG" alt="" width="163px" height="104px"/>
                                                                </center>    
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="four" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
					</header>
				</div>
			</section>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
                       
	</body>
</html>
