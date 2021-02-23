<?php get_header(); ?>

<main role="main" aria-label="Content">
	<!-- section -->
	<section class="inner">

		<h1><?php esc_html_e('Client work: ', 'html5blank');
			echo single_tag_title('', false); ?></h1>
	</section>
	<!-- /section -->
	<div class="grid-halves inner">
		<?php get_template_part('loop'); ?>
	</div>
	<?php get_template_part('pagination'); ?>


</main>

<?php //get_sidebar(); 
?>

<?php get_footer(); ?>