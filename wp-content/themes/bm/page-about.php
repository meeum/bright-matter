<?php /* Template Name: About page - has services table */ get_header(); ?>

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


					<div class="inner">




						<section class="expandable-table">
							<?php
							$tags = get_tags('post_tag'); //taxonomy=post_tag

							if ($tags) :
								foreach ($tags as $tag) : ?>
									<details class="expandable-item">
										<summary class="expandable-header"><?php echo ($tag->name); ?></summary>

										<section class="expandable-content">

											<?php echo ($tag->description); ?>

											<p><a class="tag" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo ($tag->name); ?>">See our <?php echo ($tag->name); ?> clients</a></p>

										</section>

									</details>
								<?php endforeach; ?>
							<?php endif; ?>
						</section>
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