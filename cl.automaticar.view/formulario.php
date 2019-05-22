<!DOCTYPE HTML>

<html>
    <head>
        <title>Formulario</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body class="subpage">

        <header id="header">
            <div class="logo"><a href="index.php"> Index </a></div>
            <a href="#menu" class="toggle"><span>Menu</span></a>
        </header>
        
        <nav id="menu">
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="UserLogin.php">Login</a></li>
                <li><a href="fullcalendar.php">Calendario</a></li>
                <li><a href="generic.php">"generic.php" ¿Formulario?</a></li>
            </ul>
        </nav>


        <section id="one" class="wrapper style2">
            <div class="inner">
                <div class="box">
                    <div class="content">
<hr /> <!-- Linea para separar -->
                        <h2 id="elements">Formulario</h2>
                        <div class="row 200%">
                            <div class="6u 12u(medium)">

                                <!-- Formulario -->                               

                                <form method="post" action="#">
                                    <div class="row uniform">
                                        <div class="6u 12u(xsmall)">
                                            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                                        </div>
                                        <div class="6u 12u(xsmall)">
                                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                        </div>
                                        <!-- servicios que ofrece el taller -->
                                        <div class="12u">
                                            <div class="select-wrapper">
                                                <select name="demo-category" id="demo-category">
                                                    <option value="">- Servicio -</option>
                                                    <option value="1">Cambio de aceite</option>
                                                    <option value="1">linea 52</option>
                                                    <option value="1">linea 53</option>
                                                    <option value="1">linea 54</option>
                                                </select>
                                            </div>
                                        </div>
<!-- preguntar si es a domicilio, falta programar un form oculto que aparesca al poner "Si" -->
                                        <p>¿Servicio a domicilio?</p>
                                        <div class="4u 12u(small)">
                                            <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                            <label for="demo-priority-low">Si</label>
                                        </div>
                                        <div class="4u 12u(small)">
                                            <input type="radio" id="demo-priority-high" name="demo-priority">
                                            <label for="demo-priority-high">No</label>
                                        </div>
 <!-- cuadradito para preguntar si se envía copia al correo -->
                                        <div class="6u 12u(small)">
                                            <input type="checkbox" id="demo-copy" name="demo-copy">
                                            <label for="demo-copy">Enviar una copia a mi correo</label>
                                        </div>
<!-- cuadradito para preguntar si eres un robot -->
                                        <div class="6u 12u(small)">
                                            <input type="checkbox" id="demo-human" name="demo-human" checked>
                                            <label for="demo-human">Soy humano y no soy un robot</label>
                                        </div>
<!-- espacio para comentar -->
                                        <div class="12u">
                                            <textarea name="demo-message" id="demo-message" placeholder="Ingresa tu mensage" rows="6"></textarea>
                                        </div>
<!-- botones para enviar y rehacer  formulario -->
                                        <div class="12u">
                                            <ul class="actions">
                                                <li><input type="submit" value="Send Message" /></li>
                                                <li><input type="reset" value="Reset" class="alt" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>

                                <hr /> <!-- Linea para separar el formulario con lo demás -->

                                <form method="post" action="#">
                                    <div class="row uniform">
                                        <div class="9u 12u(small)">
                                            <input type="text" name="query" id="query" value="" placeholder="Matricula" />
                                        </div>
                                        <div class="3u 12u(small)">
                                            <input type="submit" value="Search" class="fit" />
                                        </div>
                                    </div>
                                </form>

                                <!-- Imagen -->
                                <h3>Imagen</h3>

                                <h4>Vehículo</h4>
                                <span class="image fit"><img src="images/auto azul.jpg" alt="" /></span>
                                <img src="images/auto azul.jpg" />

                                <hr />

<!-- estructura de código predefinido -->
                                <h3>Código predefinido</h3>
<pre>
    <code>
        
</code>
</pre>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        

<!-- otro formulario -->
        <footer id="footer" class="wrapper">
            <div class="inner">
                <section>
                    <div class="box">
                        <div class="content">                            
                            <hr />
                            <form action="#" method="post">
                                <div class="field half first">
                                    <label for="name">Nombre</label>
                                    <input name="name" id="name" type="text" placeholder="Nombre">
                                </div>
                                <div class="field half">
                                    <label for="email">Correo</label>
                                    <input name="email" id="email" type="email" placeholder="Correo">
                                </div>
                                <div class="field">
                                    <label for="dept">Lista</label>
                                    <div class="select-wrapper">
                                        <select name="dept" id="dept">
                                            <option value="">- Servicios -</option>
                                            <option value="1">Linea 152</option>
                                            <option value="1">Linea 153</option>
                                            <option value="1">Linea 154</option>
                                            <option value="1">Linea 155</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="field">
                                    <label for="message">Mensaje</label>
                                    <textarea name="message" id="message" rows="6" placeholder="Escriba aquí"></textarea>
                                </div>
                                <ul class="actions align-center">
                                    <li><input value="Enviar" class="button special" type="submit"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </section>
                <div class="copyright">
                    &copy; Untitled Design: <a href="https://templated.co/">TEMPLATED</a>. Images <a href="https://unsplash.com/">Unsplash</a> Video <a href="http://coverr.co/">Coverr</a>.
                </div>
            </div>
        </footer>

        <!-- Scripts -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/jquery.scrolly.min.js"></script>
        <script src="assets/js/jquery.scrollex.min.js"></script>
        <script src="assets/js/skel.min.js"></script>
        <script src="assets/js/util.js"></script>
        <script src="assets/js/main.js"></script>

    </body>
</html>