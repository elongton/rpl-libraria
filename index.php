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
 get_template_part( 'template-parts/blog/content', 'blogindexheader' );
?>


<div class="container">
  <!-- Start: Blog Section -->
  <div class="blog-page grid">
      <article>
          <div class="grid-item blog-item">
              <div class="post-thumbnail">
                  <div class="post-date-box">
                      <div class="post-date">
                          <a class="date" href="#.">07</a>
                      </div>
                      <div class="post-date-month">
                          <a class="month" href="#.">Mar</a>
                      </div>
                  </div>

                  <a href="blog-detail.html"><img alt="blog" src="<?php echo get_parent_theme_file_uri(); ?> /assets/images/blog/370x266.jpg" /></a>
                  <div class="post-share">
                      <a href="#."><i class="fa fa-comment"></i> 37</a>
                      <a href="#."><i class="fa fa-thumbs-o-up"></i> 110</a>
                      <a href="#."><i class="fa fa-eye"></i> 180</a>
                      <a href="#."><i class="fa fa-share-alt"></i> Share</a>
                  </div>
              </div>
              <div class="post-detail">
                  <header class="entry-header">
                      <div class="blog_meta_category">
                          <span class="arrow-right"></span>
                          <a href="#." rel="category tag">Design</a>,
                          <a href="#." rel="category tag">art</a>
                      </div>
                      <h3 class="entry-title"><a href="blog-detail.html">Here each week my friends</a></h3>
                      <div class="entry-meta">
                          <span><i class="fa fa-user"></i> <a href="#">Admin</a></span>
                          <span><i class="fa fa-comment"></i> <a href="#">15 Comments</a></span>
                      </div>
                  </header>
                  <div class="entry-content">
                      <p>Curabitur sagittis fermentum ante at imperdiet. Proin viverra arcu ac quam finibus, efficitur rutrum turpis auctor. Maecenas at mi vitae lacus tempus egestas nec eget eros. Nunc eget est tellus. Quisque quis mattis eros, sit amet facilisis felis. Aliquam molestie purus venenatis lorem laoreet venenatis.....</p>
                  </div>
                  <footer class="entry-footer">
                      <a class="btn btn-default" href="blog-detail.html">Read More</a>
                  </footer>
              </div>
          </div>
      </article>
  </div><!--grid-->
  <!-- End: Blog Section -->
</div><!-- container -->




</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>
