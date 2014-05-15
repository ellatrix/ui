<?php

/*
UI Page: Elements
*/

?>

<table class="form-table">
	<tbody>
	<?php 
	$list = array(
		'<h1>' => '<h1>Header 1</h1>',
		'<h2>' => '<h2>Header 2</h2>',
		'<h3>' => '<h3>Header 3</h3>',
		'<h4>' => '<h4>Header 4</h4>',
		'<h5>' => '<h5>Header 5</h5>',
		'<h6>' => '<h6>Header 6</h6>',
		'<address>' => '<address>A street<br>A town<br>A country</address>',
		'<p>' => '<p>A paragraph</p>',
		'<p&nbsp;class="description">' => '<p class="description">A paragraph</p>',
		'<p&nbsp;class="howto">' => '<p class="howto">A paragraph</p>',
		'<p&nbsp;class="help">' => '<p class="help">A paragraph</p>',
		'<pre>' => '<pre>body {
	color: red;
}</pre>',
		'<hr>' => '<hr>',
		'<blockquote>' => '<blockquote><p>This is a quotation.</p></blockquote>',
		'<ol>, <li>' => '<ol><li>List item.</li></ol>',
		'<ul class="ol-decimal">' => '<ol class="ul-decimal"><li>List item.</li></ul>',
		'<ul>, <li>' => '<ul><li>List item.</li></ul>',
		'<ul class="ul-disc">, <li>' => '<ul class="ul-disc"><li>List item.</li></ul>',
		'<ul class="ul-square">' => '<ul class="ul-square"><li>List item.</li></ul>',
		'<dl>, <dt>, <dd>' => '<dl><dt>Firefox</dt><dd>A free, open source, cross-platform, graphical web browser developed by the Mozilla Corporation and hundreds of volunteers.</dd></dl>',
		'<a>' => '<a href="#">Link Text</a>',
		'<em>' => '<em>Ephasized text.</em>',
		'<strong>' => '<strong>Important text.</strong>',
		'<small>' => '<small>A side comment.</small>',
		'<s>' => '<s>This is no longer accurate or relevant.</s>',
		'<abbr>' => '<abbr>N.b.</abbr>',
		'<time>' => '<time datetime="' . date( 'c' ) . '">' . date( get_option( 'date_format' ) ) . '</time>',
		'<code>' => '<code>Code.</code>',
		'<var>' => '<var>Variable.</var>',
		'<samp>' => '<samp>Output.</samp>',
		'<kbd>' => '<kbd>User input.</kbd>',
		'<sup>' => 'x<sup>2</sup>',
		'<sub>' => 'x<sub>2</sub>',
		'<i>' => '<i>Veni, vidi, vici.</i>',
		'<mark>' => '<mark>Highlight.</mark>',
		'<b>' => '<b>Bold.</b>',
		'<u>' => '<u>Underline.</u>',
		'<ins>' => '<ins>Inserted text.</ins>',
		'<del>' => '<del>Deleted text.</del>',
		'<input type="button">' => '<input type="button" value="Button"> <input type="button" value="Disabled" disabled>',
		'<input type="checkbox">' => '<input type="checkbox" value=""> <input type="checkbox" value="" disabled>',
		'<input type="color">' => '<input type="color" value=""> <input type="color" value="Disabled" disabled> <input type="color" value="Read only" readonly>',
		'<input type="date">' => '<input type="date" value=""> <input type="date" value="Disabled" disabled> <input type="date" value="Read only" readonly>',
		'<input type="datetime">' => '<input type="datetime" value=""> <input type="datetime" value="Disabled" disabled> <input type="datetime" value="Read only" readonly>',
		'<input type="datetime-local">' => '<input type="datetime-local" value=""> <input type="datetime-local" value="Disabled" disabled> <input type="datetime-local" value="Read only" readonly>',
		'<input type="email">' => '<input type="email" value=""> <input type="email" value="Disabled" disabled> <input type="email" value="Read only" readonly>',
		'<input type="file">' => '<input type="file" value=""> <input type="file" value="" disabled>',
		'<input type="image">' => '<input type="image" value="">',
		'<input type="month">' => '<input type="month" value=""> <input type="month" value="Disabled" disabled> <input type="month" value="Read only" readonly>',
		'<input type="number">' => '<input type="number" value=""> <input type="number" value="42" disabled> <input type="number" value="42" readonly>',
		'<input type="password">' => '<input type="password" value=""> <input type="password" value="Disabled" disabled> <input type="password" value="Read only" readonly>',
		'<input type="radio">' => '<input type="radio" value=""> <input type="radio" value="" disabled>',
		'<input type="range">' => '<input type="range" value=""> <input type="range" value="" disabled>',
		'<input type="reset">' => '<input type="reset" value="Reset"> <input type="reset" value="Disabled" disabled>',
		'<input type="search">' => '<input type="search" value="">',
		'<input type="submit">' => '<input type="submit" value="Submit"> <input type="submit" value="Disabled" disabled>',
		'<input type="tel">' => '<input type="tel" value=""> <input type="tel" value="Disabled" disabled> <input type="tel" value="Read only" readonly>',
		'<input type="text">' => '<input type="text" value=""> <input type="text" value="Disabled" disabled> <input type="text" value="Read only" readonly>',
		'<input type="time">' => '<input type="time" value=""> <input type="time" value="Disabled" disabled> <input type="time" value="Read only" readonly>',
		'<input type="url">' => '<input type="url" value=""> <input type="url" value="Disabled" disabled> <input type="url" value="Read only" readonly>',
		'<input type="week">' => '<input type="week" value=""> <input type="week" value="Disabled" disabled> <input type="week" value="Read only" readonly>',
		'<textarea>' => '<textarea placeholder="Placeholder"></textarea> <textarea disabled>Disabled</textarea> <textarea readonly>Read only</textarea>',
		'<select>, <option>' => '<select><option>Option 1</option><option>Option 2</option><option disabled>Disabled</option></select> <select disabled><option>Disabled</option></select>',
		'<select multiple>, <option>' => '<select multiple><option>Option 1</option><option>Option 2</option><option disabled>Disabled</option></select> <select multiple disabled><option>Disabled</option></select>',
		'class="attention"' => '<span class="attention">Attention!</span>',
		'class="highlight"' => '<span class="highlight">Highlight!</span>',
	);
	foreach ( $list as $elements => $example ) { ?>
		<tr>
			<td>
			<?php
			$elements = explode( ', ', $elements );
			$out = '';
			foreach ( $elements as $element ) {
				$out .= '<code style="white-space: nowrap;">' . esc_html( $element ) . '</code>, ';
			}
			echo rtrim( $out, ', ' );
			?>
			</td>
			<td>
				<?php echo $example; ?>
			</td>
		</tr>
	<?php } ?>
	</tbody>
</table>
