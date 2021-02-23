<?php get_header(); ?>

<main role="main" aria-label="Content" data-template="page">
	<!-- section -->
	<section>
		<div class="inner">
			<h1><?php the_title(); ?></h1>
		</div>

		<?php get_template_part('partials/header_blurb'); ?>



		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<!-- article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<div class="inner">
						<?php the_content(); ?>
					</div>


				



					<?php //edit_post_link(); 
					?>

				</article>
				<!-- /article -->

			<?php endwhile; ?>

		<?php else : ?>

			<!-- article -->
			<article>

				<h2><?php esc_html_e('Sorry, nothing to display.', 'html5blank'); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php //get_sidebar(); 
?>

<?php get_footer(); ?>