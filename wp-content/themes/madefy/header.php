<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/owl/owl.theme.default.min.css">

    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css?r=<?php echo rand(1, 99); ?>">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

    <!--  <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quantico:wght@400;700&display=swap" rel="stylesheet"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quattrocento&display=swap" rel="stylesheet">



    <script src="<?php bloginfo('template_url'); ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <?php wp_head(); ?>

    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-MZCN3DG');</script>
	<!-- End Google Tag Manager -->

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MZCN3DG"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <header class="hidden-sm hidden-xs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php bloginfo('url'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/img/logo-header.png" alt="">
                    </a>
                </div>
                <div class="col-md-9 text-right">
                    <ul class="list-unstyled list-inline">
                        <li> <a href="<?php bloginfo('url'); ?>" <?php if (is_home()) {
                                                                        echo 'class="active"';
                                                                    } ?>>Home</a> </li>
                        <li> <a href="<?php bloginfo('url'); ?>/sobre-nos" <?php if (is_page('sobre-nos')) {
                                                                                echo 'class="active"';
                                                                            } ?>>Sobre Nós</a></li>

                        <li>
                            <div class="dropdown">
                                <button  class="dropbtn"> <a href="<?php bloginfo('url'); ?>/nossos-servicos">Soluções</a></button>
                                <div class="dropdown-content">
                                     <?php
                                        query_posts('post_type=solucoes');
                                        if (have_posts()) : while (have_posts()) : the_post();
                                        ?>

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                        <?php endwhile; ?>
                                         <?php else : ?>
                                             <p>Desculpe, nenhum conteúdo disponível.</p>
                                         <?php endif;
                                            wp_reset_query(); ?>
                                </div>
                            </div>
                        </li>

                        <li>
                            <div class="dropdown">
                                <button  class="dropbtn"> <a href="<?php bloginfo('url'); ?>/nossos-servicos">Nossos Serviços</a></button>
                                <div class="dropdown-content">
                                     <?php
                                        query_posts('post_type=servicos');
                                        if (have_posts()) : while (have_posts()) : the_post();
                                        ?>

                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

                                        <?php endwhile; ?>
                                         <?php else : ?>
                                             <p>Desculpe, nenhum conteúdo disponível.</p>
                                         <?php endif;
                                            wp_reset_query(); ?>
                                </div>
                            </div>
                        </li>
                        <li> <a href="<?php bloginfo('url'); ?>/blog" <?php if (is_page('blog') || (is_single() && get_post_type() == "post")) {
                                                                            echo 'class="active"';
                                                                        } ?>>Blog</a></li>

                        <!--<li> <a href="<?php bloginfo('url'); ?>/nossos-servicos#nossa-equipe " <?php if (is_page('nossos-servicos')) {
                                                                                    echo 'class="active"';
                                                                                } ?>>Equipe</a></li>-->
                        <li class="lancamento"> <a href="<?php bloginfo('url'); ?>/fale-conosco">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <nav class="navbar navbar-default hidden-lg hidden-md">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>/"> <img src="<?php bloginfo('template_url'); ?>/img/logo-header.png" alt="" class="img-responsive"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php bloginfo('url'); ?>/">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="<?php bloginfo('url'); ?>/sobre-nos">Sobre Nós</a></li>

                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Soluções <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li>
                                <?php
                                query_posts('post_type=solucoes');
                                if (have_posts()) : while (have_posts()) : the_post();
                                ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <p>Desculpe, nenhum conteúdo disponível.</p>
                                <?php endif;
                                wp_reset_query(); ?>

                            </li>




                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nossos Serviços <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li>
                                <a href="<?php bloginfo('url'); ?>/nossos-servicos">Serviços</a>
                                <?php
                                query_posts('post_type=servicos&posts_per_page=-1');
                                if (have_posts()) : while (have_posts()) : the_post();
                                ?>
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <p>Desculpe, nenhum conteúdo disponível.</p>
                                <?php endif;
                                wp_reset_query(); ?>

                            </li>




                        </ul>
                    </li>
                    <li><a href="<?php bloginfo('url'); ?>/blog">Blog</a></li>
                    <!--<li><a href="<?php bloginfo('url'); ?>/fale-conosco">Equipe</a></li>-->
                    <li><a href="<?php bloginfo('url'); ?>/fale-conosco">Contato</a></li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>