<?php
$is_parent    =   get_field('parent_page');
$page_id = get_the_ID();
$parent_id = wp_get_post_parent_id($page_id);

if($is_parent){
  $mypages = get_pages( array( 'child_of' => $page_id));
}else{
  $mypages = get_pages( array( 'child_of' => $parent_id));
}


 ?>



  <h3>Browse <?php  if($is_parent){echo get_the_title();}else{echo get_the_title($parent_id);}?></h3>
  <ul style="list-style: none; margin: 0; padding: 0;">
    <?php
      $i = 0;
      foreach ( $mypages as $page ){?>
      <li style="<?php if($i<count($mypages)-1):?>border-bottom: 1px solid rgba(0, 0, 0, .12);<?php endif;?> padding: 5px 0; font-family: "Lato", Georgia, Times, serif;">
      <i style="color: #f94c3f; margin-right: 10px;" class="fas fa-caret-right"></i>
      <?php
        $section_link = '<a href="' . get_page_link( $page->ID ) . '">';
        $section_link .= $page->post_title;
        $section_link .= '</a>';
        echo $section_link;
      ?>
      </li>
    <?php $i++; }//foreach?>
  </ul>
