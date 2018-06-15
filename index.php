<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RPL_Libraria
 */

 get_header();
 get_template_part( 'template-parts/blog/list/content', 'blogindexheader' );
?>

<div class="container" >
  <div class="row">
    <div class="col-sm-10 col-xs-12">
      <?php
      if ( have_posts() ) :
        get_template_part( 'template-parts/blog/list/content', 'post_tiles' );
      else:?>
      <div class="no_posts" style="display: flex; justify-content: center; height: 300px; background-color: #003652; border-bottom: 5px dashed black; border-top: 5px dashed black;">
          <h2 style="align-self: center;">No posts yet...</h2>
      </div>
      <?php endif;?>
    </div><!--col-sm-10-->
    <div class="col-sm-2" style="padding-top: 45px;">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse scelerisque congue consequat. Integer ac gravida sapien. Phasellus quis molestie lacus. Donec tempus arcu elit, quis facilisis dolor convallis quis. Suspendisse suscipit mollis ex a porta. Mauris eu purus at urna ullamcorper suscipit sit amet non ipsum. Donec interdum feugiat nisi sed consequat. Nulla eget porta tellus, et blandit nulla. Aliquam et massa sed nunc ornare rhoncus. Duis semper elit justo, sit amet scelerisque velit molestie ut. Donec condimentum velit a iaculis suscipit. Suspendisse tempor lectus sit amet faucibus tincidunt. Phasellus vel ullamcorper elit. Suspendisse tincidunt sapien at mauris mattis, in pulvinar dolor rhoncus. Nullam eu erat et arcu tincidunt sollicitudin. Nunc vestibulum gravida dictum.

Vivamus ut neque eget tortor eleifend consectetur. Maecenas eget enim diam. Morbi volutpat volutpat leo, aliquam pellentesque libero commodo ut. Phasellus at nulla varius, bibendum est vel, dapibus ligula. Quisque nec eros sodales, mattis erat sed, pretium metus. Fusce rutrum non tortor tristique iaculis. Phasellus tristique, ex quis molestie luctus, velit sem dignissim nisl, eget egestas sapien turpis vitae nunc.
    </div>
  </div><!--row-->
</div><!-- container -->


</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>
