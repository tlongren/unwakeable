<div id="rollingarchives" style="display:none;">

	<div id="rollnavigation">
		<div id="pagetrackwrap"><div id="pagetrack"><div id="pagehandle"><div id="rollhover"><div id="rolldates"></div></div></div></div></div>

		<div id="rollpages"></div>
		
		<a id="rollprevious" title="<?php _e('Older','unwakeable'); ?>" href="#">
			<span>&laquo;</span> <?php _e('Older','unwakeable'); ?>
		</a>
		<div id="rollhome" title="<?php _e('Home','unwakeable'); ?>">
			<span><?php _e('Home','unwakeable'); ?></span>
		</div>
		<div id="rollload" title="<?php _e('Loading','unwakeable'); ?>">
			<span><?php _e('Loading','unwakeable'); ?></span>
		</div>
		<a id="rollnext" title="<?php _e('Newer','unwakeable'); ?>" href="#">
			<?php _e('Newer','unwakeable'); ?> <span>&raquo;</span>
		</a>

		<div id="texttrimmer">
			<div id="trimmertrackwrap"><div id="trimmertrack"><div id="trimmerhandle"></div></div></div>
			
			<div id="trimmerless"><span><?php _e('Less','unwakeable'); ?></span></div>
			<div id="trimmermore"><span><?php _e('More','unwakeable'); ?></span></div>
			<div id="trimmertrim"><span><?php _e('Trim','unwakeable'); ?></span></div>
			<div id="trimmeruntrim"><span><?php _e('Untrim','unwakeable'); ?></span></div>
		</div>
	</div> <!-- #rollnavigation -->
</div> <!-- #rollingarchives -->

<div id="rollingcontent" class="hfeed" aria-live="polite" aria-atomic="true">
	<?php include(TEMPLATEPATH . '/app/display/theloop.php'); ?>
</div><!-- #rollingcontent .hfeed -->

<?php
	if ( defined('DOING_AJAX') and true == DOING_AJAX ) {
		add_action( 'k2_dynamic_content', array('K2', 'setup_rolling_archives') );
	} else {
		add_action( 'wp_footer', array('K2', 'setup_rolling_archives') );
	}
?>
