<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package RPL_Libraria
 */

get_header();
get_template_part( 'template-parts/archives/content', 'archiveheader' );
?>

<section class="container vellum archive_container" style="padding-top: 15px; padding-bottom: 15px;">


	<div class="row">
		<div class="col-md-10 col-sm-12">
			<?php
				if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) :
					the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/archives/content', 'postitem');
					if (($wp_query->current_post +1) != ($wp_query->post_count)) {
						echo '<hr style="background-color: transparent; width: 95%; border-bottom: 1px dashed #003652;">';
					}

				endwhile;

				the_posts_pagination();

			else :
				get_template_part( 'template-parts/post/content', 'none' );
			endif;
			?>
		</div>
		<div class="col-md-2 col-sm-12 rpl_sidebar">
			<?php get_sidebar('categories');   ?>
		</div>
	</div>




</section>


</article>
<?php get_footer();
