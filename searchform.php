<form method="get" id="searchform" action="<?php bloginfo('url'); ?>">
	<div id="search-form-wrap">
		<label for="s" id="search-label"><?php _e('Search for:', 'unwakeable_domain'); ?></label>
		<input type="text" id="s" name="s" value="<?php the_search_query(); ?>" accesskey="4" />
		<input type="submit" id="searchsubmit" value="<?php esc_attr_e('Search &raquo;', 'unwakeable_domain'); ?>" />

		<?php if ( get_option('unwakeable_livesearch') ): ?>
			<span id="searchreset" title="<?php esc_attr_e('Reset Search', 'unwakeable_domain'); ?>"></span>
			<span id="searchload"></span>
		<?php endif; ?>
	</div>
</form>
