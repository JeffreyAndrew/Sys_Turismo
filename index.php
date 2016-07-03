<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
        require_once './Web Pages/head.php';
        ?>
    </head>

    <body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
        <section  class="preloader">
            <div class="sk-rotating-plane"></div>
        </section>
        <?php
        require_once './Web Pages/menu.php';
        ?>
        <!-- Homepage section
        ================================================== -->      
        <div id="home">
            <div class="site-slider">
                <ul class="bxslider">
                    <li>
                        <img src="Web Pages/images/slider/slide1.jpeg" alt="slider img 1"/>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-caption">
                                        <h2>Planifica tu proximo Viaje</h2>
                                        <p class="color-white">Rompe la Rutina y disfruta de las maravillas del Perú</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="Web Pages/images/slider/slide2.jpg" alt="slider img 2"/>
                        <div class="container caption-wrapper">
                            <div class="slider-caption">
                                <h2>Si de Playas se Trata...</h2>
                                <p class="color-white">Disfruta de la costa Peruana, Paracas te espera!!!!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="Web Pages/images/slider/slide3.jpg" alt="slider img 3"/>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-caption">
                                        <h2>Aprovecha y conoce el Perú</h2>
                                        <p class="color-white">Viaja a Ancash por solo $60.00</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="Web Pages/images/slider/slide4.jpg" alt="slider img 4"/>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-caption">
                                        <h2>Disfruta de la SELVA...</h2>
                                        <p class="color-white">Recorre por el río más caudaloso del Mundo AMAZONAS...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <img src="Web Pages/images/slider/slide5.jpg" alt="slider img 5"/>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-caption">
                                        <h2>Vive la aventura de viajar en  barcos de Totora</h2>
                                        <p class="color-white">Puno te espera para que disfrutes del Lago Titicaca.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Work section
        ================================================== -->
        <section id="work" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
                    ================================================== -->
                    <div style="z-index: 1" class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <div class="section-title">
                            <h5 class="wow bounceIn">C & C</h5>
                            <h1 class="heading">Reserva tus vuelos</h1>
                            <hr>
                            <p>En las casillas observe las opciónes y elija la que más prefiera...</p>
                            <a style="z-index: 2;" class="btn btn-large btn-warning" href="VentaController.php?op=1" role="button">Comprar Vuelos</a>
                        </div>
                    </div>

                    <!-- Work Owl Carousel section
                    ================================================== -->
                    <div id="owl-work" class="owl-carousel">

                        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                            <i class="icon-briefcase medium-icon"></i>
                            <h3>Economica</h3>
                            <hr>
                            <p class="text-justify">Viaje a un precio comodo y conoce el Perú... Solo reserve su vuelo en esta categoria y descubrira las maravillas de Perú</p>
                        </div>

                        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                            <i class="icon-documents medium-icon"></i>
                            <h3>Ejecutivo</h3>
                            <hr>
                            <p class="text-justify">Disfrute de toda la comodidad y accesorios que tenemos para que no se desconecte de su trabajo. Elija esta opción, no se arrepentira.</p>
                        </div>

                        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                            <i class="icon-key medium-icon"></i>
                            <h3>Privado</h3>
                            <hr>
                            <p class="text-justify">Con mejor atención y vuelos rápidos... Para que llegue a donde su corazon desee, sin escalas. El Perú es tuyo...</p>
                        </div>

                        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                            <i class="icon-map medium-icon"></i>
                            <h3>Turista</h3>
                            <hr>
                            <p class="text-justify">Para que cumpla su sueño de conocer el mundo. La clase turista cuenta con amplio espacio para los equipajes.</p>
                        </div>

                        <div class="item col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1s">
                            <i class="icon-genius medium-icon"></i>
                            <h3>Business</h3>
                            <hr>
                            <p class="text-justify">El avion cuenta con asientos 180°, herramientas de negocios. Mayor comodidad para lograr un viaje inolvidable.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>        


        <!-- About section
        ================================================== -->
        <section id="about" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
                    ================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <div class="section-title">
                            <h5 class="wow bounceIn">Enterate sobre nosotros</h5>
                            <h1 class="heading color-white">C & C AIRLINES</h1>
                            <hr>
                            <p class="color-white">Donde tus viajes son inolvidables porque cada vuelo es unico en su clase buscando la satisfacción del cliente</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <h3 class="color-white">NUESTRA HISTORIA</h3>
                        <h2>C & C AIRLINES</h2>
                        <p class="color-white text-justify">Fundada el 25 de Marzo de 1929 por el grupo Veloster Record. 
                            El directorio se reunía en sesiones ordinarias mensuales y eventualmente en sesiones extraordinarias.</p>
                        <p class="color-white text-justify">C&C contaba con 144 aeronaves de pasajero los cuales cuentan con un sistema de 
                            entretenimiento a bordo, el cual consta de pantallas generales desplegables en 
                            el techo del avión, y sistema de audio individual en su flota de corto y mediano alcance. 
                            En cuanto a su flota de largo alcance esta contaba con pantallas individuales de 8.9
                            pulgadas en Economy Class y de 14 pulgadas en Premium Bussines, ambas pantallas son 
                            táctiles y con sistema de video bajo demanda. Adicionalmente cuenta con sistema de sonido individual en ambas clases.</p>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <h2 class="mobile-top">Por qué elegirnos?</h2>
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Respuesta muy Rápida
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body">
                                        <p class="text-justify">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        </p>

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingTwo">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                            Equipo de Alta Calidad
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                    <div class="panel-body">
                                        <p class="text-justify">Nullam vehicula tincidunt ultrices. Curabitur id magna velit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Ut pretium tortor ultrices ligula dictum placerat. Donec eget augue sapien. Curabitur vel orci magna. Sed id eros consequat nibh congue euismod.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingThree">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                            Promociones Especiales
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                    <div class="panel-body">
                                        <p>Morbi pellentesque nisl at sapien congue facilisis. Proin consequat pharetra hendrerit. Aliquam vulputate, ligula ut pellentesque molestie, dolor nisi semper augue, sit amet porta risus sem non sapien. Cras vel pulvinar sapien, in consequat purus. Aliquam at varius augue.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- team section
        ================================================== -->
        <section id="team" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
                    ================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <div class="section-title">
                            <h5 class="wow bounceIn">Estamos Listos</h5>
                            <h1 class="heading">Nuestro Equipo</h1>
                            <hr>
                            <p style="text-align: justify;">C & C cuenta con un equipo internacional altamente cualificado y multilingüe compuesto por profesionales que destacan por su verdadera vocación de servicio al cliente.</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="team-wrapper">
                            <img src="Web Pages/images/team1.jpg" class="img-responsive" alt="team img">
                            <div class="team-des">
                                <h4>George Chan</h4>
                                <h3>Controlador de Tráfico Aereo</h3>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.3s">
                        <div class="team-wrapper">
                            <img src="Web Pages/images/team2.jpg" class="img-responsive" alt="team img">
                            <div class="team-des">
                                <h4>Kitty Sandar</h4>
                                <h3>Administradora de Vuelos</h3>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
                        <div class="team-wrapper">
                            <img src="Web Pages/images/team3.jpg" class="img-responsive" alt="team img">
                            <div class="team-des">
                                <h4>Johnny Lynn</h4>
                                <h3>Piloto Destacado</h3>
                                <ul class="social-icon">
                                    <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="0.3s"></a></li>
                                    <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-dribbble wow fadeIn" data-wow-delay="0.6s"></a></li>
                                    <li><a href="#" class="fa fa-behance wow fadeIn" data-wow-delay="0.6"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Portfolio section
        ================================================== -->
        <section id="portfolio" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
                    ================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <div class="section-title">
                            <h5 class="wow bounceIn">Mejores Recuerdos</h5>
                            <h1 class="heading">Las Imagenes Hablan Solas</h1>
                            <hr>
                            <p style="text-align: justify;">Recuerda que nunca es imposible llegar lejos. Los distintos paisajes te esperan... Reserva tu VUELO</p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                        <div class="grid">
                            <figure class="effect-zoe">
                                <img src="Web Pages/images/portfolio-img1.jpg" alt="portfolio img"/>
                                <figcaption>
                                    <h2>Macchu Pichu</h2>
                                    <p class="icon-links">
                                        <a href="Web Pages/images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
                                    </p>
                                </figcaption>			
                            </figure>
                        </div>
                    </div>   

                    <div class="col-md-4 col-sm-6">
                        <div class="grid">
                            <figure class="effect-zoe">
                                <img src="Web Pages/images/portfolio-img2.jpg" alt="portfolio img"/>
                                <figcaption>
                                    <h2>Juliaca</h2>
                                    <p class="icon-links">
                                        <a href="Web Pages/images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
                                    </p>
                                </figcaption>			
                            </figure>
                        </div>
                    </div> 

                    <div class="col-md-4 col-sm-6">
                        <div class="grid">
                            <figure class="effect-zoe">
                                <img src="Web Pages/images/portfolio-img3.jpg" alt="portfolio img"/>
                                <figcaption>
                                    <h2>Ancash</h2>
                                    <p class="icon-links">
                                        <a href="Web Pages/images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
                                    </p>
                                </figcaption>			
                            </figure>
                        </div>
                    </div> 

                    <div class="col-md-4 col-sm-6">
                        <div class="grid">
                            <figure class="effect-zoe">
                                <img src="Web Pages/images/portfolio-img4.jpg" alt="portfolio img"/>
                                <figcaption>
                                    <h2>Ica</h2>
                                    <p class="icon-links">
                                        <a href="Web Pages/images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
                                    </p>
                                </figcaption>			
                            </figure>
                        </div>
                    </div> 

                    <div class="col-md-4 col-sm-6">
                        <div class="grid">
                            <figure class="effect-zoe">
                                <img src="Web Pages/images/portfolio-img5.jpg" alt="portfolio img"/>
                                <figcaption>
                                    <h2>Tarapoto</h2>
                                    <p class="icon-links">
                                        <a href="Web Pages/images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
                                    </p>
                                </figcaption>			
                            </figure>
                        </div>
                    </div> 

                    <div class="col-md-4 col-sm-6">
                        <div class="grid">
                            <figure class="effect-zoe">
                                <img src="Web Pages/images/portfolio-img6.jpg" alt="portfolio img"/>
                                <figcaption>
                                    <h2>Cajamarca</h2>
                                    <p class="icon-links">
                                        <a href="Web Pages/images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><span class="icon icon-attachment"></span></a>
                                    </p>
                                </figcaption>			
                            </figure>
                        </div>
                    </div> 

                    <!-- Portfolio bottom section
                    ================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-12">
                        <div class="portfolio-bottom">
                            <h2>¿INTERESADO?</h2>
                            <p style="text-align: justify;">No te quedes con las ganas de volar y conocer el Perú.... Descubre nuestras ofertas dandole click al boton Let's Go.</p>
                            <a href="#plan" class="smoothScroll btn btn-default">LET'S GO!</a>
                        </div>
                    </div>    

                </div>
            </div>
        </section>		


        <!-- Plan section
        ================================================== -->
        <section id="plan" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
                    ================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8 wow fadeInUp">
                        <div class="section-title">
                            <h5 class="wow bounceIn">Aventuras Unicas</h5>
                            <h1 class="heading color-white">Aprovecha Nuestras Promociones</h1>
                            <hr>
                            <p class="color-white" style="text-align: justify;">Viaja por el Perú a un precio cómodo. Aprovecha ahora o nunca nuestras promociones...No te arrepentiras de habe VOLADO con C & C... </p>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="plan">
                            <h2 class="plan-title">Cajamarca</h2>
                            <div class="plan-price">
                                <h1 class="plan-price-title">$40 / <small>Economy</small></h1>
                            </div>
                            <ul class="plan-list">
                                <li>1 hora de vuelo</li>
                                <li>Avion AirBus350</li>
                                <li>Asientos 180°</li>
                                <li>3 personas por fila</li>
                            </ul>
                            <center>
                                <div class="plan-button">
                                    <a href="VentaController.php?op=1"
                                       ><button class="btn btn-default">Comprar Vuelo</button></a>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="plan">
                            <h2 class="plan-title">Tarapoto</h2>
                            <div class="plan-price">
                                <h1 class="plan-price-title">$250 / <small>Bussines</small></h1>
                            </div>
                            <ul class="plan-list">
                                <li>45 minutos de vuelo</li>
                                <li>Atencion Prerencial</li>
                                <li>Centro de entretenimiento</li>
                                <li>2 asientos por fila</li>
                            </ul>
                            <center>
                                <div class="plan-button">
                                    <a href="VentaController.php?op=1"><button class="btn btn-default">Comprar Vuelo</button></a>
                                </div>
                            </center>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="0.9s">
                        <div class="plan">
                            <h2 class="plan-title">Iquitos</h2>
                            <div class="plan-price">
                                <h1 class="plan-price-title">$400 / <small>Ejecutivo</small></h1>
                            </div>
                            <ul class="plan-list">
                                <li>Elija su horario</li>
                                <li>Evite las colas</li>
                                <li>Calidad ISO 9001</li>
                                <li>Mas tiempo para usted </li>
                            </ul>
                            <center>
                                <div class="plan-button">
                                    <a href="VentaController.php?op=1"><button class="btn btn-default">Comprar Vuelo</button></a>
                                </div>
                            </center>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact section
        ================================================== -->
        <section id="contact" class="parallax-section">
            <div class="container">
                <div class="row">

                    <!-- Section title
                    ================================================== -->
                    <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                        <div class="section-title">
                            <h5 class="wow bounceIn">PLANIFICA TU VIAJE</h5>
                            <h1 class="heading">AHORA</h1>
                            <hr>
                            <p style="text-align: justify;">No dejes que la rutina te atrape, conoce las maravillas del Perú. Planifica tu viaje ahora, mañana será demasiado tarde.</p>
                        </div>
                    </div>

                    <!-- Contact form section
                    ================================================== -->
                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                        <form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.6s">
                            <div class="col-md-4 col-sm-6">
                                <input type="text" class="form-control" placeholder="Nombre" name="name" required="">
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <input type="email" class="form-control" placeholder="Email" name="email" required="">
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <input type="text" class="form-control" placeholder="Motivo" name="subject" required="">
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <textarea class="form-control" placeholder="Mensaje" rows="7" name="message" required=""></textarea>
                            </div>
                            <div class="col-md-offset-2 col-md-8 col-sm-offset-2 col-sm-8">
                                <input type="submit" class="form-control" value="ENVIAR MENSAJE">
                            </div>
                        </form>
                    </div>

                    <!-- Contact detail section
                    ================================================== -->
                    <div class="contact-detail col-md-12 col-sm-12">
                        <div class="col-md-6 col-sm-6">
                            <h3><i class="icon-envelope medium-icon wow bounceIn" data-wow-delay="0.6s"></i> EMAIL</h3>
                            <p>c&c@compañia.com</p>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <h3><i class="icon-phone medium-icon wow bounceIn" data-wow-delay="0.6s"></i> Telefonos</h3>
                            <p>010-010-0110 | 090-090-0990</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Footer section
        ================================================== -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">

                        <h2 class="wow bounceIn">C & C</h2>
                        <ul class="social-icon">
                            <li><a href="#" class="fa fa-facebook wow fadeIn" data-wow-delay="1s"></a></li>
                            <li><a href="#" class="fa fa-twitter wow fadeIn" data-wow-delay="1s"></a></li>
                            <li><a href="#" class="fa fa-tumblr wow fadeIn" data-wow-delay="1s"></a></li>
                        </ul>
                        <p>Copyright &copy; 2016 C & C 

                            | Design: Veloster Inc Corp ©</p>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Javascript 
        ================================================== -->
        <script src="Web Pages/js/jquery.js" type="text/javascript"></script>
        <script src="Web Pages/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="Web Pages/js/smoothscroll.js" type="text/javascript"></script>
        <script src="Web Pages/js/nivo-lightbox.min.js" type="text/javascript"></script>
        <script src="Web Pages/js/jquery.easing-1.3.js" type="text/javascript"></script>
        <script src="Web Pages/js/plugins.js" type="text/javascript"></script>
        <script src="Web Pages/js/owl.carousel.min.js" type="text/javascript"></script>
        <script src="Web Pages/js/jquery.parallax.js" type="text/javascript"></script>
        <script src="Web Pages/js/wow.min.js" type="text/javascript"></script>
        <script src="Web Pages/js/custom.js" type="text/javascript"></script>
    </body>
</html>
