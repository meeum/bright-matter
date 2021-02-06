<!-- sidebar -->

<!--

THIS HAS BEEN REMOVED FROM TEMPLATES- YOU'LL NEED TO ADD BACK IN 

<?php get_sidebar(); ?>

TO GET THIS SUCKER BACK


👍


-->






<aside class="sidebar" role="complementary">

	<?php get_template_part( 'searchform' ); ?>

	<div class="sidebar-widget">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-1' ) ) ?>
	</div>

	<div class="sidebar-widget">
		<?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'widget-area-2' ) ) ?>
	</div>

</aside>
<!-- /sidebar -->
