<?php
	// load header blurb if there is one.
	$value = get_field( "header_blurb" );

	if( $value ) {
		echo '<div class="header-blurb"><div class="inner">';
		echo $value;
		echo '</div></div>';
	} 

	// end header blurb
?>