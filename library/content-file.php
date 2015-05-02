<?php
	$file_url = wp_get_attachment_url($meta['related-file'][0]);
	$button_text = isset($meta['button-text'][0]) ? $meta['button-text'][0] : 'Download File';
?>
<span class="file-wrapper">
	<?php if(isset($file_url)) { ?>
		<a class="button download-link" href="<?php echo $file_url; ?>" target="_blank">
			<span class="fa-icon fa-icon-button fa-icon-download"></span><?php _e($button_text); ?>
		</a>
	<?php } ?>
</span>
<?php echo $the_content; ?>
