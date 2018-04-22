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
	<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">
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
								<?php wp_nav_menu( array( 'theme_location' => 'tippy_top' ) );?>
							</div>



							<div class="container" style="text-align: right; color: white; font-size: 13px; display:none;">
								<ul>
									<li><i class="fa fa-heart"></i> Donate</li>
									<li><i class="fa fa-credit-card"></i> Get a Card</li>
									<li><i class="fa fa-life-ring"></i> FAQ</li>
									<li><i class="fa fa-phone"></i> Contact</li>
									<li><i class="fa fa-user"></i> Account</li>
								</ul>
							</div>
						</div>
					<!-- ////////////////////////// END: TIP TOP NAV SECTION ////////////////////////////////////-->


            <div class="container" style="margin-top: 30px;">
                <div class="row">
                    <nav class="navbar navbar-default">

					<!-- ////////////////////////// START: DESKTOP NAV SECTION ////////////////////////////////////-->
											<div class="" style="display: flex; align-items: center;">
												<div class="rpl-brand"><!--had 'navbar-brand' class -->
													<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
															<?php get_template_part('template-parts/header/content', 'svg_logo'); ?>
															<div class="">
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
                </div>
            </div><!--container -->
        </header>
        <!-- End: Header Section -->

	<div id="content" class="site-content">
