<?php
/**
 * The template for displaying authors
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RPL_Libraria
 */

get_header();
get_template_part( 'template-parts/author/content', 'authorheader' );
?>

<div class="container vellum" style="padding-top: 20px; padding-bottom: 20px;">
  <p>
    <img style="float: left;" src="<?php echo get_avatar_url(get_the_author_meta('ID'), array('size' => '200'));?>" alt="">
    <?php echo get_the_author_meta('description');?>
  </p>

  <?php the_author(); ?> has blogged <?php echo number_format_i18n( get_the_author_posts() ); ?>&nbsp;posts
</div>

<div class="container vellum" style="padding-top: 20px; padding-bottom: 20px;">
  <div class="row">
    <div class="col-sm-6 col-xs-12">
      <?php
        if ( have_posts() ) :
      ?>
      <h3><?php the_author(); ?>'s Posts</h3>
      <?php
        /* Start the Loop */
        while ( have_posts() ) :
          the_post();
        ?>

        <?php the_title();?><br>


        <?php
        endwhile;
        else :
          get_template_part( 'template-parts/post/content', 'none' );
        endif;
      ?>
    </div>
    <div class="col-sm-6 col-xs-12">
      <?php
        if ( have_comments() ) :
        ?>
      <h3><?php the_author(); ?>'s Comments</h3>
    <?php endif;?>
    </div>
  </div>

</div>




<?php

get_footer();
