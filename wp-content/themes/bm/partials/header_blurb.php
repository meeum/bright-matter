<?php
	// load header blurb if there is one.
	$value = get_field( "header_blurb" );

	if( $value ) {
		echo '<div class="header-blurb">';
		echo $value;
		echo '</div>';
	} 

	// end header blurb
?>