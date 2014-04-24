<?php

/*
UI Page: jQuery UI
Scripts: jquery-ui-dialog, jquery-ui-accordion, jquery-ui-tabs, jquery-ui-menu, jquery-ui-datepicker
Styles: jquery-ui-all
*/

?>

<h3>Dialog</h3>

<a href="#" id="wp-ui-dialog-link" class="button">Open a dialog</a>

<div id="wp-ui-dialog" title="Basic dialog" class="hidden">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<h3>Accordion</h3>

<div id="wp-ui-accordion">
	<h3>Section 1</h3>
	<div>
		<p>
		Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
		ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
		amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
		odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
		</p>
	</div>
	<h3>Section 2</h3>
	<div>
		<p>
		Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
		purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
		velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
		suscipit faucibus urna.
		</p>
	</div>
	<h3>Section 3</h3>
	<div>
		<p>
		Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
		Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
		ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
		lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
		</p>
		<ul>
			<li>List item one</li>
			<li>List item two</li>
			<li>List item three</li>
		</ul>
	</div>
	<h3>Section 4</h3>
	<div>
		<p>
		Cras dictum. Pellentesque habitant morbi tristique senectus et netus
		et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
		faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
		mauris vel est.
		</p>
		<p>
		Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
		Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
		inceptos himenaeos.
		</p>
	</div>
</div>

<h3>Tabs</h3>

<div id="wp-ui-tabs">
	<ul>
		<li><a href="#tabs-1">Nunc tincidunt</a></li>
		<li><a href="#tabs-2">Proin dolor</a></li>
		<li><a href="#tabs-3">Aenean lacinia</a></li>
	</ul>
	<div id="tabs-1">
		<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Etiam aliquet massa et lorem. Mauris dapibus lacus auctor risus. Aenean tempor ullamcorper leo. Vivamus sed magna quis ligula eleifend adipiscing. Duis orci. Aliquam sodales tortor vitae ipsum. Aliquam nulla. Duis aliquam molestie erat. Ut et mauris vel pede varius sollicitudin. Sed ut dolor nec orci tincidunt interdum. Phasellus ipsum. Nunc tristique tempus lectus.</p>
	</div>
	<div id="tabs-2">
		<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
	</div>
	<div id="tabs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	</div>
</div>

<h3>Forms</h3>

<div class="wp-ui-button">
	<p>
		<button>A button element</button>
		<input type="submit" value="A submit button">
		<a href="#">An anchor</a>
	</p>
	<p>
		<input type="checkbox" id="wp-ui-check"><label for="wp-ui-check">Single Checkbox</label>
		<div id="wp-ui-format">
			<input type="checkbox" id="check1"><label for="check1">Checkbox 1</label>
			<input type="checkbox" id="check2"><label for="check2">Checkbox 2</label>
			<input type="checkbox" id="check3"><label for="check3" disabled>Disabled Checkbox 3</label>
			<input type="checkbox" id="check3"><label for="check3">Checkbox 4</label>
		</div>
	</p>
	<p>
		<div id="wp-ui-radio">
			<input type="radio" id="radio1" name="radio"><label for="radio1">Radio 1</label>
			<input type="radio" id="radio2" name="radio" checked="checked"><label for="radio2">Radio 2</label>
			<input type="radio" id="radio2" name="radio" checked="checked" disabled><label for="radio2">Disabled Radio 3</label>
			<input type="radio" id="radio3" name="radio"><label for="radio3">Radio 4</label>
		</div>
	</p>
	<p>
		<div>
			<button id="wp-ui-split-button">Run last action</button>
			<button>Select an action</button>
		</div>
		<ul>
			<li><a href="#">Open...</a></li>
			<li><a href="#">Save</a></li>
			<li><a href="#">Delete</a></li>
		</ul>
	</p>
</div>

<h3>Datepicker</h3>

<div id="wp-ui-datepicker"></div>

<h3>Menu</h3>

<ul id="wp-ui-menu">
	<li class="ui-state-disabled"><a href="#">Aberdeen</a></li>
	<li><a href="#">Ada</a></li>
	<li><a href="#">Adamsville</a></li>
	<li><a href="#">Addyston</a></li>
	<li>
		<a href="#">Delphi</a>
		<ul>
			<li class="ui-state-disabled"><a href="#">Ada</a></li>
			<li><a href="#">Saarland</a></li>
			<li><a href="#">Salzburg</a></li>
		</ul>
	</li>
	<li><a href="#">Saarland</a></li>
	<li>
		<a href="#">Salzburg</a>
		<ul>
			<li>
				<a href="#">Delphi</a>
				<ul>
					<li><a href="#">Ada</a></li>
					<li><a href="#">Saarland</a></li>
					<li><a href="#">Salzburg</a></li>
				</ul>
			</li>
			<li>
				<a href="#">Delphi</a>
				<ul>
					<li><a href="#">Ada</a></li>
					<li><a href="#">Saarland</a></li>
					<li><a href="#">Salzburg</a></li>
				</ul>
			</li>
			<li><a href="#">Perch</a></li>
		</ul>
	</li>
	<li class="ui-state-disabled"><a href="#">Amesville</a></li>
</ul>

<style>
	.ui-menu {
		width: 150px;
	}
</style>

<script type="text/javascript">
	( function( $ ) {
		'use strict';
		$( document ).ready( function() {
			$( '#wp-ui-dialog' ).dialog( {
				autoOpen: false,
				width: 400,
				modal: true,
				buttons: [
					{
						text: 'OK',
						click: function() {
						$( this ).dialog( 'close' );
						}
					},
					{
						text: 'Cancel',
						click: function() {
						$( this ).dialog( 'close' );
						}
					}
				]
			} );
			$( '#wp-ui-dialog-link' ).on( 'click', function( event ) {
				event.preventDefault();
				$( '#wp-ui-dialog' ).dialog( 'open' );
			} );
			$( '#wp-ui-accordion' ).accordion();
			$( '#wp-ui-tabs' ).tabs();
			$( '.wp-ui-button input[type=submit], .wp-ui-button a, .wp-ui-button button, #wp-ui-check' ).button();
			$( '#wp-ui-format, #wp-ui-radio' ).buttonset();
			$( '#wp-ui-split-button' )
				.button()
			.next()
				.button( {
					text: false,
					icons: {
						primary: 'ui-icon-triangle-1-s'
					}
				} )
				.click(function() {
					var menu = $( this )
						.parent().next().show().position({
							my: 'left top',
							at: 'left bottom',
							of: this
						} );
					$( document ).one( 'click', function() {
						menu.hide();
					} );
					return false;
				} )
			.parent()
				.buttonset()
			.next()
				.hide()
				.menu();
			$( '#wp-ui-datepicker' ).datepicker();
			$( '#wp-ui-menu' ).menu();
		} );
	} ( jQuery ) );
</script>
