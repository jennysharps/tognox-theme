<span class="gist-wrapper">
	<?php echo $the_content; ?>
	<?php if(isset($meta['gist-id'][0])) { ?>
		<a class="button git-link" href="<?php echo $meta['gist-id'][0]; ?>" target="_blank">
			<span class="fa-icon fa-icon-button fa-icon-github"></span><?php _e('View Full Code on GitHub'); ?>
		</a>
	<?php } ?>
</span>
