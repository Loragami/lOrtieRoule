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
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>

		<header class="header">
      <div class="container">

      <div class="row">
        <img src="wp-content/themes/twentysixteen/images/LOGO.gif" class="img-responsive col-xs-4 col-md-2" alt="logo">
        <img src="wp-content/themes/twentysixteen/images/lortieroule.png" class="img-responsive col-xs-4 col-md-3 col-md-offset-2" alt="ortieroule">
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
  <div class="row mh3" id="bcolor">
    <div class="col-xs-12 col-md-4">
      <p class="intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
    </div>
  </div>
			<?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
							<!-- <button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

							 <div id="site-header-menu" class="site-header-menu"> -->
								 <div class="navbar-wrapper" class="col-xs-4 col-md-12">
									 <?php if ( has_nav_menu( 'primary' ) ) : ?>
										 <div class="container-fluid">
											 <nav class="navbar navbar-fixed-top" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
												 <div class="container">
												 		 <div class="navbar-header">
															 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
																<span class="sr-only">Toggle navigation</span>
																<span class="icon-bar"></span>
																<span class="icon-bar"></span>
																<span class="icon-bar"></span>
															</button>
													 <?php
															 wp_nav_menu( array(
																	 'theme_location' => 'primary',
																	 'menu_class'     => 'primary-menu',
																) );
													 ?>
												 </div>
											 </div>
											 </nav>
										 </div>
										 </div><!-- .main-navigation -->
									 <?php endif; ?>
							 </div><!-- .site-header-menu -->
					 <?php endif; ?>
    <!--
		<div class="navbar-wrapper" class="col-xs-4 col-md-12">
		<div class="container-fluid">

		 -->

     <!-- <nav class="navbar navbar-fixed-top">
           <div class="container">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                 </button>
                   <a class="navbar-brand" href="#"><i class="fa fa-home"></i></a>
                </div>
                <div class="navbar-collapse collapse" class="col-md-offset-2" >
                    <ul class="nav navbar-nav">
                      <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">L'ASSOCIATION<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                              <li><a href="#">NOTRE HISTOIRE</a></li>
                              <li><a href="#">NOS MISSIONS</a></li>
                              <li><a href="#">NOTRE ORGANISATION</a></li>
                              <li><a href="#">NOUS REJOINDRE</a></li>
                              <li><a href="#">NOS PARTENAIRES</a></li>
                            </ul>
                          </li>
                            <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">L'ORTIE ROULE<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">LIEU DE RENCONTRE ET D’ECHANGE</a></li>
                                <li><a href="#">LIEU PARTAGÉ</a></li>
                                </ul>
                        </li>
                        <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESPACE GRATUITE<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#">DONNER ET PRENDRE POUR AGIR DURABLEMENT</a></li>
                              <li><a href="#">COUD’A COUD’ RECUPERE, REEMPLOI, REMET A DISPOSITION</a></li>
                              <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="#">INFOS PRATIQUES</a></li>

                               <ul class="dropdown-menu">
                                <li><a href="#">Qui peut donner</a></li>
                                <li><a href="#">Pour qui</a></li>
                                <li><a href="#">Quoi (selon les evts)</a></li>
                                <li><a href="#">Quand (dimanche et moment de fête)</a></li>
                                <li><a href="#">A qui : les bénévoles</a></li>
                                <li><a href="#">Comment (sacs, quantité)</a></li>
                                <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="#">Comment aider</a>
                                 <ul class="dropdown-menu">
                                  <li><a href="#">LES ESPACES DE GRATUITE (renvoi au programme)</li>
                                  <li><a href="#"></a>VOTRE SOUTIEN</li>
                                 </ul>
                                 </li>
                           </ul>
                              </ul>
                            </li>
                          <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ATELIERS/EVENEMENTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                             <li><a href="#">ATELIERS</a></li>
                             <li><a href="#">SCENE OUVERTE</a></li>
                             <li><a href="#">EVENEMENT (renvoi aux archives)</a></li>
                             <li><a href="#">ACCUEIL ECRIVAIN PUBLIC</a></li>
                             <li><a href="#">RENDEZ-VOUS INFORMATIQUE</a></li>
                             <li><a href="#">RENCONTRE</a></li>
                             <li><a href="#">GRATIFERIA: la cuisine (lien vers espace de gratuité)</a></li>
                             <li><a href="#">PROPOSER UNE IDEE</a></li>
                             <li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><a href="#">ECHANGES</a></li>

                               <ul class="dropdown-menu">
                                 <li><a href="#">Les échanges</a></li>
                                 <li><a href="#">La vie des échanges</a></li>
                                 <li><a href="#">Échanges et ateliers</a></li>
                                 <li><a href="#">Tous les échanges</a></li>
                                 <li><a href="#">Programme</a></li>
                                 <li><a href="#">Agenda</a></li>
                              </ul>
                            </ul>
                            </li>
                        <li class=" dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">TEMPS FORTS<span class="caret"></span></a>
                          <ul class="dropdown-menu">
                          <li><a href="#">Systèmes day</a></li>
                          <li><a href="#">Fête de la gratuité</a></li>
                          <li><a href="#">Trocs</a></li>
                          <li><a href="#">Noël anti bling-bling</a></li>
                          <li><a href="#">Vide-grenier...</a></li>
                        </ul>
                        </li>
                         <a class="navbar-brand" href="#"><i class="fa fa-search"></i></a>
                    </ul>
                </div>

        </nav> -->
    </div>
</div>
  </header>

		<div id="content" class="site-content">
