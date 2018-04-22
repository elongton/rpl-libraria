<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RPL_Libraria
 */

?>

	</div><!-- #content -->

	<!-- Start: Footer -->
	<footer class="site-footer">
			<div class="container">
					<div id="footer-widgets">
							<div class="row">
									<div class="col-md-4 col-sm-6 widget-container">
											<div id="text-2" class="widget widget_text">
													<h3 class="footer-widget-title">About Richmond Public Library</h3>
													<span class="underline left"></span>
													<div class="textwidget">
															It is a long established fact that a reader will be distracted by the readable content of a page when looking.
													</div>
													<address>
															<div class="info">
																	<i class="fa fa-location-arrow"></i>
																	<span>21 King Street, Melbourne, Victoria 3000 Australia</span>
															</div>
															<div class="info">
																	<i class="fa fa-envelope"></i>
																	<span><a href="mailto:support@libraria.com">support@libraria.com</a></span>
															</div>
															<div class="info">
																	<i class="fa fa-phone"></i>
																	<span><a href="tel:012-345-6789">+ 012-345-6789</a></span>
															</div>
													</address>
											</div>
									</div>
									<div class="col-md-2 col-sm-6 widget-container">
											<div id="nav_menu-2" class="widget widget_nav_menu">
													<h3 class="footer-widget-title">Quick Links</h3>
													<span class="underline left"></span>
													<div class="menu-quick-links-container">
														<?php wp_nav_menu( array( 'theme_location' => 'quick_links' ) );?>
													</div>
											</div>
									</div>
									<div class="clearfix hidden-lg hidden-md hidden-xs tablet-margin-bottom"></div>
									<div class="col-md-2 col-sm-6 widget-container">
											<div id="text-4" class="widget widget_text">
													<h3 class="footer-widget-title">Timing</h3>
													<span class="underline left"></span>
													<div class="timming-text-widget">
															<time datetime="2017-02-13">Mon - Thu: 9 am - 9 pm</time>
															<time datetime="2017-02-13">Fri: 9 am - 6 pm</time>
															<time datetime="2017-02-13">Sat: 9 am - 5 pm</time>
															<time datetime="2017-02-13">Sun: 1 pm - 6 pm</time>
															<ul>
																	<li><a href="#">Closings</a></li>
																	<li><a href="#">Branches</a></li>
															</ul>
													</div>
											</div>
									</div>
									<div class="col-md-4 col-sm-6 widget-container">
											<div class="widget twitter-widget">
													<h3 class="footer-widget-title">Latest Tweets</h3>
													<span class="underline left"></span>
													<div id="twitter-feed">
															<ul>
																	<li>
																			<p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
																	</li>
																	<li>
																			<p><a href="#">@TemplateLibraria</a> Sed ut perspiciatis unde omnis iste natus error sit voluptatem. <a href="#">template-libraria.com</a></p>
																	</li>
															</ul>
													</div>
											</div>
									</div>
							</div>
					</div>
			</div>
			<div class="sub-footer">
					<div class="container">
							<div class="row">
									<div class="footer-text col-md-3">
											<p>&copy; 2018 Richmond Public Library. All rights reserved.</p>
									</div>
									<div class="col-md-9 pull-right">
										<?php wp_nav_menu( array( 'theme_location' => 'footer_bottom',
									 														'menu_class' => false,
																							'menu_id'=> false) );?>
									</div>
							</div>
					</div>
			</div>
	</footer>
	<!-- End: Footer -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
