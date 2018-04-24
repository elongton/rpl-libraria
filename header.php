<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RPL_Libraria
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="js/html5shiv.min.js"></script>
		<script src="js/respond.min.js"></script>
		<![endif]-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- Start: Header Section -->
        <header id="header-v1" class="navbar-wrapper">
					<!-- ////////////////////////// START: TIP TOP NAV SECTION ////////////////////////////////////-->
						<div class="tip-top-nav">
							<div class="container" style="color: white;">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<div class="mobile_svg_logo">
										<?php get_template_part('template-parts/header/content', 'svg_logo'); ?>
									</div>
								</a>
								<div class="spacer"></div>
								<?php wp_nav_menu( array( 'theme_location' => 'tippy_top' ) );?>
							</div>
						</div>
					<!-- ////////////////////////// END: TIP TOP NAV SECTION ////////////////////////////////////-->


            <div class="container nav-container">
                    <nav class="navbar navbar-default">

					<!-- ////////////////////////// START: DESKTOP NAV SECTION ////////////////////////////////////-->
											<div class="" style="display: flex; align-items: center;">
												<div class="rpl-brand"><!--had 'navbar-brand' class -->
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
															<div class="svg_logo">
																<?php get_template_part('template-parts/header/content', 'svg_logo'); ?>
															</div>
															<div class="logo_text">
																Richmond <br>Public<br>Library
															</div>
													</a>
												</div>
												<div class="" style="flex-grow: 1;">
													<?php wp_nav_menu( array( 'theme_location' => 'primary' ) );?>
												</div>

											</div>

					<!-- ////////////////////////// END: DESKTOP NAV SECTION ////////////////////////////////////-->
									      <?php //get_template_part('template-parts/header/content', 'old_mobile_menu'); ?>
                    </nav>
            </div><!--container -->
        </header>
        <!-- End: Header Section -->

	<div id="content" class="site-content">
