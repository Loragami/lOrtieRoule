<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<section>
<div class="row" id="bcolor">
	<div class="col-xs-12 col-md-8">
			 <p class="intro">Coud' à Coud' a pour objet l'entraide de proximité et l'écocitoyenneté. Elle fédère les habitants sans discrimination à travers les échanges de savoir et savoir-faire et des actions fondées sur le réemploi et la consommation responsable. Coud' à Coud' gère L'Ortie Roule, un espace ouvert à toutes les personnes désireuses de proposer un projet ou de participer à une action.
			 </p>
	</div>
 <div class="row">
	<div class="aside1 col-xs-12 col-md-2">
			 <a href="http://coudacoud.org/" class="aside col-xs-12 col-md-4-offset-3">CALENDRIER</a>
			 <a href="http://coudacoud.org/" class="aside col-xs-12 col-md-4-offset-3">PROCHAINS EVENEMENTS</a>
			 <a href="http://coudacoud.org/nous-rejoindre/" class="aside col-xs-12 col-md-4-offset-3">NOUS REJOINDRE</a>
	 </div>
</div>
</div>
</section>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
