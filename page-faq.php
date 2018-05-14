<?php
/*
Template Name: FAQ
 */
 $list_of_questions = [];
 $columns = ['first_column','second_column','third_column'];
 $i = 0;
 for ($col = 0; $col < count($columns); $col++){
   if( have_rows($columns[$col]) ){
     while ( have_rows($columns[$col]) ){
       the_row();
       $list_of_questions[$i] = ['link_text'=>get_sub_field('link_text'),'slug'=>get_sub_field('slug'),'answer_title'=>get_sub_field('answer_title'),'answer'=>get_sub_field('answer')];
       $i++;
     }//while
   }//if
 }//for

get_header();

?>

<?php get_template_part( 'template-parts/page/content', 'pageheader' );?>


<div class="container">
  <article class="faq-top">
    <section class="faq-grid">
      <span class="how_do_i">How Do I...</span>
      <div class="faq-list-container">
        <div class="row">
          <div class="col-xl-12 col-md-4 faq-list">
            <?php if( have_rows('first_column') ):
                while ( have_rows('first_column') ) : the_row();?>
                  <a href="#<?php the_sub_field('slug');?>"><div class="faq-item"><?php the_sub_field('link_text');?></div></a>
              <?php endwhile;
              endif;?>
          </div>
          <div class="col-xl-12 col-md-4 faq-list">
            <?php if( have_rows('second_column') ):
                while ( have_rows('second_column') ) : the_row();?>
                  <a href="#<?php the_sub_field('slug');?>"><div class="faq-item"><?php the_sub_field('link_text');?></div></a>
              <?php endwhile;
              endif;?>
          </div>
          <div class="col-xl-12 col-md-4 faq-list">
            <?php if( have_rows('third_column') ):
                while ( have_rows('third_column') ) : the_row();?>
                  <a href="#<?php the_sub_field('slug');?>"><div class="faq-item"><?php the_sub_field('link_text');?></div></a>
              <?php endwhile;
              endif;?>
          </div>
        </div><!--row-->
      </div>
    </section>

  </article><!--entry-content-->
</div><!--container-->

<section class="faq-answers">

  <?php for ($faqCount = 0; $faqCount < count($list_of_questions); $faqCount++):?>
    <div class="faq-answer <?php echo ($faqCount % 2 == 0 ? 'faq-even':'faq-odd');?>" id="<?php echo $list_of_questions[$faqCount]['slug']?>">
      <div class="container">
        <h3 style="margin-bottom: 10px;"><?php echo $list_of_questions[$faqCount]['answer_title']?></h3>
        <?php echo $list_of_questions[$faqCount]['answer']?>
      </div>
    </div>

  <?php endfor;?>
</section><!--faq-answers-->


</article><!-- #post-<?php the_ID(); ?> -->
<?php get_footer(); ?>
