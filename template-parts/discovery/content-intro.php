<?php

$left_intro_image          =   get_field('left_intro_image');
$intro_image               =   get_field('intro_image');
$add_section_navigation    =   get_field('add_section_navigation');
$navigation_header_text    =   get_field('navigation_header_text');
$intro_section_content     =   get_field('intro_section_content');
?>



<div class="container-fluid">
  <?php if($left_intro_image):?>
    <div class="row left_image_row">
      <div class="col-sm-6 col-xs-12 tiles_left_image discovery_intro_image" style="background-image: url(<?php echo $intro_image;?>);"></div>
      <div class="col-sm-6 col-xs-12 block_colored tiles_left_text" style="background-color: #022437;">
        <div class="content_right_block_section discovery_intro_container">
          <div class="discovery_browse">
            <?php if($add_section_navigation):?>
              <h3><?php echo $navigation_header_text;?></h3>
              <span class="underline left"></span>
            <?php else:
              echo $intro_section_content;
             endif;?>
          </div>
        </div><!-- block_section-->
      </div>
    </div><!--row-->
  <?php else:?>
    <div class="row">
      <div class="col-sm-6 col-xs-12 block_parent_left block_colored" style="background-color: #022437;">
        <div class="block_section block-padding">
          <div class="block_section_child" style="width: 100%;">
              <?php if($add_section_navigation):?>
                <h3><?php echo $navigation_header_text;?></h3>
                <span class="underline left"></span>
              <?php else:
                echo $intro_section_content;
               endif;?>
          </div>
        </div><!-- block_section-->
      </div>
      <div class="col-sm-6 col-xs-12 tiles_right_image discovery_intro_image" style="background-image: url(<?php echo $intro_image;?>);"></div>
    </div><!--row-->
  <?php endif;?>
</div><!--container-fluid-->
