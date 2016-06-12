<?php session_start();  ?>

<?php
include('header.php');
?>
        <section id="header">
            <div class="container">
                <div class="row">
                    <div class="text-center padvh25 wow animated bounceInDown" data-wow-duration="1s">
                        <hr>
                    <h1>Developpeur & Designer Web</h1>
                        <hr>
                    <div class='console-container pad15'><span id='text'></span><div class='console-underscore' id='console'>&#95;</div></div>
                </div>
                    <div class="row">
                        <div class="text-center">
                            <div class="scroll-down svg" id="home-scroll-down">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_2" x="0px" y="0px" viewBox="0 0 25.166666 37.8704414" enable-background="new 0 0 25.166666 37.8704414" xml:space="preserve">
        <path class="stroke" fill="none" stroke="#c7c4b8" stroke-width="2.5" stroke-miterlimit="10" d="M12.5833445 36.6204414h-0.0000229C6.3499947 36.6204414 1.25 31.5204487 1.25 25.2871208V12.5833216C1.25 6.3499947 6.3499951 1.25 12.5833216 1.25h0.0000229c6.2333269 0 11.3333216 5.0999947 11.3333216 11.3333216v12.7037992C23.916666 31.5204487 18.8166714 36.6204414 12.5833445 36.6204414z"></path>
                                    <path class="scroller" fill="#ecf0f1" d="M13.0833359 19.2157116h-0.9192753c-1.0999985 0-1.9999971-0.8999996-1.9999971-1.9999981v-5.428606c0-1.0999994 0.8999987-1.9999981 1.9999971-1.9999981h0.9192753c1.0999985 0 1.9999981 0.8999987 1.9999981 1.9999981v5.428606C15.083334 18.315712 14.1833344 19.2157116 13.0833359 19.2157116z"></path>
    </svg><i class="icon icon-arrow-down"></i>
                            </div>
                        </div>
                    </div>

            </div>
            </div>
        </section>
        <section id="about" class="pad50">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-12 wow bounceInLeft">
                        <img src="img/ava.png" alt="" width="300px" class="img-rounded">
                    </div>
                    <div class="col-md-6  col-xs-12 pad45 animated bounceInRight wow">
                        <p><b>Hi, i’m Paul Lapkin, Experience Crafter from Canada.</b></p>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquipex ea commodo consequat.
                        <br><br><br>
                        Duis autem vel eum iriure dolorin hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore.
                        </p>
                        <a href="about.php">En savoir plus</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="text-center pad90 wow bounceInDown">
                        <h2>
                            Mes services
                        </h2>
                        <p>
                            Voici les grandes étapes de mon travail
                        </p>
                    </div>
                </div>
                <div class="main">
                    <ul id="og-grid" class="og-grid">
                        <li>
                            <a href="#" class="wow bounceInLeft" data-title="Design" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                                <img src="img/design.png" alt="img01"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wow bounceInUp" data-title="Développement" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                                <img src="img/dev.png" alt="img01"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wow bounceInDown" data-title="Référencement" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                                <img src="img/seo.png" alt="img01"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wow bounceInUp" data-title="Social Media Optimization"data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                                <img src="img/smo.png" alt="img01"/>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="wow bounceInRight" data-title="Tracking" data-description="Cabbage bamboo shoot broccoli rabe chickpea chard sea lettuce lettuce ricebean artichoke earthnut pea aubergine okra brussels sprout avocado tomato.">
                                <img src="img/tracking.png" alt="img01"/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section id="work">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center pad30 wow fadeInLeft" >
                        <h2>
                            Mes projets
                        </h2>
                        <div class="pad20">
                        <a href="portfolio.php">Consulter mon portfolio</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 text-center pad30 wow fadeInRight">
                        <h2>
                            Mon expérience
                        </h2>
                        <div class="pad20">
                        <a href="cv.php">Télécharger mon CV</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contact">
            <div class="container pad50">
                <div class="message">
                    <div class="row">
                        <div class="col-md-6 col-xs-12">
                            <h3>
                                Contact
                            </h3>
                            <a href="contact.php">Contactez moi !</a>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <h3>Adresse</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <hr>
                            <h3>Phone</h3>
                            <p>0648710350</p>
                            <p>0648710350</p>
                            <hr>
                            <h3>Web</h3>
                            <p>Mail : contact@clement-marie.fr</p>
                            <p>www.clement-marie.fr</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<a href="#0" class="top">Top</a>

<?php
include('footer.php');
?>

<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);


?>
