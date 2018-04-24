<?php
  $quote_array = [];
  $quote_loop = new WP_Query( array('post_type' => 'quote'));
  $i = 0;
  while( $quote_loop ->have_posts()) : $quote_loop->the_post();
    $quote_sub = [get_field('quote'), get_field('author')];
    $quote_array[$i] = $quote_sub;
    $i++;
  endwhile;
  wp_reset_postdata();
  $randomQuoteIndex = rand(0,count($quote_array)-1);
 ?>


<div class="container search-float">
  <i class="fa fa-quote-left" id="header_quote_left"></i>
  <span style="color: white; z-index: 99; position: relative;" id="header_quote">
    <?php
      $default_quote = 'The only thing that you absolutely have to know, is the location of the library.';
      echo (count($quote_array) == 0 ? $default_quote : $quote_array[$randomQuoteIndex][0]);
    ?>
  </span>
  <i class="fa fa-quote-right" id="header_quote_right"></i>
  <hr style="position: relative; border-top: 1px solid white; margin: 10px 0; background-color: transparent;">
  <span style="color: white; z-index: 99; position: relative;" id="header_quote_author">
    <?php
      $default_author = 'Albert Einstein, Physicist';
      echo (count($quote_array) == 0 ? $default_author : $quote_array[$randomQuoteIndex][1]);
    ?>
  </span>
  <form style="margin-top: 20px;">
    <div class="form-group searchbar-wrapper" style="display: flex;">
      <!-- <label class="sr-only" for="keywords">Search</label> -->
      <input class="form-control" id="searchbar" placeholder="Search the Library" id="keywords" name="keywords" type="text">
      <!-- <input class="form-control" id="searchbutton" type="submit" value="Search"> -->
      <button id="searchbutton" type="submit" style="display:flex; justify-content: center;"><i style="align-self: center;" class="fa fa-search"></i></button>
    </div>
  </form>
</div>
