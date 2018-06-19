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


<section>
	<div class="container-fluid">
		<div class="row" id="">
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
