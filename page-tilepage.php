<?php
/*

Template Name: Tile Page

 */

get_header();
?>
<section>
			<?php
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', 'page' );
			endwhile; // End of the loop.
			?>
</section>

<!--Start Repeater Section --->
<?php
	if(have_rows('tiles_text_layout')):
		while(have_rows('tiles_text_layout')) : the_row();
			$tile_text_select			=		get_sub_field('tile_text_select');
			$text 								=		get_sub_field('text');
			if ($tile_text_select == 'text'):
				if ($text['background_color'] == '#ffffff'){
					$font_color = 'black';
				} else {
					$font_color = 'white';
				}
?>
				<div class="tilepage_fullwidth_text_container"style="background-color: <?php echo $text['background_color'];?>;">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 tilepage_fullwidth_text_col" style="color:<?php echo $font_color;?>;">
								<?php echo $text['text_area'];?>
							</div><!--col-xs-12-->
						</div><!--row-->
					</div><!--container-->
				</div><!--tilepage_text_container-->

<?php
			elseif($tile_text_select == 'tiles'):
				if(have_rows('tile_repeater')):
					while(have_rows('tile_repeater')) : the_row();
						$right_left_image			=			get_sub_field('right_left_image');
						$background_color			=			get_sub_field('background_color');
?>
					<section>
						<div class="container-fluid">
<?php
						if($right_left_image == 'right_image'):
							$right_tile_setup		=			get_sub_field('right_tile_setup');
?>

							<div class="row">
								<div class="col-sm-6 col-xs-12" style="background-image: url('<?php echo $meeting_room_image;?>')"></div>
								<div class="col-sm-6 col-xs-12 block_colored" style="background-color: red;">
									<div class="block-padding content_right_block_section">
										<div>
											<h3 style="margin-bottom: 5px;">Features</h3>
												<p>Irure non aliqua deserunt magna eiusmod et cillum velit eiusmod Lorem dolore laborum minim exercitation. Aliquip tempor adipisicing eiusmod Lorem dolor irure in pariatur ut ad minim. Nostrud ut pariatur ut non proident culpa quis elit laborum nisi in. Irure Lorem amet do mollit exercitation dolore cupidatat nostrud velit esse laboris irure deserunt sint laboris. Consequat laboris est nostrud ea commodo velit occaecat incididunt do. Et incididunt cillum Lorem est pariatur et labore. Quis nisi aliquip exercitation officia minim tempor eiusmod elit duis qui minim. Cillum dolore et sit dolor laboris ex commodo adipisicing velit exercitation minim incididunt sit.</p>
										</div>
									</div><!-- block_section-->
								</div>
							</div><!--row-->



<?php
						elseif($right_left_image == 'left_image'):
							$left_tile_setup		=			get_sub_field('left_tile_setup');
?>

							<div class="row">
								<div class="col-sm-6 col-xs-12 block_parent_left block_colored" style="background-color: #ce232a;">
									<div class="block_section block-padding">
										<div class="block_section_child">
											<h3 style="margin-bottom: 10px;">Hours</h3>
											<p>Irure non aliqua deserunt magna eiusmod et cillum velit eiusmod Lorem dolore laborum minim exercitation. Aliquip tempor adipisicing eiusmod Lorem dolor irure in pariatur ut ad minim. Nostrud ut pariatur ut non proident culpa quis elit laborum nisi in. Irure Lorem amet do mollit exercitation dolore cupidatat nostrud velit esse laboris irure deserunt sint laboris. Consequat laboris est nostrud ea commodo velit occaecat incididunt do. Et incididunt cillum Lorem est pariatur et labore. Quis nisi aliquip exercitation officia minim tempor eiusmod elit duis qui minim. Cillum dolore et sit dolor laboris ex commodo adipisicing velit exercitation minim incididunt sit.</p>
										</div>
									</div><!-- block_section-->
								</div>
								<div class="col-sm-6 col-xs-12" style="background-image: url('<?php echo $meeting_room_image;?>')"></div>
							</div><!--row-->



