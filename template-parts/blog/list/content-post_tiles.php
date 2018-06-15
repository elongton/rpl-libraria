<!-- Start: Blog Section -->
<div class="blog-page grid" id="blog-page-grid">
  <?php get_template_part( 'template-parts/blog/list/content', 'loop' );?>
</div><!--grid-->
<!-- End: Blog Section -->
<?php the_posts_pagination();?>
