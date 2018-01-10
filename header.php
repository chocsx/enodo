
<!doctype html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Temos burritos, tacos, nachos, guacamole e cerveja com limão. Somos de Porto Alegre e buscamos trazer um pouco do México e da Califórnia para vocês.">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <title><?php wp_title(' '); ?></title>
    <link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/apple-touch-icon.png">
    <link rel="icon" type="image/ico" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css?v=2">
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/vendor/modernizr.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-111571451-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-111571451-1');
    </script>
        <!-- Header Wordpress -->
        <?php wp_head(); ?>
        <!-- Fecha Header Wordpress -->
    </head>

<body <?php body_class(); ?>>
    <!--[if IE]><p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p><![endif]-->
    <header class="topo">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-8">
                    <a href="/">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-enodo.svg" alt="" class="img-responsive">
                    </a>
                </div>
                <div class="col-4 hidden-lg hidden-md-up">
                    <div class="hamburger hamburger--collapse">
                        <div class="hamburger-box">
                            <div class="hamburger-inner"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12 ml-md-auto">
                    <nav class="menu">
                        <ul>
                            <li><a href="#cardapio">cardápio</a></li>
                            <li><a href="#eventos">eventos</a></li>
                            <li><a href="#sobre">sobre</a></li>
                            <li><a href="#contato">contato</a></li>
                            <li>
                                <a class="pedido" data-fancybox="modal" data-src="#modal" href="javascript:;">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ifood-icon.png" height="25" width="25" alt=""> DELIVERY ONLINE</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
