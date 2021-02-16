<?php get_header(); ?>

<main role="main" aria-label="Content" data-template="single">


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="inner">

					<!-- post thumbnail -->
					<?php if (has_post_thumbnail()) : // Check if Thumbnail exists. 
					?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
							<?php the_post_thumbnail(); // Fullsize image for the single post. 
							?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->
				</div>
				<!--inner-->


				<div class="inner">
					<!-- post title -->
					<h1>
						<?php the_title(); ?>
					</h1>

				</div>
				<!--inner-->

				<?php get_template_part('partials/header_blurb'); ?>

				<!-- /post title -->




				<?php

				/*
					<!-- post details -->


					<span class="date">
						<time datetime="<?php the_time('Y-m-d'); ?> <?php the_time('H:i'); ?>">
							<?php the_date(); ?> <?php the_time(); ?>
						</time>
					</span>
					<span class="author"><?php esc_html_e('Published by', 'html5blank'); ?> <?php the_author_posts_link(); ?></span>
					<span class="comments"><?php if (comments_open(get_the_ID())) comments_popup_link(__('Leave your thoughts', 'html5blank'), __('1 Comment', 'html5blank'), __('% Comments', 'html5blank')); ?></span>
					<!-- /post details -->

					*/

				?>
				<div class="inner">
					<?php the_content(); // Dynamic Content. 
					?>

					<?php
					//the_tags(__('Tags: ', 'html5blank'), ', ', '<br>'); // Separated by commas with a line break at the end. 

					$post_tags = get_the_tags();

					if ($post_tags) {
						echo '<ul class="client-tags">';
						foreach ($post_tags as $tag) {
							echo '<li>';
							echo $tag->name . ' ';
							echo '</li>';
						}
						echo '</ul>';
					}
					?>
				</div>
				<!--inner-->
				<?php
				/*

					<p><?php esc_html_e('Categorised in: ', 'html5blank');
						the_category(', '); // Separated by commas. 
						?></p>

					<p><?php esc_html_e('This post was written by ', 'html5blank');
						the_author(); ?></p>

					<?php edit_post_link(); // Always handy to have Edit Post Links available. 
					?>

					<?php //comments_template(); 
					?>

					*/
				?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

	<?php else : ?>

		<!-- article -->
		<article>

			<h1><?php esc_html_e('Sorry, nothing to display.', 'html5blank'); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>


</main>

<?php //get_sidebar(); 
?>

<?php get_footer(); ?>