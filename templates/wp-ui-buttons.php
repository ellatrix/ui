<?php

/*
UI Page: Buttons
Scripts: jQuery
*/

?>

<p>The <code>button</code> class can be used on <code><?php echo esc_html( '<a>' ); ?></code>, <code><?php echo esc_html( '<input>' ); ?></code> buttons and <code><?php echo esc_html( '<button>' ); ?></code>.</p>

<a href="#" class="button">Link</a> <button class="button">Button</button> <input type="button" name="button" value="Input button" class="button"> <input type="submit" name="button" value="Input submit" class="button"> <input type="reset" name="button" value="Input reset" class="button">

<h3>Sizes</h3>

<table class="form-table">
	<tbody>
	<?php foreach ( array(
		' button-small',
		'',
		' button-large',
		' button-hero'
	) as $button ) { ?>
		<tr>
			<td>
				<button class="<?php echo 'button' . $button; ?>">Button</button> <button class="<?php echo 'button button-primary' . $button; ?>">Button</button>
			</td>
			<td>
				<code><?php echo 'button' . $button; ?></code> <code><?php echo 'button button-primary' . $button; ?></code>
			</td>
		</tr>
	<?php } ?>
		<tr>
			<td colspan="2" style="padding: 0;">
				<h3>States</h3>
			</td>
		</tr>
	<?php foreach ( array(
		'',
		' hover',
		' focus',
		' disabled',
		' active',
		' active hover',
		' active focus',
		' active disabled'
	) as $button ) { ?>
		<tr>
			<td>
				<button class="<?php echo 'button' . $button; ?>">Button</button> <button class="<?php echo 'button button-primary' . $button; ?>">Button</button>
			</td>
			<td>
				<code><?php echo 'button' . $button; ?></code> <code><?php echo 'button button-primary' . $button; ?></code>
			</td>
		</tr>
	<?php } ?>
		<tr>
			<td colspan="2" style="padding: 0;">
				<h3>Groups</h3>
			</td>
		</tr>
		<tr>
			<td>
				<div class="button-group">
					<button class="button button-small">Button</button>
					<button class="button button-small">Button</button>
				</div>
			</td>
			<td>
				<code><?php echo esc_html( '<div class="button-group"> etc. </div>' ); ?></code>
			</td>
		</tr>
		<tr>
			<td>
				<div class="button-group">
					<button class="button">Button</button>
					<button class="button disabled">Button</button>
					<button class="button">Button</button>
					<button class="button active">Button</button>
				</div>
			</td>
			<td></td>
		</tr>
		<tr>
			<td>
				<div class="button-group">
					<button class="button button-large">Button</button>
					<button class="button button-large">Button</button>
				</div>
			</td>
			<td></td>
		</tr>
		<tr>
			<td>
				<div class="button-group">
					<button class="button button-hero">Button</button>
					<button class="button button-hero">Button</button>
				</div>
			</td>
			<td></td>
		</tr>
	</tbody>
</table>
<script type="text/javascript">
	( function( $ ) {
		'use strict';
		$( document ).ready( function() {
			$( '.button-group' ).children().on( 'click', function() {
				self = $( this );
				if ( ! self.hasClass( 'disabled' ) && ! self.hasClass( 'active' ) ) {
					self.addClass( 'active' ).siblings().removeClass( 'active' );
				}
			} );
		} );
	} ( jQuery ) );
</script>
