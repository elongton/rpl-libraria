<?php if (has_post_thumbnail()):?>
<div class="page-header-image" style="height: 205px; background-image: url('<?php the_post_thumbnail_url(); ?>');">
<?php else:?>
<div class="page-header-default-image" style="height: 205px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/customization/page/new_release_background3.png');">
<?php endif;?>
	<div class="page-header-image-cover"></div>
</div>
