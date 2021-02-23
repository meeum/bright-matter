<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	
	
	<?php $colour_scheme = get_field( "post_colour_scheme" )?>
	
	
	<article id="post-<?php the_ID(); ?>" <?php //post_class( $colour_scheme ); ?>>
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="post-wrapper <?php echo $colour_scheme ?>">
	<div class="inner">
		<!-- post thumbnail -->
		<?php if ( has_post_thumbnail() ) : // Check if thumbnail exists. ?>
			
				<?php the_post_thumbnail( array( 120, 120 ) ); // Declare pixel size you need inside the array. ?>
		
		<?php endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<?php the_title(); ?>
		</h2>
		<!-- /post title -->


		<?php /*


		<!-- post details -->
		<span class="date">
			<time datetime="<?php the_time( 'Y-m-d' ); ?> <?php the_time( 'H:i' ); ?>">
				<?php the_date(); ?> <?php the_time(); ?>
			</time>
		</span>
		<span class="author"><?php esc_html_e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
		<span class="comments"><?php if ( comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' ) ); ?></span>
		<!-- /post details -->

		*/
		?>

		<?php the_excerpt(); // Build your custom callback length in functions.php. ?>

		

		<?php //edit_post_link(); ?>
	</div><!-- inner -->
		</a>
	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else : ?>

	<!-- article -->
	<article>
		<h2><?php esc_html_e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
