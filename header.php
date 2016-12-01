<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="author" content="Less Is, http://less.is" />
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:type" content="company" />
	<meta property="og:description" content="">
	<meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/og-1200x630.jpg">
	<meta property="og:url" content="<?php echo home_url(); ?>">
	<meta name="twitter:card" content="summary_large_image">
	<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
	<meta name="twitter:image:alt" content="">

	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
	
	<script src="<?php bloginfo('template_directory'); ?>/js/libs/modernizr-2.6.2.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php bloginfo('template_directory'); ?>/js/html5shiv.js"></script>
	<![endif]-->
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<!-- Compiled and minified CSS -->
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">

	<!--Import Google Icon Font-->
      	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

      	<!--Let browser know website is optimized for mobile-->
      	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
 <![endif]-->
	
<div class="container"><a href="#" data-activates="nav-mobile" class="button-collapse top-nav waves-effect waves-light circle hide-on-large-only"><i class="material-icons">menu</i></a></div>	
	<ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0%);">
        <li class="logo"><a id="logo-container" href="http://materializecss.com/" class="brand-logo">
            <object id="front-page-logo" type="image/svg+xml" data="res/materialize.svg">Your browser does not support SVG</object></a></li>
        <li class="search">
          <div class="search-wrapper card">
            <input id="search"><i class="material-icons">search</i>
            <div class="search-results"></div>
          </div>
        </li>
 <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '' ) ); ?>
        <li class="bold"><a href="http://materializecss.com/mobile.html" class="waves-effect waves-teal">Mobile</a></li>
      </ul>
   <h1 class="logo"><a href="<?php echo home_url() ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></h1>
