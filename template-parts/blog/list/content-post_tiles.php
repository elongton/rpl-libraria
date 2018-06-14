<div class="container" >
  <!-- Start: Blog Section -->
  <div class="blog-page grid" id="blog-page-grid">
    <?php get_template_part( 'template-parts/blog/list/content', 'loop' );?>
  </div><!--grid-->
  <!-- End: Blog Section -->

</div><!-- container -->
<div class="container" style="padding-bottom: 20px;">
    <?php the_posts_pagination();?>
</div>

<?php //echo $categories_array[0];?>
