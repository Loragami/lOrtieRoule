<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>
<?php
	if(get_the_title()==='Agenda') {
		echo "<section>
		<div class='row' id='bcolor'>
			<div class='col-xs-12 col-md-8'>
					 <p class='intro'>Coud' à Coud' a pour objet l'entraide de proximité et l'écocitoyenneté. Elle fédère les habitants sans discrimination à travers les échanges de savoir et savoir-faire et des actions fondées sur le réemploi et la consommation responsable. Coud' à Coud' gère L'Ortie Roule, un espace ouvert à toutes les personnes désireuses de proposer un projet ou de participer à une action.
					 </p>
			</div>
		 <div class='row'>
			<div class='aside1 col-xs-12 col-md-2'>
					 <a href='http://coudacoud.org/' class='aside col-xs-12 col-md-4-offset-3'>CALENDRIER</a>
					 <a href='http://coudacoud.org/' class='aside col-xs-12 col-md-4-offset-3'>PROCHAINS EVENEMENTS</a>
					 <a href='http://coudacoud.org/nous-rejoindre/' class='aside col-xs-12 col-md-4-offset-3'>NOUS REJOINDRE</a>
			 </div>
		</div>
		</div>
		</section>";
	}
 ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<section class="contenu">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			// End of the loop.
		endwhile;
		?>
		</section>
	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
