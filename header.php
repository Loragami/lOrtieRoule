<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" type="image/png" href="images/nettlefav.png" />
	<link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Noto+Sans|Nunito+Sans|Raleway+Dots|Roboto:100|Work+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="site-inner">

		<header class="header">
      <div class="container">

      <div class="row">
        <img src="http://coudacoud.org/wp-content/themes/twentysixteen/images/LOGO.gif" class="img-responsive col-xs-4 col-md-2" alt="logo">
        <img src="http://coudacoud.org/wp-content/themes/twentysixteen/images/lortieroule.png" class="img-responsive col-xs-4 col-md-3 col-md-offset-2" alt="ortieroule">
        <div class="col col-md-offset-2 col-xs-1">
         <div id="iwidth">
          <a href="https://fr-fr.facebook.com/coudacoud" id="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/coudacoud" id="twitter"><i class="fa fa-twitter"></i></a>
          <a href="https://www.google.com/intl/fr/gmail/about/" id="contact"><i class="fa fa-envelope-o"></i></a>
        </div>
       </div>
      </div>
      <div class="row">
      <p class="col-xs-12 col-md-4-offset-3 " id="font">Lieu d’échange pour promouvoir l’entraide et la défense de l’environnement</p>
    </div>
  </div>
</header>
<main class="main">
	<div id="nav">
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
 <div class="container-fluid">
	 <!-- Brand and toggle get grouped for better mobile display -->
	 <div class="navbar-header">
		 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			 <span class="sr-only">Toggle navigation</span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
					 <span class="icon-bar"></span>
		 </button>
	 </div>
	 <a class="navbar-brand" href="http://coudacoud.org"><i class="fa fa-home"></i></a>

			 <?php
			 wp_nav_menu( array(
					 'theme_location'    => 'primary',
					 'depth'             => 3,
					 'container'         => 'div',
					 'container_class'   => 'collapse navbar-collapse',
					 'container_id'      => 'bs-example-navbar-collapse-1',
					 'menu_class'        => 'nav navbar-nav',
					 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					 'walker'            => new WP_Bootstrap_Navwalker())
			 );
      ?>
			<div class="container">
 	     <div class="row">
		    <div class="row">
          <div class="col-lg-3 col-md-3 pull-right">
            <div class="">
              <div class="custom-search">
               <input type="text" class="form-control" placeholder="rechercher...">
              </div>
             </div>
            </div>
          </div>
       </div>
 </div>
 </div>
</nav>
 </div><!-- #nav -->
    </div>
</div>
</main>

		<div id="content" class="site-content">
