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
                <li><a href="fullcalendar.php">Formulario</a></li>
            </ul>
        </nav>


        <section id="one" class="wrapper style2">
            <div class="inner">
                <div class="box">
                    <div class="content">

                        <h2 id="elements">Elements</h2>
                        <div class="row 200%">
                            <div class="6u 12u(medium)">

                                <!-- Form -->
                                <h3>Form</h3>

                                <form method="post" action="#">
                                    <div class="row uniform">
                                        <div class="6u 12u(xsmall)">
                                            <input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
                                        </div>
                                        <div class="6u 12u(xsmall)">
                                            <input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
                                        </div>
                                        <!-- Break -->
                                        <div class="12u">
                                            <div class="select-wrapper">
                                                <select name="demo-category" id="demo-category">
                                                    <option value="">- Category -</option>
                                                    <option value="1">Manufacturing</option>
                                                    <option value="1">Shipping</option>
                                                    <option value="1">Administration</option>
                                                    <option value="1">Human Resources</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- Break -->
                                        <div class="4u 12u(small)">
                                            <input type="radio" id="demo-priority-low" name="demo-priority" checked>
                                            <label for="demo-priority-low">Low Priority</label>
                                        </div>
                                        <div class="4u 12u(small)">
                                            <input type="radio" id="demo-priority-normal" name="demo-priority">
                                            <label for="demo-priority-normal">Normal Priority</label>
                                        </div>
                                        <div class="4u 12u(small)">
                                            <input type="radio" id="demo-priority-high" name="demo-priority">
                                            <label for="demo-priority-high">High Priority</label>
                                        </div>
                                        <!-- Break -->
                                        <div class="6u 12u(small)">
                                            <input type="checkbox" id="demo-copy" name="demo-copy">
                                            <label for="demo-copy">Email me a copy of this message</label>
                                        </div>
                                        <div class="6u 12u(small)">
                                            <input type="checkbox" id="demo-human" name="demo-human" checked>
                                            <label for="demo-human">I am a human and not a robot</label>
                                        </div>
                                        <!-- Break -->
                                        <div class="12u">
                                            <textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
                                        </div>
                                        <!-- Break -->
                                        <div class="12u">
                                            <ul class="actions">
                                                <li><input type="submit" value="Send Message" /></li>
                                                <li><input type="reset" value="Reset" class="alt" /></li>
                                            </ul>
                                        </div>
                                    </div>
                                </form>

                                <hr />

                                <form method="post" action="#">
                                    <div class="row uniform">
                                        <div class="9u 12u(small)">
                                            <input type="text" name="query" id="query" value="" placeholder="Query" />
                                        </div>
                                        <div class="3u 12u(small)">
                                            <input type="submit" value="Search" class="fit" />
                                        </div>
                                    </div>
                                </form>

                                <!-- Image -->
                                <h3>Image</h3>

                                <h4>Fit</h4>
                                <span class="image fit"><img src="images/pic01.jpg" alt="" /></span>
                                <div class="box alt">
                                    <div class="row 50% uniform">
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <!-- Break -->
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <!-- Break -->
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                        <div class="4u"><span class="image fit"><img src="images/pic01.jpg" alt="" /></span></div>
                                    </div>
                                </div>

                                <h4>Left &amp; Right</h4>
                                <p><span class="image left"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>
                                <p><span class="image right"><img src="images/pic02.jpg" alt="" /></span>Lorem ipsum dolor sit accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Vestibulum ante ipsum primis in faucibus magna blandit adipiscing eu felis iaculis volutpat lorem ipsum dolor sit amet dolor consequat.</p>

                                <!-- Box -->
                                <h3>Box</h3>
                                <div class="box">
                                    <p>Felis sagittis eget tempus primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Magna sed etiam ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus lorem ipsum dolor sit amet nullam.</p>
                                </div>

                                <!-- Preformatted Code -->
                                <h3>Preformatted</h3>
                                <pre><code>i = 0;

while (!deck.isInOrder()) {
    print 'Iteration ' + i;
    deck.shuffle();
    i++;
}

print 'It took ' + i + ' iterations to sort the deck.';
</code></pre>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Four -->
        <section id="four" class="wrapper style3">
            <div class="inner">

                <header class="align-center">
                    <h2>Morbi interdum mollis sapien</h2>
                    <p>Cras aliquet urna ut sapien tincidunt, quis malesuada elit facilisis. Vestibulum sit amet tortor velit. Nam elementum nibh a libero pharetra elementum. Maecenas feugiat ex purus, quis volutpat lacus placerat malesuada. Praesent in sem ex. Morbi mattis sapien pretium tellus venenatis, at egestas urna ornare.</p>
                </header>

            </div>
        </section>

        <!-- Footer -->
        <footer id="footer" class="wrapper">
            <div class="inner">
                <section>
                    <div class="box">
                        <div class="content">
                            <h2 class="align-center">Get in Touch</h2>
                            <hr />
                            <form action="#" method="post">
                                <div class="field half first">
                                    <label for="name">Name</label>
                                    <input name="name" id="name" type="text" placeholder="Name">
                                </div>
                                <div class="field half">
                                    <label for="email">Email</label>
                                    <input name="email" id="email" type="email" placeholder="Email">
                                </div>
                                <div class="field">
                                    <label for="dept">Department</label>
                                    <div class="select-wrapper">
                                        <select name="dept" id="dept">
                                            <option value="">- Category -</option>
                                            <option value="1">Manufacturing</option>
                                            <option value="1">Shipping</option>
                                            <option value="1">Administration</option>
                                            <option value="1">Human Resources</option>
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