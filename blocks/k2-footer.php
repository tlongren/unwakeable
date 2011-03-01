<?php
/**
 * Footer Template
 *
 * This file is loaded by footer.php and used for content inside the #footer div
 *
 * @package K2
 * @subpackage Templates
 */
?>

<p class="footerpoweredby">
	<?php
		printf( _x('Powered by %1$s and %2$s','unwakeable'),
			sprintf('<a href="http://wordpress.org/">%1$s<span class="wp-version">%2$s</span></a>',
				__('WordPress','unwakeable'),
				get_bloginfo('version')
			),
			sprintf('<a href="http://www.longren.org/wordpress/unwakeable/" title="%1$s">Unwakeable %2$s<span class="k2-version">%2$s</span></a>',
				__('Unwakeable WordPress Theme.','unwakeable'),
				get_k2info('version')
			)
		);
	?>
</p>

<?php if ( get_k2info('style_footer') != '' ): ?>
	<p class="footerstyledwith">
		<?php k2info('style_footer'); ?>
	</p>
<?php endif; ?>

<p class="footerfeedlinks">
	<?php
		printf( _x('%1$s and %2$s', 'k2_footer', 'unwakeable'),
			'<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries Feed','unwakeable') . '</a>',
			'<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments Feed','unwakeable') . '</a>'
		);
	?>
</p>

<p class="footerstats">
	<?php printf( __('%d queries. %s seconds.', 'unwakeable'), get_num_queries(), timer_stop(0, 3) ); ?>
</p>
