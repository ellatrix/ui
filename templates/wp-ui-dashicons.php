<?php

/*
UI Page: Dashicons
*/

$data = file_get_contents( site_url( '/wp-includes/css/dashicons.min.css' ) );

preg_match_all( "/\.dashicons-([A-Za-z0-9-]+):before{content:\"\\\\([A-Za-z0-9]+)\"}/", $data, $dashicons );

$dashicons = array_combine( $dashicons[1], $dashicons[2] );

foreach ( $dashicons as $dashicon => $code ) {
	echo '<a class="dashicons dashicons-' . $dashicon . '" href="#"></a>';
}

?>

<style>
	.dashicons {
		height: 40px;
		width: 40px;
		margin: 20px;
		font-size: 40px;
		line-height: 40px;	
		color: #444;	
	}
</style>
<script type="text/javascript">
	( function( $ ) {
		'use strict';
		$( document ).ready( function() {
		} );
	} ( jQuery ) );
</script>
