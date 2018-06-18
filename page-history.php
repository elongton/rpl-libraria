<?php
/*
Template Name: History
 */

get_header();
get_template_part( 'template-parts/page/content', 'pageheader' );
?>



<div class="container vellum history_container" style="padding-top: 25px; padding-bottom: 25px;">
  <div class="row">
    <div class="history_year" style="">1922</div>
    <div class="col-sm-6 col-xs-12 history_left_div">

      <h3 style="margin-bottom: 10px;">Beginnings</h3>
      <img alt="history_image" class="history_image" src="<?php echo get_parent_theme_file_uri(); ?>/assets/images/blog/370x266.jpg" />
    </div>
    <div class="col-sm-6 col-xs-12 history_right_div">
      <div class="history_description">
        April 5:  Mr. John Stewart Bryan was elected President of the Richmond Library Association.
        <br><br>
        November 16:  Council passed an ordinance providing for a bond issue of $200,000 for the purchase of a site, construction of a building and purchase of equipment.  Cost of books and maintenance was not included.
      </div>


    </div>
  </div>
  <div class="row history_reverse_row" style="margin-top: 3px;">
    <div class="history_year" style="">1922</div>
    <div class="col-sm-6 history_left_div">
      <div class="history_description pull-right">
        April 5:  Mr. John Stewart Bryan was elected President of the Richmond Library Association.
        <br><br>
        November 16:  Council passed an ordinance providing for a bond issue of $200,000 for the purchase of a site, construction of a building and purchase of equipment.  Cost of books and maintenance was not included.
      </div>
    </div>
    <div class="col-sm-6 history_right_div">
      <div class="history_title">
        <h3 style="margin-bottom: 10px;">Beginnings</h3>
        <img alt="history_image" class="history_image" src="<?php echo get_parent_theme_file_uri(); ?>/assets/images/blog/370x266.jpg" />
      </div>
    </div>

  </div>
</div>










 </article><!-- #post-<?php the_ID(); ?> -->
 <?php get_footer(); ?>
