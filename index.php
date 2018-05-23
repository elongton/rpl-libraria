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


<?php
if ( have_posts() ) :
  get_template_part( 'template-parts/blog/list/content', 'post_tiles' );
else:?>
<div class="no_posts" style="display: flex; justify-content: center; height: 300px; background-color: #003652; border-bottom: 5px dashed black; border-top: 5px dashed black;">
    <h2 style="align-self: center;">No posts yet...</h2>
</div>
<?php endif;?>


</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>
