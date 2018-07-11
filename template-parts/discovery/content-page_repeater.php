<?php


$display_group_titles   =   get_field('display_group_titles');
////////////////////////////////////////////
/////////START GROUP REPEATER LOOP//////////
////////////////////////////////////////////

$list_of_groups = [];
if(have_rows('group_repeater')){
  $i = 0;
  while ( have_rows('group_repeater') ) : the_row();
  $list_of_pages = [];
  $featured_item = [];
  if( have_rows('page_repeater') ){
    $j = 0;
    while ( have_rows('page_repeater') ) : the_row();

      if (get_sub_field('featured') == false){
        $list_of_pages[$j] = ['page'=>get_sub_field('page'),
                              'title'=>get_sub_field('title'),
                              'page_image'=>get_sub_field('page_image'),
                              ];
      $j++;
      }else{

        $featured_item =     ['page'=>get_sub_field('page'),
                              'title'=>get_sub_field('title'),
                              'page_image'=>get_sub_field('page_image'),
                              'left' => get_sub_field('left'),
                              'description' => get_sub_field('description'),
                              ];
      }
  endwhile; //page_repeater
  }//page_repeater endif
  $list_of_groups[$i] = ['group_title'=>get_sub_field('group_title'),
                         'list_of_pages' => $list_of_pages,
                         'featured_item' => $featured_item,
                          ];
  $i++;
endwhile;//group_repeater
}//group_repeater endif
?>



<div class="container">
<?php for ($i = 0; $i < count($list_of_groups); $i++):?>
<section class="discovery_section">
  <div class="row" id="key-players">
    <div class="col-xs-12">
      <?php if($display_group_titles):?>
        <h3><?php echo $list_of_groups[$i]['group_title'];?></h3>
      <?php endif;?>
      <span class="underline left"></span>
    </div>
  </div>

<?php
if($list_of_groups[$i]['featured_item']):
        if($list_of_groups[$i]['featured_item']['left']):
      ?>
        <!-------------------->
        <!---IF LEFT---------->
        <!-------------------->
        <div class="row">
            <!-- FEATURED IMAGE -->
            <div class="col-sm-6 discovery_featured_div">
              <a href="<?php echo $list_of_groups[$i]['featured_item']['page'];?>">
                <div style="background-image: url('<?php echo $list_of_groups[$i]['featured_item']['page_image'];?>')"></div>
                <h4><?php echo $list_of_groups[$i]['featured_item']['title'];?></h4></a>
              <p><?php echo $list_of_groups[$i]['featured_item']['description'];?></p>
            </div>

            <!-- IMAGE QUAD -->
            <div class="col-sm-6" style="padding: 0;">
            <?php for ($j = 0; $j < 4; $j++): ?>
              <?php if($j % 2 == 0){
                echo "<div class='row' style='margin: 0;'>";
              }?>
              <div class="col-sm-6 discovery_div"><a href="<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page'];?>">
                <div style="background-image: url('<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page_image'];?>')"></div>
                <h4><?php echo $list_of_groups[$i]['list_of_pages'][$j]['title'];?></h4></a></div>
              <?php if($j % 2 != 0){
                echo "</div>";
              }?>
            <?php endfor;//list_of_groups?>
            </div><!--col-sm-6-->
          </div><!--row-->

        <?php if (count($list_of_groups[$i]['list_of_pages']) > 4):?>
          <?php for ($j = 4; $j < count($list_of_groups[$i]['list_of_pages']); $j++):?>
            <?php if($j % 4 == 0){
              echo "<div class='row '>";
            }?>
            <div class="col-sm-3 discovery_div"><a href="<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page'];?>">
              <div style="background-image: url('<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page_image'];?>')"></div>
              <h4><?php echo $list_of_groups[$i]['list_of_pages'][$j]['title'];?></h4></a></div>
            <?php if($j % 4 == 3){
              echo "</div>";
            }elseif($j == count($list_of_groups[$i]['list_of_pages'])-1){
              echo "</div>";
            }?>
          <?php endfor;?>
        <?php endif; // if > 4 pages?>
        <!-- end if left -->
      <?php else://else right?>
      <!-------------------->
      <!--ELSE RIGHT------>
      <!-------------------->
      <div class="row">
        <!-- IMAGE QUAD -->
        <div class="col-sm-6" style="padding: 0;">
        <?php for ($j = 0; $j < 4; $j++): ?>
          <?php if($j % 2 == 0){
            echo "<div class='row' style='margin: 0;'>";
          }?>
          <div class="col-sm-6 discovery_div"><a href="<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page'];?>">
            <div style="background-image: url('<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page_image'];?>')"></div>
            <h4><?php echo $list_of_groups[$i]['list_of_pages'][$j]['title'];?></h4></a></div>
          <?php if($j % 2 != 0){
            echo "</div>";
          }?>
        <?php endfor;//list_of_groups?>
        </div><!--col-sm-6-->

        <!-- FEATURED IMAGE -->
        <div class="col-sm-6 discovery_featured_div">
          <a href="<?php echo $list_of_groups[$i]['featured_item']['page'];?>">
            <div style="background-image: url('<?php echo $list_of_groups[$i]['featured_item']['page_image'];?>')"></div>
            <h4><?php echo $list_of_groups[$i]['featured_item']['title'];?></h4></a>
          <p><?php echo $list_of_groups[$i]['featured_item']['description'];?></p>
        </div>
      </div><!--row-->

      <?php if (count($list_of_groups[$i]['list_of_pages']) > 4):?>
        <?php for ($j = 4; $j < count($list_of_groups[$i]['list_of_pages']); $j++):?>
          <?php if($j % 4 == 0){
            echo "<div class='row'>";
          }?>
          <div class="col-sm-3 discovery_div"><a href="<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page'];?>">
            <div style="background-image: url('<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page_image'];?>')"></div>
            <h4><?php echo $list_of_groups[$i]['list_of_pages'][$j]['title'];?></h4></a></div>
          <?php if($j % 4 == 3){
            echo "</div>";
          }elseif($j == count($list_of_groups[$i]['list_of_pages'])-1){
            echo "</div>";
          }?>
        <?php endfor;?>

      <?php endif; //if > 4 pages?>
      <!-- end else right -->

      <?php   endif; //if left or right?>




<?php else: //there's no featured?>


  <?php if (count($list_of_groups[$i]['list_of_pages']) > 0):?>
    <?php for ($j = 0; $j < count($list_of_groups[$i]['list_of_pages']); $j++):?>
      <?php if($j % 4 == 0){
        echo "<div class='row'>";
      }?>
      <div class="col-sm-3 discovery_div"><a href="<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page'];?>">
        <div style="background-image: url('<?php echo $list_of_groups[$i]['list_of_pages'][$j]['page_image'];?>')"></div>
        <h4><?php echo $list_of_groups[$i]['list_of_pages'][$j]['title'];?></h4></a></div>
      <?php if($j % 4 == 3){
        echo "</div>";
      }elseif($j == count($list_of_groups[$i]['list_of_pages'])-1){
        echo "</div>";
      }?>
    <?php endfor;?>
  <?php endif; //if > 0 pages?>


<?php endif; //if there's a featured?>


</section>
<?php endfor; // list_of_groups?>






</div>
