<?php get_header(); ?>

	<main role="main" aria-label="Content" data-template="index">
		<!-- section -->
		<section class="inner">

			<h1><?php esc_html_e( 'Bright Matter', 'html5blank' ); ?></h1>

			<?php get_template_part( 'partials/header_blurb' ); ?>

			<?php get_template_part( 'loop' ); ?>

			<?php get_template_part( 'pagination' ); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
