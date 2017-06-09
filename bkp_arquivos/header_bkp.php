<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <meta name="description" content="Portal do Conselho Regional de Enfermagem.">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:description" content="Portal do Conselho Regional de Enfermagem." />
    <meta property="og:url" content="http://crem.gov.br" />
    <meta property="og:image" content="http://http://crem.gov.br/img/og-image.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="favicon.ico">

    <title>
        <?php bloginfo('name'); ?>
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Scripts Font Awesome -->
    <script src="https://use.fontawesome.com/1d44302f92.js"></script>

    <!-- Inicio Wordpress Header -->
    <?php wp_head(); ?>
    <!-- Final Wordpress Header -->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/crem/">Página Inicial</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/crem/sobre/">Sobre</a>
                    </li>
                    <li>
                        <a href="/crem/noticias/">Notícias</a>
                    </li>
                    <li>
                        <a href="/crem/galeria/">Galeria</a>
                    </li>
                    <li>
                        <a href="/crem/eventos/">Eventos</a>
                    </li>
                    <li>
                        <a href="/crem/contato/">Contato</a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Portais
          <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">APE</a></li>
                            <li><a href="#">FAE</a></li>
                            <li><a href="#">SEU</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- BG DESKTOP -->
    <?php 
        $imagem_id = get_field('background_imagem');
        $background_large = wp_get_attachment_image_src($imagem_id, 'large');
        $background_medium = wp_get_attachment_image_src($imagem_id, 'medium');
    ?>
    <style type="text/css">
        .business-header {
            background: url('<?php echo $background_large[0] ?>') center center no-repeat scroll;
            background-size: cover;
        }
        /* BG SMARTPHONES */
        
        @media only screen and (max-width: 767px) {
            .business-header {
                background: url('<?php echo $background_medium[0] ?>') center center no-repeat scroll;
                height: 100px;
            }
        }

    </style>
    <header class="business-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!--  <h1 class="tagline">Conselho Regional de Enfermagem do Mercosul</h1>-->
                </div>
            </div>
        </div>
    </header>
