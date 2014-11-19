<!DOCTYPE html>
    <!--[if lt IE 7]> <html class="no-js ie6 oldie lang_0" id="html"> <![endif]-->
    <!--[if IE 7]> <html class="no-js ie7 oldie lang_0" id="html"> <![endif]-->
    <!--[if IE 8]> <html class="no-js ie8 oldie lang_0" id="html"> <![endif]-->
    <!--[if gt IE 8]> <!-->
    <html class="no-js ie9 lang_0" id="html">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon; charset=binary">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon; charset=binary">
        <title>
            <?php if ( is_home() ) { ?>Colegios de calidad: <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
            <?php if ( is_author() ) { ?>Colegios de calidad: <?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
            <?php if ( is_single() ) { ?>Colegios de calidad: <?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
            <?php if ( is_page() ) { ?>Colegios de calidad: <?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
            <?php if ( is_category() ) { ?>Colegios de calidad: <?php bloginfo('name'); ?> | Archivo por Categoría | <?php single_cat_title(); ?><?php } ?>
            <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
        </title>
        <?php wp_head(); ?>
        <meta name="revisit-after" content="1 hour">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
        <base href="">
        <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon; charset=binary">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon; charset=binary">
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <!-- ARCHIVOS CSS COLEGIOS DE CALIDAD-->
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/QUERIES.css" media="all">
        <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/slick-style.css" media="all">
        <!-- FIN ARCHIVOS CSS COLEGIOS DE CALIDAD--> 
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <!--metas de redes IMPORTANTE -->
    </head>
<body>