<?php
						endif;//if($right_left_image )
?>



						</div>
					</section>
<?php
					endwhile;//(have_rows('tile_repeater')
				endif;//if(have_rows('tile_repeater')
?>



<?php endif;//if($tile_text_select)?>








<?php
		endwhile;//have_rows('tiles_text_layout')
	endif;//have_rows('tiles_text_layout')
?>
<!--End Repeater Section --->


<section>
	<div class="container-fluid">
		<div class="row">
			<!--Start Hours Section -->
			<div class="col-sm-6 col-xs-12" style="">
				<div class="block_section block-padding">
					<div class="block_section_child">
						<h3 style="margin-bottom: 10px;">Hours</h3>
						<p>Irure non aliqua deserunt magna eiusmod et cillum velit eiusmod Lorem dolore laborum minim exercitation. Aliquip tempor adipisicing eiusmod Lorem dolor irure in pariatur ut ad minim. Nostrud ut pariatur ut non proident culpa quis elit laborum nisi in. Irure Lorem amet do mollit exercitation dolore cupidatat nostrud velit esse laboris irure deserunt sint laboris. Consequat laboris est nostrud ea commodo velit occaecat incididunt do. Et incididunt cillum Lorem est pariatur et labore. Quis nisi aliquip exercitation officia minim tempor eiusmod elit duis qui minim. Cillum dolore et sit dolor laboris ex commodo adipisicing velit exercitation minim incididunt sit.</p>
					</div>
				</div><!-- block_section-->
			</div>
			<!--End Hours Section -->
			<!--Start Features Section -->
			<div class="col-sm-6 col-xs-12">
				<div class="block-padding content_right_block_section">
					<div>
						<h3 style="margin-bottom: 5px;">Features</h3>
							<p>Irure non aliqua deserunt magna eiusmod et cillum velit eiusmod Lorem dolore laborum minim exercitation. Aliquip tempor adipisicing eiusmod Lorem dolor irure in pariatur ut ad minim. Nostrud ut pariatur ut non proident culpa quis elit laborum nisi in. Irure Lorem amet do mollit exercitation dolore cupidatat nostrud velit esse laboris irure deserunt sint laboris. Consequat laboris est nostrud ea commodo velit occaecat incididunt do. Et incididunt cillum Lorem est pariatur et labore. Quis nisi aliquip exercitation officia minim tempor eiusmod elit duis qui minim. Cillum dolore et sit dolor laboris ex commodo adipisicing velit exercitation minim incididunt sit.</p>
					</div>
				</div><!-- block_section-->
			</div>
		<!--End Features Section -->
		</div><!--row-->


		<div class="row">
			<div class="col-sm-6 col-xs-12 block_parent_left block_colored" style="background-color: #ce232a;">
				<div class="block_section block-padding">
					<div class="block_section_child">
						<h3 style="margin-bottom: 10px;">Hours</h3>
						<p>Irure non aliqua deserunt magna eiusmod et cillum velit eiusmod Lorem dolore laborum minim exercitation. Aliquip tempor adipisicing eiusmod Lorem dolor irure in pariatur ut ad minim. Nostrud ut pariatur ut non proident culpa quis elit laborum nisi in. Irure Lorem amet do mollit exercitation dolore cupidatat nostrud velit esse laboris irure deserunt sint laboris. Consequat laboris est nostrud ea commodo velit occaecat incididunt do. Et incididunt cillum Lorem est pariatur et labore. Quis nisi aliquip exercitation officia minim tempor eiusmod elit duis qui minim. Cillum dolore et sit dolor laboris ex commodo adipisicing velit exercitation minim incididunt sit.</p>
					</div>
				</div><!-- block_section-->
			</div>
	    <div class="col-sm-6 col-xs-12 location_meeting_room_image" style="background-image: url('<?php echo $meeting_room_image;?>')"></div>
	  </div><!--row-->

	</div><!--container-fluid-->
</section>


<section>

	<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
	endif;


	 ?>
</section>


<?php

get_footer();
