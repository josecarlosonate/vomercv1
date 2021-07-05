<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="title" content="VOMERC">

    <meta name="description" content="Vomerc, es un CENTRO COMERCIAL DIGITAL o marketplace donde, GRATUITAMENTE, podrán interactuar los negocios, emprendedores y personas, en una dinámica de compra y venta de productos y servicios.">

    <meta name="keyword" content="vomerc,comercio digital, comercio electronico">
    <meta name="author" content="ING Jose Rodriguez" />

    <meta name="copyright" content="JR SAS" />
    <link rel="shortcut icon" href="logo.ico">
    <meta name="robots" content="index" />
    <meta name="theme-color" content="#FB0d07">

    <title>VOMERC</title>

    <!--=====================================
    {{-- fontawesome --}}
    ======================================-->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <!--=====================================
	HOJA DE CSS 
	======================================-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />


    <!--=====================================
	Fonts 
	======================================-->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;600&family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&display=swap" rel="stylesheet">



</head>

<body>
    <div class="barra fixed-top">
        <div class="container" id="">
            <nav class="d-flex flex-wrap justify-content-between pt-2 bg-white ">
                <a href="/" title="Vomerc" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none logo">
                    <img class="img-fluid " src="img/logo.png" alt="">
                </a>

                <button id="btnNav" class="navbar-toggler text-danger" type="button" data-toggle="collapse" data-target="#collapseNavbar" aria-expanded="false" aria-controls="navbarText" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="navbar-collapse collapse" id="collapseNavbar">
                    <div class="card card-body">
                        <ul class="navbar-nav text-center" id="nav">
                            <li class="nav-item">
                                <a class="nav-link active js-scroll-trigger enlaces linkhome" aria-current="page" href="#about">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a href="#funcionamiento" id="" class="nav-link js-scroll-trigger enlaces linkFuncionamiento">Como Funciona</a>
                            </li>
                            <li class="nav-item">
                                <a href="#feature" id="" class="nav-link js-scroll-trigger enlaces linkFeature">Características</a>
                            </li>
                            <li class="nav-item">
                                <a href="#screenshots" class="nav-link js-scroll-trigger enlaces linkscreenshots">Capturas de pantalla</a>
                            </li>
                            <li class="nav-item">
                                <a href="#descarga" class="nav-link js-scroll-trigger enlaces linkdescarga">Descargar</a>
                            </li>
                            <li class="nav-item">
                                <a href="#opiniones" class="nav-link js-scroll-trigger enlaces linkopiniones">Opiniones</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <ul class="nav nav-pills mb-2" id="collapseNa">
                    <li class="nav-item"><a class="nav-link active js-scroll-trigger enlaces linkhome" aria-current="page" href="#about">Inicio</a></li>
                    <li class="nav-item"><a href="#funcionamiento" class="nav-link js-scroll-trigger enlaces linkFuncionamiento">Como Funciona</a></li>
                    <li class="nav-item"><a href="#feature" class="nav-link js-scroll-trigger enlaces linkFeature">Características</a></li>
                    <li class="nav-item"><a href="#screenshots" class="nav-link js-scroll-trigger enlaces linkscreenshots">Capturas de pantalla</a></li>
                    <li class="nav-item"><a href="#descarga" class="nav-link js-scroll-trigger enlaces linkdescarga">Descargar</a></li>
                    <li class="nav-item"><a href="#opiniones" class="nav-link js-scroll-trigger enlaces linkopiniones">Opiniones</a></li>
                </ul>

            </nav>
        </div>
    </div>

    <!-- seccion 1 -->
    <section class="sectcion1" id="about">
        <div class="container">
            <div class="hero-content">
                <h1>Vomerc comercio digital <br>Totalmente Gratuito</h1>
                <p>Cualquier persona tendrá acceso a una gran <br> cantidad de productos y servicios.</p>
                <div class="btn-group">
                    <!-- <a href="#"><img src="img/appstore.png" alt="appstore"></a> -->
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US"><img src="img/playstore2.png" alt="playsotre"></a>
                </div>
            </div>
        </div>
        <div class="hero-moc">
        </div>
    </section> <!-- end seccion 1 -->

    <!-- seccion 2 -->
    <section class="promo-section padding" id="">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 sm-padding">
                    <div class="promo-content text-center">
                        <!-- <i class="fas fa-lock"></i> -->
                        <img src="img/ico2.svg" alt="">
                        <h3>Facil contacto</h3>
                        <p>Permite el contacto entre productores primarios y potenciales clientes mayoritarios y/o minoritarios a nivel nacional.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 sm-padding">
                    <div class="promo-content text-center">
                        <!-- <i class="fas fa-layer-group"></i> -->
                        <img src="img/ico8.svg" alt="">
                        <h3>Diversidad de productos</h3>
                        <p>Encuentra una gran variedad de productos ofrecidos cerca de donde te encuentres, disponibles en nuestra app con un solo click.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 sm-padding">
                    <div class="promo-content text-center">
                        <!-- <i class="fas fa-align-justify"></i> -->
                        <img src="img/ico6.svg" alt="">
                        <h3>Asesoria gratis</h3>
                        <p>Recibe asesoría personalizada por parte del ofertante, podras interactuar directamente con el vendedor a través de nuestro chat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 3 -->
    <section id="funcionamiento" class="content-section transparencia padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="content-mockups">
                        <div class="mockup-back"></div>
                        <div class="mockup-front"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-heading mb-40">
                        <h2>¿Cómo funciona esta aplicación?</h2>
                        <p>Vomerc, es un CENTRO COMERCIAL DIGITAL o marketplace donde, GRATUITAMENTE, podrán interactuar los negocios, emprendedores y personas, en una dinámica de compra y venta de productos y servicios.</p>
                    </div>
                    <div class="content-lists">
                        <div class="list-item">
                            <!-- <i class="icon-tools"></i> -->
                            <!-- <i class="fas fa-mobile-alt"></i> -->
                            <i class="fas fa-tablet-alt"></i>
                            <div class="list-content">
                                <h3>Crea tu cuenta</h3>
                                <p>Registrarse es el primer paso para poder <br> acceder a nuestro catalogo vomerc.</p>
                            </div>
                        </div>
                        <div class="list-item">
                            <!-- <i class="icon-pictures"></i> -->
                            <i class="fas fa-cart-plus"></i>
                            <div class="list-content">
                                <h3>Accede a un producto</h3>
                                <p>Escoge un producto o servicio de los <br> ofrecidos en nuestra app, encontrarás muchos para elegir</p>
                            </div>
                        </div>
                        <div class="list-item">
                            <!-- <i class="icon-genius"></i> -->
                            <i class="fas fa-comments"></i>
                            <div class="list-content">
                                <h3>Contacta con el vendedor</h3>
                                <p>Ponte en contacto directamente con el vendedor atrevés de nuestro <br> chat y compra sin ningún intermediario.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 4 -->
    <section id="feature" class="features-section padding">
        <div class="container">
            <div class="section-heading text-center mb-60">
                <h2>Características avanzadas</h2>
                <p>Es una app de comercio increíble, moderna e intuitiva para uso comercial,
                    para comprar o vender el producto que quieras.</p>
            </div>
            <div class="row feature-wrap">
                <div class="col-md-4 col-sm-6">
                    <div class="feature-content text-center">
                        <i class="icon-laptop"></i>
                        <h3>Potente sistema</h3>
                        <p>Esta herramienta es un sistema Enterprise con capacidad de despliegue en la nube y alta gestión de datos.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-anchor "></i>
                        <h3>Personalización</h3>
                        <p>Edita tu perfil, agrega tus productos favoritos, contacta directamente con el vendedor.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-genius"></i>
                        <h3>Facilidad de acceso</h3>
                        <p>Regístrate una única vez con tu número de celular y tendrás acceso a todos los productos ofrecidos en Vomerc.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-clock"></i>
                        <h3>Zona local</h3>
                        <p>Los negocios y emprendedores dispondrán de más de 100 categorías para ofertar sus productos o servicios a nivel local.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-layers"></i>
                        <h3>Cuentas Gratis</h3>
                        <p>GRATUITAMENTE, podrán interactuar los negocios y personas, en una dinámica de compra y venta de productos y servicios.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 xs-padding">
                    <div class="feature-content text-center">
                        <i class="icon-refresh"></i>
                        <h3>Actualizaciones y seguridad</h3>
                        <p>Constantemente realizamos actualizaciones cuya misión es mejorar tanto aspectos de funcionalidad como de seguridad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 5 -->
    <section id="screenshots" class="screenshots-section bg-grey padding transparencia">
        <div class="container">
            <div class="section-heading mb-60 text-center">
                <h2>Capturas de pantalla</h2>
                <p>Conoce más de cerca esta increíble aplicación, mira algunos captures y anímate a descargarla.</p>
            </div>
            <ul class="single-item">
                <li class="">
                    <img src="img/v4.png" alt="">
                </li>
                <li>
                    <img src="img/v2.png" alt="">
                </li>
                <li>
                    <img src="img/v5.png" alt="">
                </li>
                <li>
                    <img src="img/v6.png" alt="">
                </li>
                <li>
                    <img src="img/v7.png" alt="">
                </li>
                <li>
                    <img src="img/v8.png" alt="">
                </li>
                <li>
                    <img src="img/v9.png" alt="">
                </li>
                <li>
                    <img src="img/v3.png" alt="">
                </li>
            </ul>
        </div>
    </section>
    <!-- seccion 6 (descarga) -->
    <section id="descarga" class="features-section padding">
        <div class="container d-flex p-2 justify-content-around" id="caja-descarga">
            <div class="">
                <h1>Disponible para su descarga <br>en la Play Store</h1>
                <p>En el botón de Google Play iras directamente <br> a nuestra app.</p>
            </div>
            <div class="">
                <div class="btn-group">
                    <!-- <a href="#"><img src="img/appstore.png" alt="appstore"></a> -->
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US"><img src="img/playstore2.png" alt="playsotre"></a>
                </div>
            </div>
        </div>
    </section>
    <!-- seccion 7 (opiniones) -->
    <section id="opiniones" class="padding transparencia">
        <div class="container">
            <div class="section-heading text-center mb-60">
                <h2>Opininones de nuestros usuarios</h2>
                <p>Alguno de nuestros usuarios opinaron sobre Vomerc, conoce lo que ellos piensan.</p>
            </div>
            <div class="row comentarios">
                <!-- comentario 1 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Joan Fuentes
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14Ghf2-RcEz8wm22A6CPibfUvkhn-5vcuI2fSAidZJg=w48-h48-n-rw" class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                        La idea es buena, pero deberia existir un menu con las categorías ordenado. Es muy tedioso tener que ir bajando para encontrar las categorías.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="far fa-star text-success"></i>
                        <i class="far fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 2 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Alexander Mesa
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GgRW0p3sK0pYX_dUqdqPqSaOAL9Ra_XGhrTplxz6w=w48-h48-n-rw" class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Excelente aplicación, muy útil y su uso es bastante fácil, super recomendada.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 3 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Anchy Gama
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14Gi9oOP6VSL0tGZx8Czk7fQx-ucrJdq7suUdVIMiCg=w48-h48-n-rw" class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Muy practica y con funciones específicas que le dan al usuario una mejor experiencia al momento de buscar o vender un servicio.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fas fa-star-half-alt text-success"></i>
                    </div>
                </div>
                <!-- comentario 4 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        William Poveda
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GgEuA0DYl_qkuP4Pzp6A0hSywZumEx47kvnUoOYVw=w48-h48-n-rw" class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Muy buena app, puedo hablar directamente con el vendedor y llegar a un acuerdo beneficioso para los dos.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="far fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 5 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        Ramon Brun
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GiX0C1b2_tS-y5Btf8Najzs_jH7ROoI3ZPQKqq_nQ=w48-h48-n-rw" class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Muy bueno App, impulsando el mercado local a pequeñas y grandes empresas.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                    </div>
                </div>
                <!-- comentario 6 -->
                <div class="card bg-light mb-3 mr-5 p-0 col-sm-3">
                    <div class="card-header text-uppercase">
                        karen camargo
                        <span class="text-right ml-3">
                            <img src="https://play-lh.googleusercontent.com/a-/AOh14GiaXEeiijq5VA-JIHlpPaGM-enJQgD7UOEwiAccc1w=w48-h48-n-rw" class="img-fluid rounded-circle" width="15%">
                        </span>
                    </div>
                    <div class="card-body">
                        <small class="card-text">
                            Esta es la herramienta que estábamos necesitando los emprendedores para ampliar nuestra cliientela a nivel local.
                        </small>
                    </div>
                    <div class="card-footer">
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                        <i class="fa fa-star text-success"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="got-top-container">
        <div class="got-top-botton">
            <i class="fas fa-chevron-up"></i>
        </div>
    </div>
    <!--  footer -->
    <footer>
        <div class="container">
            <div class="c">
                <h4>VOMERC</h4>
                <p>CENTRO COMERCIAL DIGITAL o marketplace donde, GRATUITAMENTE, podrán interactuar los negocios, emprendedores y personas, en una dinámica de compra y venta de productos y servicios.</p>
            </div>
            <div class="c">
                <h4>NUESTRAS REDES</h4>
                <div class="caja-icono">
                    <div class="icono" title="facebook">
                        <a href="https://www.facebook.com/vomerc" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
                    </div>
                    <div class="icono" title="youtube">
                        <a href="https://www.youtube.com/channel/UCtK3Ph_aaPHbzoNH_CV87qQ" target="_blank" rel="noopener noreferrer"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="icono" title="twitter">
                        <a href="https://twitter.com/Vomerc_app" target="_blank" rel="noopener noreferrer"><i class="fab fa-twitter"></i></a>
                    </div>
                    <div class="icono" title="instagram">
                        <a href="https://www.instagram.com/vomerc_app/?hl=es-la" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                    </div>
                    <!-- <br>
                    <span><i class="fab fa-whatsapp"></i>: +57 3153302682</span>
                    <span><i class="fab fa-whatsapp"></i>: +57 3104955163</span> -->
                     <div class="icono" title="whatsapp">
                        <a href="https://wa.me/573153302682" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                    </div><!--
                    <div class="icono" title="whatsapp 2">
                        <a href="https://wa.me/573104955163" target="_blank" rel="noopener noreferrer"><i class="fab fa-whatsapp"></i></a>
                    </div> -->
                </div>
            </div>
            <div class="c">
                <h4>DESCARGAS</h4>
                <div class="btn-group">
                    <!-- <a href="#"><img src="img/appstore.png" alt="appstore"></a> -->
                    <a target="_blank" href="https://play.google.com/store/apps/details?id=com.vomerc.vomerc&hl=es_CO&gl=US"><img src="img/playstore2.png" alt="playsotre"></a>
                </div>
            </div>
        </div>
        <div class="acerca text-center">
            <h6> &copy; <b>VOMERC</b> Todos los derechos reservados - info@vomerc.com - juridica@vomerc.com 
            <br> Desarrollador Web Jose Rodriguez - tel: 324 409 5054 </h6>
        </div>
    </footer>

    <!-- script -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script type="text/javascript">
        $('.single-item').slick({
            centerMode: true,
            centerPadding: '70px',
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    <script src="js/index.js"></script>
</body>

</html>