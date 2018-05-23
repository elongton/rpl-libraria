<?php
$blog_title						=		get_field('blog_title', get_option('page_for_posts'));
$blog_subtitle				=		get_field('blog_subtitle', get_option('page_for_posts'));
$blog_image						=		get_field('header_image', get_option('page_for_posts'));
?>


<?php if (get_the_post_thumbnail_url(get_option('page_for_posts'))):?>
<div class="page-header-default-image" style="height: 205px; background-image: url('<?php echo get_the_post_thumbnail_url(get_option('page_for_posts'));?>');">
	<div class="page-header-image-cover"></div>
</div>
<?php else:?>
<div class="page-header-default-image" style="height: 205px; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/customization/page/default_texture.jpg');">
	<div class="page-header-image-cover"></div>
</div>
<?php endif;?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="featured-entry-header">
		<div class="container" id="page-entry-header-container">
			<div>

			</div>
			<div class="spacer"></div>
			<div id="breadcrumbs-container">
        <?php
            if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb('
            <span id="breadcrumbs">','</span>
            ');}
          ?>
			</div>

		</div>
	</header><!-- .entry-header -->

  <!-- Start: Page Banner -->
	<?php if ($blog_image):?>
	  <section class="page-banner services-banner" style="background-image: url('<?php echo $blog_image;?>');">
	<?php else:?>
		<section class="page-banner services-banner" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/customization/page/default_texture.jpg');">
	<?php endif;?>
	      <div class="container" style="align-self: center;">
	          <div class="featured-banner" style="">
	              <h1><?php echo $blog_title;?></h1>
	              <span class="underline center"></span>
	              <span class="lead">News, reviews, and ideas you can use from librarians and library staff at RPL</span>
	          </div>
	      </div><!--container-->
	  </section>
    <!-- End: Page Banner -->

	<!-- MAKE SURE YOU CLOSE OFF THE ARTICLE TAG -->
