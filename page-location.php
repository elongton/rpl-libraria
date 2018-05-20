<?php
/*
Template Name: Location
 */

/* LibCal Hours Start */
 $url = 'https://api3.libcal.com/api_hours_grid.php?iid=4083&format=json&weeks=1&systemTime=0';
 $days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
 $dayofweek = date('w');
 $response = wp_remote_get( $url );
 if( is_wp_error( $response ) ) {
    $error_message = $response->get_error_message();
    echo "Something went wrong: $error_message";
 } else {
   $body_string = json_decode($response['body'], true);
 }

 for($i = 0; $i < count($body_string['locations']); ++$i){
   if ($body_string['locations'][$i]['name'] == get_field('libcal_branch_name')){
     $branch_index = $i;
   }
 }
/* LibCal Hours End */



 /* Factoid Start*/
$i = 0;
if( have_rows('factoids') ){
 while ( have_rows('factoids') ){
   the_row();
   $list_of_factoids[$i] = get_sub_field('factoid');
   $i++;
 }//while
}//if
$randomFactoidIndex = rand(0,count($list_of_factoids)-1);
/* Factoid End */






$branch_image  =     get_field('image');
$address       =     get_field('address');
$phone         =     get_field('phone_number');
get_header();
get_template_part( 'template-parts/page/content', 'pageheader' );
?>


<div class="container-fluid">
  <div class="row top_location_row">
    <div class="col-sm-6 col-xs-12">
        <div class="block_section">
          <div class="block_section_child">
            <table>
              <tr>
                <td><i class="fas fa-info"></i></td>
                <td><?php echo $list_of_factoids[$randomFactoidIndex]; ?></td>
              </tr>
            </table>
            <hr>
            <table>
              <tr>
                <td><i class="fas fa-phone"></i></td>
                <td><?php echo $phone;?></td>
              </tr>
            </table>
            <hr>
            <table>
              <tr>
                <td class=""><i class="fas fa-home"></i></td>
                <td class=""><?php echo $address;?></td>
              </tr>
            </table>
            <button class="btn btn-primary" style="margin-top: 20px; width: 100%;">Hours</button>
            <button class="btn btn-primary" style="margin-top: 20px; width: 100%;">Meeting Rooms</button>
          </div>
        </div><!--emphasis_section-->

    </div>
    <div class="col-sm-6 col-xs-12 location_page_image" style="height: 500px; background-image: url('<?php echo $branch_image;?>')"></div>
  </div><!-- row -->


  <div class="row">
    <div class="col-xs-12" style="padding: 0;">
      <?php get_template_part( 'template-parts/location/content', 'map' );?>
    </div>
  </div>
</div><!--container-fluid -->


<div class="row">
  <div class="col-sm-6 col-xs-12" style="">
    <div class="content_block_section block-static">
      <div class="block_section_child">
        <h3 style="margin-bottom: 10px;">Hours</h3>
        <table class="table table-striped" id="location_hours_table">
          <?php
            for ($i = 0; $i < count($days); $i++){
              timerowsAPI($days[$i], $branch_index, $body_string);
            }
          ?>
        </table>
        <div style="display: flex; justify-content: center;">
          <?php
            // //this code adds a closed/open status below the hours table
            // echo "<span id='location_status'>Status:&nbsp;</span>";
            // $is_open = $body_string['locations'][$branch_index]['weeks'][0][$days[$dayofweek]]['times']['currently_open'];
            //
            // if ($is_open){
            //   echo "<span id='location_open'>OPEN</span>";
            // } else {
            //   echo "<span id='location_closed'>CLOSED</span>";
            // }
          ?>
        </div>

      </div>
    </div><!-- block_section-->
  </div>

  <div class="col-sm-6 col-xs-12">
    <div class="block-static content_right_block_section">
      <div class="">

        <h3 style="margin-bottom: 5px;">Features</h3>
        <?php
        // check if the repeater field has rows of data
        if( have_rows('features') ):
         	// loop through the rows of data
            while ( have_rows('features') ) : the_row();?>
            <h5><?php echo the_sub_field('feature_title');?></h5>
            <p><?php echo the_sub_field('feature_description');?></p>
        <?php
            endwhile;
        else :
            // no rows found
        endif;
        ?>
      </div>

    </div><!-- block_section-->
  </div>

</div>


</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>
