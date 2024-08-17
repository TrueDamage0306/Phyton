<?php 
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tutorial Python</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="assets/img/logos.jpg" type="image/x-icon">
  <!-- Favicons -->
  <link href="assets/img/1.jpg" rel="icon">
  <link href="assets/img/1.jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/animated.css">


</head>

<body>
<?php

// Check user login or not
if(!isset($_SESSION['userid'])){
    header('Location: index.php');
}


// logout
if(isset($_POST['but_logout'])){
    session_destroy();

    // Remove cookie variables
    $days = 30;
    setcookie ("rememberme","", time() - ($days *  24 * 60 * 60 * 1000) );

    header('Location: index.php');
}

?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><img src="assets/img/logos.jpg" alt="" class="rounded-circle"> Python</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Inicio</a></li>
          <li><a class="nav-link scrollto" href="#about">Python</a></li>
          <li><a class="nav-link scrollto" href="#services">Niveles</a></li>
          <li><a class="nav-link scrollto " href="#features">Tutorial</a></li>
          <li><a class="nav-link scrollto" href="#portfolio">Galeria</a></li>

          <li><a class="getstarted scrollto" href="logout.php">Cerrar Sesion</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Quieres aprender Python </h1>
          <h1 data-aos="fade-up"><?php echo $_SESSION['nombre_apellido']; echo $_SESSION['username'];  ?></h1>
          <h2 data-aos="fade-up" data-aos-delay="400">Python es un lenguaje de alto nivel de propósito general. Fue
            inventado por Guido van Rossum pero en la actualidad es administrado por la Python Software Foundation.</h2>

        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img text-end" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/superpy.webp" class="img-fluid animated" alt="" width="80%">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Que es Python?</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p style="text-align: justify;">
              <b>Python</b> es un lenguaje de alto nivel de propósito general. Fue inventado por Guido van Rossum pero
              en la
              actualidad es administrado por la Python Software Foundation.

              Es altamente recomendable para multitud de campos, aunque destaca en desarollo web, scripting, big data y
              machine learning.
            </p>
            <ul>
              <li style="text-align: justify;"><i class="ri-check-double-line"></i> <b>Calidad de Software:</b> diseñado con el objetivo de resultar
                fácil de leer, aun cuando el código no haya sido escrito por nosotros, lo que facilita su reusabilidad y
                mantenimiento</li>
              <li style="text-align: justify;"><i class="ri-check-double-line"></i> <b>Eficiencia:</b> Permite ejecutarlo a medida que lo vamos
                escribiendo, facilitando su revisión y corrección, características ideales para análisis exploratorio
              </li>
              <li style="text-align: justify;"><i class="ri-check-double-line"></i> <b>Lenguaje Multiplataforma:</b> Código es ejecutable en la
                mayoría de las plataformas de ordenadores sin cambios de ningún tipo</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <h2>¿Por qué aprender Python?</h2>
            <p style="text-align: justify;">
           
            Python se ha convertido en uno de los lenguajes de programación más populares de los últimos años y su uso
            está en alza.

            Es fácil de aprender, permite trabajar en diferentes campos de la informática y existe un amplio catálogo de
            librerías especializadas pensadas para él que lo hacen realmente interesante.
            </p>
            <h2>¿Qué se puede hacer con Python?</h2>
            <p style="text-align: justify;">
            
            El lenguaje Python es muy versátil y con él se puede desarrollar software de todo tipo. En la actualidad,
            es utilizado fundamentalmente en Desarrollo Web, APIs, Inteligencia Artificial, Big Data, Machine
            Learning, DevOps, Scraping y Desarrollo de microcontroladores (MicroPython).
            </p>
            <a href="#" class="btn-learn-more scrollto" href="#" data-bs-toggle="modal"
              data-bs-target="#staticBackdrop13">Ver Grafica</a>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start p-3"
            data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/logo2.png" alt="" class="img-fluid" width="100%">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-12 d-md-flex align-items-md-stretch p-3">
                  <video id='video_background' src="video1.mp4" width="100%"  autoplay  controls style="box-shadow: 7px 7px 10px black;"></video>
                  <!--<p>Actualmente la versión de Python recomendada para su uso es Python 3.x. A no ser que sea
                    estrictamente necesario (legacy applications principalmente), te desaconsejo el uso de Python 2.x
                    dado que ya no es mantenida. Todos los tutoriales del blog hacen referencia a Python 3.</p>-->

                </div>
                <div class="col-md-12 d-md-flex align-items-md-stretch">
                  <p style="text-align: justify;">Además de las herramientas incluidas en la conocida como "librería estándar" -librería
                    proporcionada por el propio lenguaje- existen miles de librerías desarrolladas por terceros
                    frecuentemente bien documentadas que convierten a Python en un lenguaje de programación aplicable en
                    casi cualquier entorno. En lo que a Machine Learning se refiere, no hay algoritmos que no tengan una
                    versión para Python, y librerías como NumPy, pandas o scikit-learn se han convertido en referencias
                    en sus respectivas áreas./p>

                </div>

              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Niveles</h2>
          <p>Niveles de Aprendizaje del tutorial</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="box-shadow: 7px 7px 10px gray;">
              <div class=""><img src="assets/img/005-ganador.png" alt=""></div>
              <h4 class="title"><a href="">Nivel Básico</a></h4>
              <p class="description">Conociemientos Generales del Lenguaje</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="box-shadow: 7px 7px 10px gray;">
              <div class=""><img src="assets/img/006-medalla-1.png" alt=""></div>
              <h4 class="title"><a href="">Nivel Medio</a></h4>
              <p class="description">Estructuras de Control Funciones Librerias</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="box-shadow: 7px 7px 10px gray;">
              <div class=""><img src="assets/img/007-medalla-2.png" alt=""></div>
              <h4 class="title"><a href="">Nivel Avanzado</a></h4>
              <p class="description">Base de Datos Objetos JSON funciones y Librerias</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="box-shadow: 7px 7px 10px gray;">
              <div class=""><img src="assets/img/004-trofeo-1.png" alt=""></div>
              <h4 class="title"><a href="">Framework</a></h4>
              <p class="description">Uso de Framework de trabajo Django y Flask</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/code1.jpg");' data-aos="fade-up"
              data-aos-delay="100">
              <div class="card-body" style="box-shadow: 7px 7px 10px gray;">
                <h5 class="card-title"><a href=""><img src="assets/img/jango123.jpg" alt="" width="32"
                      class="rounded-circle"> DJNAGO</a></h5>
                <p class="card-text" style="text-align: justify;">Django es un framework de desarrollo web de código abierto, escrito en Python, que
                  respeta el patrón de diseño conocido como modelo–vista–controlador (MVC).</p>

              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/code2.jpg");' data-aos="fade-up"
              data-aos-delay="200">
              <div class="card-body" style="box-shadow: 7px 7px 10px gray;">
                <h5 class="card-title"><a href=""><img src="assets/img/fg.png" alt="" width="32" class="rounded-circle">
                    FLASK</a></h5>
                <p class="card-text" style="text-align: justify;">Flask es un framework escrito en Python que permite crear aplicaciones de forma sencilla y rápida. Es decir, un acelerador de tareas que funciona con pocas líneas de código y que ejecuta las aplicaciones rápidamente</p>

              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End More Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tutorial</h2>
        </div>

        <div class="section-title" data-aos="fade-up">
          <h3>Secciones del Curso</h3>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-md-4 rounded-3  opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Introducción</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0  rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Operadores y Expresiones</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Indentación</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Variables</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop5">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Tipos de Datos</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop6">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Operadores</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop7">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Sentencia If</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop8">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Bucle While</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop9">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Bucle For</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop10">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Listas</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop11">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Tuplas</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop12">
              <div class="icon-box ">
                <img src="assets/img/polo503.png" alt="" width="64">
                <h3>Funciones</h3>
              </div>
            </a>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 rounded-3 opcion1 probando" style="box-shadow: 7px 7px 10px gray;">
            <a class="nav-link scrollto" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop14">
              <div class="icon-box ">
                <img src="assets/img/003-trofeo.png" alt="" width="32">
                <h3> Prueba Tu conocimiento</h3>
              </div>
            </a>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->


    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Galería</h2>

        </div>



        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
         <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pantalla1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info"></a>

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/pantalla1.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pantalla2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/pantalla2.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pantalla3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/pantalla3.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pantalla4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/pantalla4.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pantalla5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/pantalla5.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/pantalla6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">

                <div class="portfolio-links">
                  <a href="assets/img/portfolio/pantalla6.jpg" data-gallery="portfolioGallery"
                    class="portfolio-lightbox"><i class="bx bx-plus"></i></a>

                </div>
              </div>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Portfolio Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-12 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>Aldea Universitaria Comunal Saman de Guere</strong>.
          </div>
          <div class="copyright">
            <strong>Misión Sucre PNF Informática</strong>
          </div>
          <div class="credits">


         
          </div>
        </div>

      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>




  <!-- inio de los modales-->
  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Si quieres Aprender a Programar Tienes que Programar</i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Introducción</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>El intérprete de Python</h3>
              <p>Cuando instalas Python correctamente (en cualquier sistema operativo) ocurren, entre otras, dos cosas:
                se añade el comando python (o python3, en caso de que instales la versión 3.x de Python) al path y se
                instala el intérprete de Python correspondiente.</p>
              <img src="imgp/intro.png" alt="">
              <p>En el intérprete de Python podemos escribir expresiones e instrucciones que este interpretará y
                ejecutará.</p>
              <p>Primer programa en Python
                Normalmente, los programas en Python se escriben en archivos con la extensión .py. Estos archivos se
                pasan al intérprete de Python para que los interprete y ejecute.</p>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop2" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Operadores / Expresiones </i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Operadores y Expresiones</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Operador</h3>
              <p>Un operador es un carácter o conjunto de caracteres que actúa sobre una, dos o más variables y/o
                literales para llevar a cabo una operación con un resultado determinado.</p>

              <p>Ejemplos de operadores comunes son los operadores aritméticos + (suma), - (resta) o * (producto),
                aunque en Python existen otros operadores.</p>

              <p>En el intérprete de Python podemos escribir expresiones e instrucciones que este interpretará y
                ejecutará.</p>
              <h3>Expresión</h3>
              <p>Primer programa en Python
                Una expresión es una unidad de código que devuelve un valor y está formada por una combinación de
                operandos (variables y literales) y operadores. Los siguientes son ejemplos de expresiones (cada línea
                es una expresión diferente):</p>
              <img src="imgp/expresiones.png" alt="">

              <h3>Sentencia</h3>
              <p>Por su parte, una sentencia o declaración es una instrucción que define una acción. Una sentencia puede
                estar formada por una o varias expresiones, aunque no siempre es así.</p>

              <p>En definitiva, las sentencias son las instrucciones que componen nuestro programa y determinan su
                comportamiento.</p>

              <p>Ejemplos de sentencias son la asignación = o las instrucciones if, if ... else ..., for o while entre
                otras.</p>

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop3" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Indentación </i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Indentación</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Bloques de código (Indentación)</h3>
              <p>Un bloque de código es un grupo de sentencias relacionadas bien delimitadas. A diferencia de otros
                lenguajes como JAVA o C, en los que se usan los caracteres {} para definir un bloque de código, en
                Python se usa la indentación o sangrado. </p>
              <p>El sangrado o indentación consiste en mover un bloque de texto hacia la derecha insertando espacios o
                tabuladores al principio de la línea, dejando un margen a la izquierda.</p>
              <p>Un bloque comienza con un nuevo sangrado y acaba con la primera línea cuyo sangrado sea menor. De
                nuevo, la guía de estilo de Python recomienda usar los espacios en lugar de las tabulaciones para
                realizar el sangrado. Yo suelo utilizar 4 espacios.</p>
              <h3>Expresión</h3>
              <p>Primer programa en Python
                Una expresión es una unidad de código que devuelve un valor y está formada por una combinación de
                operandos (variables y literales) y operadores. Los siguientes son ejemplos de expresiones (cada línea
                es una expresión diferente):</p>
              <img src="imgp/bloque.png" alt="">

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop4" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Variables </i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Variables</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Variables</h3>
              <p>Las variables son uno de los dos componentes básicos de cualquier programa.
                En su esencia, un programa está compuesto por datos e instrucciones que manipulan esos datos.
                Normalmente, los datos se almacenan en memoria (memoria RAM) para que podamos acceder a ellos.
                Entonces, ¿qué es una variable? Una variable es una forma de identificar, de forma sencilla, un dato que
                se encuentra almacenado en la memoria del ordenador. Imagina que una variable es un contenedor en el que
                se almacena un dato, el cuál, puede cambiar durante el flujo del programa. Una variable nos permite
                acceder fácilmente a dicho dato para ser manipulado y transformado.</p>

              <p>Por ejemplo, supongamos que queremos mostrar el resultado de sumar 1 + 2. Para mostrar el resultado,
                debemos indicarle al programa dónde se encuentra dicho dato en memoria y, para ello, hacemos uso de una
                variable:</p>
              <img src="imgp/variable1.png" alt="">
              <h3>Asignar un valor a una variable en Python</h3>
              <p>Tal y como hemos visto en el ejemplo anterior, para asignar un valor (un dato) a una variable se
                utiliza el operador de asignación =. En la operación de asignación se ven involucradas tres partes:</p>

              <ul>
                <li>El operador de asignación</li>
                <li>Un identificador o nombre de variable, a la izquierda del operador</li>
                <li>Un literal, una expresión, una llamada a una función o una combinación de todos ellos a la derecha
                  del operador de asignación</li>
              </ul>

              <img src="imgp/variable2.png" alt="">

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop5" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Tipos de Datos </i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Tipos de Datos</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Tipos de Datos</h3>
              <p>En cualquier lenguaje de programación de alto nivel se manejan tipos de datos. Los tipos de datos
                definen un conjunto de valores que tienen una serie de características y propiedades determinadas.</p>

              <p> Pensemos por un momento cuando éramos jóvenes 🙄 y estábamos en el colegio en clase de matemáticas.
                Seguro que diste alguna clase en la que te enseñaban los distintos conjuntos de números. Los naturales
                (1, 2, 3, 4, …), los enteros (…, -2, -1, 0, 1, 2, …), los reales (… -1.1, -0.3, 2.1, …), etc. Pues bien,
                en programación (y por supuesto en Python), cada uno de esos conjuntos sería lo que llamamos tipo de
                datos.</p>

              <p>En Python, todo valor que pueda ser asignado a una variable tiene asociado un tipo de dato. Como ya te
                he mencionado alguna vez, en Python todo es un objeto. Así que los tipos de datos serían las clases
                (donde se definen las propiedades y qué se puede hacer con ellas) y las variables serían las instancias
                (objetos) de los tipos de datos. No te preocupes si no entiendes qué es una clase o un objeto, lo
                veremos en otro tutorial.</p>

              <p> En definitiva, un tipo de dato establece qué valores puede tomar una variable y qué operaciones se
                pueden realizar sobre la misma.</p>

              <h3>Numeros Enteros</h3>
              <p>El tipo de los números enteros es int. Este tipo de dato comprende el conjunto de todos los números
                enteros, pero como dicho conjunto es infinito, en Python el conjunto está limitado realmente por la
                capacidad de la memoria disponible. No hay un límite de representación impuesto por el lenguaje.</p>
              <h3>Numeros Flotantes</h3>
              <p>Para representar el mayor número posible de los números reales con las limitaciones de memoria (tamaños
                de palabra de 32 y 64 bits), se adaptó la notación científica de representación de números reales al
                sistema binario (que es el sistema que se utiliza en programación para representar los datos e
                instrucciones).</p>

              <h3>Numeros Complejos</h3>
              <p>El último tipo de dato numérico básico que tiene Python es el de los números complejos, complex.

                Los números complejos tienen una parte real y otra imaginaria y cada una de ellas se representa como un
                float.</p>
              <h3>Booleanos</h3>
              <p>En Python la clase que representa los valores booleanos es bool. Esta clase solo se puede instanciar
                con dos valores/objetos: True para representar verdadero y False para representar falso.

                Una particularidad del lenguaje es que cualquier objeto puede ser usado en un contexto donde se requiera
                comprobar si algo es verdadero o falso. Por tanto, cualquier objeto se puede usar en la condición de un
                if o un while (son estructuras de control que veremos en tutoriales posteriores) o como operando de una
                operación booleana.</p>
              <h3>Cadena de Caracteres</h3>
              <p>Para crear un string, simplemente tienes que encerrar entre comillas simples '' o dobles "" una
                secuencia de caracteres.

                Se puede usar indistintamente comillas simples o dobles, con una particularidad. Si en la cadena de
                caracteres se necesita usar una comilla simple, tienes dos opciones: usar comillas dobles para encerrar
                el string, o bien, usar comillas simples pero anteponer el carácter \ a la comilla simple del interior
                de la cadena. El caso contrario es similar.</p>

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop6" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Operadores </i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Operadores</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Operador de concatenación de cadenas de caracteres</h3>
              <p>Una de las operaciones más básicas cuando se trabaja con cadenas de caracteres es la concatenación.
                Esto consiste en unir dos cadenas en una sola, siendo el resultado un nuevo string.La forma más simple
                de concatenar dos cadenas en Python es utilizando el operador de concatenación </p>
              <img src="imgp/op1.png" alt="">

              <h3>Operadores lógicos o booleanos</h3>
              <p>El tipo de los números enteros es int. Este tipo de dato comprende el conjunto de todos los números
                enteros, pero como dicho conjunto es infinito, en Python el conjunto está limitado realmente por la
                capacidad de la memoria disponible. No hay un límite de representación impuesto por el lenguaje.</p>
              <h3>Numeros Flotantes</h3>
              <p>A continuación te muestro cómo funcionan los operadores booleanos (en orden de preferencia ascendente):
              </p>
              <img src="imgp/op2.png" alt="">

              <h3>Operadores de comparación</h3>
              <p>Los operadores de comparación se utilizan, como su nombre indica, para comparar dos o más valores. El
                resultado de estos operadores siempre es True o False</p>
              <img src="imgp/op3.png" alt="">

              <h3>Operadores aritméticos </h3>
              <p>En cuanto a los operadores aritméticos, estos permiten realizar las diferentes operaciones aritméticas
                del álgebra: suma, resta, producto, división, … Estos operadores Python son de los más utilizados. El
                listado completo es el siguiente:</p>
              <img src="imgp/op4.png" alt="">
              <h3>Operadores de asignación</h3>
              <p>El operador de asignación se utiliza para asignar un valor a una variable. Como te he mencionado en
                otras secciones, este operador es el signo =.

                Además del operador de asignación, existen otros operadores de asignación compuestos que realizan una
                operación básica sobre la variable a la que se le asigna el valor.

                Por ejemplo, x += 1 es lo mismo que x = x + 1. Los operadores compuestos realizan la operación que hay
                antes del signo igual, tomando como operandos la propia variable y el valor a la derecha del signo
                igual.</p>
              <img src="imgp/op5.png" alt="">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>



  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop7" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Sentencia If </i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Sentencia If</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Python if – Sentencia básica</h3>
              <p>En Python, la sentencia if se utiliza para ejecutar un bloque de código si, y solo si, se cumple una
                determinada condición. Por tanto, if es usado para la toma de decisiones.La estructura básica de esta
                sentencia if es la siguiente:</p>
              <img src="imgp/if1.png" alt="">

              <p>Es decir, solo si condición se evalúa a True, se ejecutarán las sentencias que forman parte de bloque
                de código. En caso de que se evalúe a False no se ejecutará ninguna sentencia perteneciente a bloque de
                código.Aquí, condición puede ser un literal, el valor de una variable, el resultado de una expresión o
                el valor devuelto por una función.</p>

              <h3>Sentencia if … else</h3>
              <p>Hay ocasiones en que la sentencia if básica no es suficiente y es necesario ejecutar un conjunto de
                instrucciones o sentencias cuando la condición se evalúa a False.Para ello se utiliza la estructura if
                ... else... Esta es estructura es como sigue:</p>
              <img src="imgp/if2.png" alt="">

              <h3>if … elif … else </h3>
              <p>También es posible que te encuentres situaciones en que una decisión dependa de más de una condición.
                En estos casos se usa una sentencia if compuesta, cuya estructura es como se indica a continuación:</p>
              <img src="imgp/if3.png" alt="">

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>



  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop8" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Bucle While</i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Bucle While</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>While</h3>
              <p>Como te decía, el uso principal de la sentencia while es ejecutar repetidamente un bloque de código
                mientras se cumpla una condición.La estructura de esta sentencia while es la siguiente:</p>
              <img src="imgp/w1.png" alt="">

              <p>Es decir, mientras condición se evalúe a True, se ejecutarán las instrucciones y sentencias de bloque
                de código.Aquí, condición puede ser un literal, el valor de una variable, el resultado de una expresión
                o el valor devuelto por una función.</p>
              <img src="imgp/w2.png" alt="">

            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop9" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Bucle For</i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Bucle For</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>For</h3>
              <p>El bucle for se utiliza para recorrer los elementos de un objeto iterable (lista, tupla, conjunto,
                diccionario, …) y ejecutar un bloque de código. En cada paso de la iteración se tiene en cuenta a un
                único elemento del objeto iterable, sobre el cuál se pueden aplicar una serie de operaciones. Su
                sintaxis es la siguiente:</p>
              <img src="imgp/for1.png" alt="">

              <p>Aquí, elem es la variable que toma el valor del elemento dentro del iterador en cada paso del bucle.
                Este finaliza su ejecución cuando se recorren todos los elementos.Como te indicaba, es muy frecuente
                usar el bucle for para iterar sobre los elementos de listas, tuplas o diccionarios.</p>

              <h3>Que es un Iterable</h3>
              <p>Veamos con más detalle el concepto de iterable mencionado en el apartado anterior. Un iterable es un
                objeto que se puede iterar sobre él, es decir, que permite recorrer sus elementos uno a uno. Para ser
                más técnico, un objeto iterable es aquél que puede pasarse como parámetro de la función iter().Esta
                función devuelve un iterador basado en el objeto iterable que se pasa como parámetro. Finalmente, un
                iterador es un objeto que define un mecanismo para recorrer los elementos del iterable asociado.</p>


            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop10" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Listas</i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Listas</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Que es una Lista</h3>
              <p>Las listas en Python son un tipo contenedor, compuesto, que se usan para almacenar conjuntos de
                elementos relacionados del mismo tipo o de tipos distintos.Junto a las clases tuple, range y str, son
                uno de los tipos de secuencia en Python, con la particularidad de que son mutables. Esto último quiere
                decir que su contenido se puede modificar después de haber sido creada.Para crear una lista en Python,
                simplemente hay que encerrar una secuencia de elementos separados por comas entre paréntesis cuadrados
                [].Por ejemplo, para crear una lista con los números del 1 al 10 se haría del siguiente modo:</p>
              <img src="imgp/l1.png" alt="">

              <p>Como te decía, las listas pueden almacenar elementos de distinto tipo. La siguiente lista también es
                válida:</p>
              <img src="imgp/l1.png" alt="">

              <p>Incluso pueden contener otros elementos compuestos, como objetos u otras listas:</p>
              <img src="imgp/l3.png" alt="">


              <p>Las listas también se pueden crear usando el constructor de la clase, list(iterable). En este caso, el
                constructor crea una lista cuyos elementos son los mismos y están en el mismo orden que los ítems del
                iterable. El objeto iterable puede ser o una secuencia, un contenedor que soporte la iteración o un
                objeto iterador.</p>


            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>



  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop11" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Tuplas</i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Tuplas</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Que es una Tupla</h3>
              <p>La clase tuple en Python es un tipo contenedor, compuesto, que en un principio se pensó para almacenar
                grupos de elementos heterogéneos, aunque también puede contener elementos homogéneos.Junto a las clases
                list y range, es uno de los tipos de secuencia en Python, con la particularidad de que son inmutables.
                Esto último quiere decir que su contenido NO se puede modificar después de haber sido creada.En general,
                para crear una tupla en Python simplemente hay que definir una secuencia de elementos separados por
                comas.</p>



              <p>A continuación te indico las diferentes formas que existen de crear una tupla en Python: </p>
              <ul>

                <li> Para crear una tupla vacía, usa paréntesis () o el constructor de la clase tuple() sin parámetros.
                </li>
                <li>Para crear una tupla con un único elemento: elem, o (elem, ). Observa que siempre se añade una coma.
                </li>
                <li>Para crear una tupla de varios elementos, sepáralos con comas: a, b, c o (a, b, c).</li>
                <li> Las tuplas también se pueden crear usando el constructor de la clase, tuple(iterable). En este
                  caso, el constructor crea una tupla cuyos elementos son los mismos y están en el mismo orden que los
                  ítems del iterable. El objeto iterable puede ser una secuencia, un contenedor que soporte la iteración
                  o un objeto iterador.</li>
              </ul>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop12" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center">Python</h2>
              <h6 class="text-center"><i>Funciones</i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Funciones</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <h3>Que es una Función</h3>
              <p>Como te decía en la introducción, las funciones en Python constituyen unidades lógicas de un programa y
                tienen un doble objetivo:</p>
              <ul>
                <li>Dividir y organizar el código en partes más sencillas.</li>
                <li>Encapsular el código que se repite a lo largo de un programa para ser reutilizado.</li>
              </ul>
              <p> Python ya define de serie un conjunto de funciones que podemos utilizar directamente en nuestras
                aplicaciones. Algunas de ellas las has visto en tutoriales anteriores. Por ejemplo, la función len(),
                que obtiene el número de elementos de un objeto contenedor como una lista, una tupla, un diccionario o
                un conjunto. También hemos visto la función print(), que muestra por consola un texto.</p>

              <p> Sin embargo, tú como programador, puedes definir tus propias funciones para estructurar el código de
                manera que sea más legible y para reutilizar aquellas partes que se repiten a lo largo de una
                aplicación. Esto es una tarea fundamental a medida que va creciendo el número de líneas de un programa.
              </p>

              <p>La idea la puedes observar en la siguiente imagen:</p>
              <img src="imgp/fun1.png" alt="">

              <h3>Cómo definir una función en Python</h3>
              <img src="imgp/fun2.png" alt="">
              <p>Para definir una función en Python se utiliza la palabra reservada def. A continuación viene el nombre
                o identificador de la función que es el que se utiliza para invocarla. Después del nombre hay que
                incluir los paréntesis y una lista opcional de parámetros. Por último, la cabecera o definición de la
                función termina con dos puntos.

                Tras los dos puntos se incluye el cuerpo de la función (con un sangrado mayor, generalmente cuatro
                espacios) que no es más que el conjunto de instrucciones que se encapsulan en dicha función y que le dan
                significado.

                En último lugar y de manera opcional, se añade la instrucción con la palabra reservada return para
                devolver un resultado.</p>
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>


  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop13" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center"></h2>
              <h6 class="text-center"><i>Mejores Lenguajes de Programación</i></h6>
            </div>
            <div class="col-md-9">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Lenguajes de Programación</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <img src="imgp/grafica.png" alt="" width="100%">
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>

        </div>
      </div>
    </div>
  </div>

  <div class="modal fade animate__animated animate__rotateIn" id="staticBackdrop14" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">
        <div class="modal-header  text-white" style="background: rgba(2, 5, 161, 0.91);">
          <h5 class="modal-title" id="staticBackdropLabel">Tutorial Python</h5>

          <button type="button" class="btn-close bg-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3">
              <img src="assets/img/polo503.png" width="100%">
              <div style="height: 20px;"></div>
              <div class="d-grid gap-2">

              </div>
              <div style="height: 20px;"></div>
              <h2 class="text-center"></h2>
              <h6 class="text-center"><i>Prueba Tu Conocimiento</i></h6>

            </div>
            <div class="col-md-9" id="combi1">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Prueba Tu Conocimiento</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <div id="nota">
              
                <center> <div class="text-primary" id="misbuenas" style="font-size: 50px;"></div></center>
               
                <center><div id="resultado" style="font-size: 50px;"></div></center>
                <center><div class="text-danger" id="mismalas" style="font-size: 30px;"></div></center>

              </div>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque4">
                <h4>Es un Objeto que permite recorrer sus elementos uno a uno </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r10">
                  <label class="form-check-label" for="flexRadioDefault10">
                    Contador
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r11">
                  <label class="form-check-label" for="flexRadioDefault11">
                    Objeto Numerico
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r12">
                  <label class="form-check-label" for="flexRadioDefault12">
                    Objeto Iterable
                  </label>
                </div>
              </div>

              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque2">
                <h4>Python es un Lenguaje de Programación basado en </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r4">
                  <label class="form-check-label" for="flexRadioDefault4">
                    Script
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r5">
                  <label class="form-check-label" for="flexRadioDefault5">
                    Evento
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r6">
                  <label class="form-check-label" for="flexRadioDefault6">
                    Diseño
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque1">
                <h4>Las Extenciones de las aplicaciones de Python se guardan </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1">
                  <label class="form-check-label" for="flexRadioDefault1">
                    .js
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r2">
                  <label class="form-check-label" for="flexRadioDefault2">
                    .html
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r3">
                  <label class="form-check-label" for="flexRadioDefault3">
                    .py
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque3">
                <h4>Son Variables que involucran datos lógicos </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r7">
                  <label class="form-check-label" for="flexRadioDefault7">
                    Enteros
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r8">
                  <label class="form-check-label" for="flexRadioDefault8">
                    Booleanas
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r9">
                  <label class="form-check-label" for="flexRadioDefault9">
                    Flotantes
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque6">
                <h4>Es un bucle que utiliza para recorrer los elementos de un objeto iterable </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r16">
                  <label class="form-check-label" for="flexRadioDefault16">
                    Ciclo Whle
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r17">
                  <label class="form-check-label" for="flexRadioDefault17">
                    Ciclo FOR
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r18">
                  <label class="form-check-label" for="flexRadioDefault18">
                    If else 
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque8">
                <h4>Una Variable Flotante son las que almacenan</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r22">
                  <label class="form-check-label" for="flexRadioDefault22">
                    Valores Lógicos
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r23">
                  <label class="form-check-label" for="flexRadioDefault23">
                    Cadena de Caracteres
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r24">
                  <label class="form-check-label" for="flexRadioDefault24">
                    Numeros Decimales
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque7">
                <h4>Es un bucle que se repite segun una condición</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r19">
                  <label class="form-check-label" for="flexRadioDefault19">
                    Ciclo While
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r20">
                  <label class="form-check-label" for="flexRadioDefault20">
                    Asignación de Variable
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r21">
                  <label class="form-check-label" for="flexRadioDefault21">
                    Ciclo FOR
                  </label>
                </div>
              </div>

              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque5">
                <h4>Es la union entre variables y cadenas de textos </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r13">
                  <label class="form-check-label" for="flexRadioDefault13">
                    Operadores de Comparación 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r14">
                  <label class="form-check-label" for="flexRadioDefault14">
                    Resultado de operaiones
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r15">
                  <label class="form-check-label" for="flexRadioDefault15">
                    Concatenación
                  </label>
                </div>
              </div>
              <br>
       
            
              <button class="btn btn-primary w-100" id="ver">Evaluar</button>    
            </div>


            <div class="col-md-9" id="combi2">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Prueba Tu Conocimiento</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <div id="nota1">
              
              <center> <div class="text-primary" id="misbuenas1" style="font-size: 50px;"></div></center>
             
              <center><div id="resultado1" style="font-size: 50px;"></div></center>
              <center><div class="text-danger" id="mismalas1" style="font-size: 30px;"></div></center>

            </div>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque11">
                <h4>Las Extenciones de las aplicaciones de Python se guardan </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r4000">
                  <label class="form-check-label" for="flexRadioDefault1">
                    .js
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r5000">
                  <label class="form-check-label" for="flexRadioDefault2">
                    .html
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r31">
                  <label class="form-check-label" for="flexRadioDefault3">
                    .py
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque21">
                <h4>Python es un Lenguaje de Programación basado en </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r41">
                  <label class="form-check-label" for="flexRadioDefault4">
                    Script
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r51">
                  <label class="form-check-label" for="flexRadioDefault5">
                    Evento
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r61">
                  <label class="form-check-label" for="flexRadioDefault6">
                    Diseño
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque31">
                <h4>Son Variables que involucran datos lógicos </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r71">
                  <label class="form-check-label" for="flexRadioDefault7">
                    Enteros
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r81">
                  <label class="form-check-label" for="flexRadioDefault8">
                    Booleanas
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r91">
                  <label class="form-check-label" for="flexRadioDefault9">
                    Flotantes
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque41">
                <h4>Es un Objeto que permite recorrer sus elementos uno a uno </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r101">
                  <label class="form-check-label" for="flexRadioDefault10">
                    Contador
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r111">
                  <label class="form-check-label" for="flexRadioDefault11">
                    Objeto Numerico
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r121">
                  <label class="form-check-label" for="flexRadioDefault12">
                    Objeto Iterable
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque51">
                <h4>Es la union entre variables y cadenas de textos </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r131">
                  <label class="form-check-label" for="flexRadioDefault13">
                    Operadores de Comparación 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r141">
                  <label class="form-check-label" for="flexRadioDefault14">
                    Resultado de operaiones
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r151">
                  <label class="form-check-label" for="flexRadioDefault15">
                    Concatenación
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque61">
                <h4>Es un bucle que utiliza para recorrer los elementos de un objeto iterable </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r161">
                  <label class="form-check-label" for="flexRadioDefault16">
                    Ciclo Whle
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r171">
                  <label class="form-check-label" for="flexRadioDefault17">
                    Ciclo FOR
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r181">
                  <label class="form-check-label" for="flexRadioDefault18">
                    If else 
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque71">
                <h4>Es un bucle que se repite segun una condición</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r191">
                  <label class="form-check-label" for="flexRadioDefault19">
                    Ciclo While
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r201">
                  <label class="form-check-label" for="flexRadioDefault20">
                    Asignación de Variable
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r211">
                  <label class="form-check-label" for="flexRadioDefault21">
                    Ciclo FOR
                  </label>
                </div>
              </div>

              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque81">
                <h4>Una Variable Flotante son las que almacenan</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r221">
                  <label class="form-check-label" for="flexRadioDefault22">
                    Valores Lógicos
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r231">
                  <label class="form-check-label" for="flexRadioDefault23">
                    Cadena de Caracteres
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r241">
                  <label class="form-check-label" for="flexRadioDefault24">
                    Numeros Decimales
                  </label>
                </div>
              </div>
              <br>


              <button class="btn btn-primary w-100" id="ver1">Evaluar</button>    
            </div>



            <div class="col-md-9" id="combi3">
              <div class="section-title text-center" data-aos="fade-up">
                <h2>Prueba Tu Conocimiento</h2>
                <img src="assets/img/20002.png" alt="">
              </div>
              <div id="nota3">
              
              <center> <div class="text-primary" id="misbuenas111" style="font-size: 50px;"></div></center>
             
              <center><div id="resultado3" style="font-size: 50px;"></div></center>
              <center><div class="text-danger" id="mismalas111" style="font-size: 30px;"></div></center>

            </div>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque311">
                <h4>Son Variables que involucran datos lógicos </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r711">
                  <label class="form-check-label" for="flexRadioDefault7">
                    Enteros
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r811">
                  <label class="form-check-label" for="flexRadioDefault8">
                    Booleanas
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r911">
                  <label class="form-check-label" for="flexRadioDefault9">
                    Flotantes
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque111">
                <h4>Las Extenciones de las aplicaciones de Python se guardan </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r8000">
                  <label class="form-check-label" for="flexRadioDefault1">
                    .js
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r9000">
                  <label class="form-check-label" for="flexRadioDefault2">
                    .html
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r311">
                  <label class="form-check-label" for="flexRadioDefault3">
                    .py
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque211">
                <h4>Python es un Lenguaje de Programación basado en </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r411">
                  <label class="form-check-label" for="flexRadioDefault4">
                    Script
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r511">
                  <label class="form-check-label" for="flexRadioDefault5">
                    Evento
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r611">
                  <label class="form-check-label" for="flexRadioDefault6">
                    Diseño
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque511">
                <h4>Es la union entre variables y cadenas de textos </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1311">
                  <label class="form-check-label" for="flexRadioDefault13">
                    Operadores de Comparación 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1411">
                  <label class="form-check-label" for="flexRadioDefault14">
                    Resultado de operaiones
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1511">
                  <label class="form-check-label" for="flexRadioDefault15">
                    Concatenación
                  </label>
                </div>
              </div>

              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque411">
                <h4>Es un Objeto que permite recorrer sus elementos uno a uno </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1011">
                  <label class="form-check-label" for="flexRadioDefault10">
                    Contador
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1111">
                  <label class="form-check-label" for="flexRadioDefault11">
                    Objeto Numerico
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1211">
                  <label class="form-check-label" for="flexRadioDefault12">
                    Objeto Iterable
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque611">
                <h4>Es un bucle que utiliza para recorrer los elementos de un objeto iterable </h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1611">
                  <label class="form-check-label" for="flexRadioDefault16">
                    Ciclo While
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1711">
                  <label class="form-check-label" for="flexRadioDefault17">
                    Ciclo FOR
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1811">
                  <label class="form-check-label" for="flexRadioDefault18">
                    If else 
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque811">
                <h4>Una Variable Flotante son las que almacenan</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r2211">
                  <label class="form-check-label" for="flexRadioDefault22">
                    Valores Lógicos
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r2311">
                  <label class="form-check-label" for="flexRadioDefault23">
                    Cadena de Caracteres
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r2411">
                  <label class="form-check-label" for="flexRadioDefault24">
                    Numeros Decimales
                  </label>
                </div>
              </div>
              <br>
              <div class="jumbotron  p-3 rounded" style="background-color: #e7e8ec;" id="bloque711">
                <h4>Es un bucle que se repite segun una condición</h4>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r1911">
                  <label class="form-check-label" for="flexRadioDefault19">
                    Ciclo While
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r2011">
                  <label class="form-check-label" for="flexRadioDefault20">
                    Asignación de Variable
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="flexRadioDefault" id="r2111">
                  <label class="form-check-label" for="flexRadioDefault21">
                    Ciclo FOR
                  </label>
                </div>
              </div>
              <br>
              
              <button class="btn btn-primary w-100" id="ver3">Evaluar</button>    
            </div>

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="trancar">Cerrar</button>

        </div>
      </div>
    </div>
  </div>
                <script src="assets/js/jquery.js"></script>
              <script src="assets/js/prueba.js"></script>
</body>

<script>

$('.probando').click(function(){
  a=0;
  a=Math.floor(Math.random() * 3);

  //alert(a)
 
  c=document.getElementById("combi1").style.display="none";
  c2=document.getElementById("combi2").style.display="none";
  c3=document.getElementById("combi3").style.display="none";


  if (a==0){
    c=document.getElementById("combi1").style.display="block";
    c2=document.getElementById("combi2").style.display="none";
    c3=document.getElementById("combi3").style.display="none";
  }
  


  if (a==1){
    c=document.getElementById("combi1").style.display="none";
    c2=document.getElementById("combi2").style.display="block";
    c3=document.getElementById("combi3").style.display="none";
  }

  if (a==2){
    c=document.getElementById("combi1").style.display="none";
    c2=document.getElementById("combi2").style.display="none";
    c3=document.getElementById("combi3").style.display="block";
  }


});

  

  


</script>
</html>