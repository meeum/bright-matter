<?php get_header(); ?>

	<main role="main" aria-label="Content">
		<!-- section -->
		<section class="inner">

			<h1><?php esc_html_e( 'Clients', 'html5blank' ); ?></h1>

			<?php get_template_part( 'loop-clients' ); ?>

			<?php get_template_part( 'pagination' ); ?>

		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
