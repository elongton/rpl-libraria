<?php
/*
Template Name: Locations
 */


 $description =     get_field('description');

 get_header();
 get_template_part( 'template-parts/page/content', 'pageheader' );
 ?>

<section class="container-fluid location-map-section">
  <div class="row">
    <div class="col-lg-6 col-xs-12">
        <div class="emphasis_section">
          <?php echo $description;?>
          <button class="btn btn-primary">Sunday and Holiday Hours</button>
        </div>

    </div>
    <div class="col-lg-6 col-xs-12" style="position: relative;">
      <?php get_template_part( 'template-parts/locations/content', 'map' );?>
    </div>
  </div>
</section>


<section class="container-fluid location-image-section">
  <div class="row">
      <div class="col-md-4 col-sm-6 col-xs-12">
        <div class="">
          <img src="<?php echo get_parent_theme_file_uri(); ?>/assets/images/customization/locations/ginter.jpg" alt="">
        </div>
        <a href="#" class="location_card_overlay" style="display:flex; justify-content: center;">
          <span style="align-self: center;">Ginter Park</span>
        </a>
      </div>
  </div>

</section>







 </article><!-- #post-<?php the_ID(); ?> -->
 <?php get_footer(); ?>
