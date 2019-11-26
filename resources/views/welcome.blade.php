<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Topollution</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/css/bootstrap.min.css')}}">
 

  <!-- Libraries CSS Files -->
  <link rel="stylesheet" href="{{asset('assets/lib/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/animate/animate.min.css')}}">

  <!-- Main Stylesheet File -->
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>

<body>

  <!--==========================
  Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        
        <h1><a href="#hero">Topollution</a></h1>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Inicio</a></li>
          <li><a href="#about">Quienes somos</a></li>
          <li><a href="#services">Nuestro Producto</a></li>           
          <li><a href="#contact">Contacto</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Hero Section
  ============================-->
  <section id="hero">
    <div class="hero-container">
      <h1>Bienvenido a Topollution</h1>
        <h2>Por un mundo menos contaminado</h2>
      <a href="#about" class="btn-get-started">Saber más</a>
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      Informacion de la empresa
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Un poco mas sobre nosotros</h2>
            <p>
              Topollution es una pequeña empresa que ha surgido gracias a una idea en común entre dos grupos de personas con la idea de reducir las cantidades de contaminación ambiental y acustica que pueda haber en el entorno.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fas fa-map-pin"></i> </div>
              <h4 class="title"><a href="">Donde lo puedo poner</a></h4>
              <p class="description">Los sensores que ofrecemos los podrás poner en cualquier lugar ya que tiene un tamaño bastante pequeño.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-photo"></i></div>
              <h4 class="title"><a href="">Diseño llamativo</a></h4>
              <p class="description">El diseño de los sensores viene dentro de una caja de metacrilato para que se puedan ver lso filtros y sea mucho mas llamativo</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-cogs"></i></div>
              <h4 class="title"><a href="">Configuración de los sensores</a></h4>
              <p class="description">Configuración simple, solo necesitan conexión a internet y el numero de identificacion añadirlo al panel de control de usuario</p>
            </div>

          </div>
          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInRight"></div>
        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Informacion sobre el producto
    ============================-->
    <section id="facts">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Información sobre nuestro producto</h3>
          <p class="section-description">Qué caracteristicas ofrece Topollution</p>
        </div>
        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">232</span>
            <p>Clientes</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">521</span>
            <p>Sensores instalados</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">13</span>
            <p>Menos de contaminacion</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">7</span>
            <p>Desarrolladores</p>
  				</div>

  			</div>

      </div>
    </section><!-- #facts -->

    <!--==========================
      Servicios 
    ============================-->
    <section id="services">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Qué ofrece Topollution</h3>
          <p class="section-description">Topollution ofrece una forma rápida y sencilla de ver los niveles de contaminación que hay en el aire y el ruido de la zona. </p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-microphone "></i></a></div>
              <h4 class="title"><a href="">Sensor de Ruido</a></h4>
              <p class="description">Rellenar con ayuda de DonBosco</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-wind"></i></a></div>
              <h4 class="title"><a href="">Sensor de aire</a></h4>
              <p class="description">Rellenar con ayuda de DonBosco</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-bar-chart"></i></a></div>
              <h4 class="title"><a href="">Graficos integrados</a></h4>
              <p class="description">El usuario podrá ver un gráfico con la información que reciba el sensor, Desde su apartado del panel de administración </p>
            </div>
          </div>

          <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
              <h4 class="title"><a href="">Múltiples dispositivos</a></h4>
              <p class="description">Cualquier usuario podra tener a su disposición varios sensores, sin límite</p>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-photo"></i></a></div>
              <h4 class="title"><a href="">Gran comunidad</a></h4>
              <p class="description">Una grán comunidad en la que con la ayuda de los demas podremos mejorar nuestro planeta</p>
            </div>
          </div>
         </div>

      </div>
    </section><!-- #services -->

    <!--==========================
    Registrarse
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title">No eres miembro</h3>
            <p class="cta-text"> Si estas pensando en ayudar a reducir la contaminación tanto acústica como ambiental date prisa y registrate totalmente gratis y comprueba cuales son las ventajas de pasarte a Topollution.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Registrarse</a>
          </div>
        </div>

      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      formulario de contacto
    ============================-->
    <section id="contact">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Contacto</h3>
          <p class="section-description">Nuestra oficina situada frente a la playa de la zurriola en la Calle Jose Miguel Barandiaran, 10</p>
        </div>
      </div>

      <!-- Uncomment below if you wan to use dynamic maps -->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2902.4200094356097!2d-1.9723899173293205!3d43.326399407908184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd51a5417f1fe99f%3A0xed989e74e5f1dc40!2sZubiri%20Manteo%20BHI!5e0!3m2!1ses!2ses!4v1574675548501!5m2!1ses!2ses" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>C/ Jose Miguel Barandiaran, 10</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>Topollution@contacto.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>943 555 666</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-5 col-md-8">
            <div class="form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <form action="{{route('enviarMensaje')}}" method="post" role="form" class="contactForm">
              @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- #contact -->

  </main>

  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>ToPollution</strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <link rel="stylesheet" href="{{asset('assets/lib/jquery/jquery.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/jquery/jquery-migrate.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/bootstrap/js/bootstrap.bundle.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/easing/easing.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/wow/wow.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/waypoints/waypoints.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/counterup/counterup.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/superfish/hoverIntent.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/superfish/superfish.min.js')}}">
  <link rel="stylesheet" href="{{asset('assets/lib/contactform/contactform.js')}}">
  <link rel="stylesheet" href="{{asset('assets/js/main.js')}}">


  
  

 

</body>
</html>
