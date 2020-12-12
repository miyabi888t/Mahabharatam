<?php
/*
 * Template Name: キャスト
 */ 
?>

<?php get_header(); ?>

<div class="top-schedule-wrapper">
<?php get_template_part('top-wrapper'); ?>
</div>

<section class="cast-page-wrapper">
    <div class="cast-page-bg">
      <div class="container">
      <div class="breadcrumb">
        <?php bcn_display(); ?>
      </div>
        <h2 class="page-title cast-title">CAST</h2>
         <div class="cast-contents">
           <?php if(get_field('casts')): ?>
            <ul class="cast-items">
              <?php while(the_repeater_field('casts')): ?> 
               <li class="cast-item">
                <div class="cast-img">
                    <img src="<?php the_sub_field('casts_img'); ?>" alt="キャスト画像">
                </div>
                  <div class="cast-info-content">
                    <p class="cast-role"><?php the_sub_field('casts_role'); ?></p>
                    <p class="cast-name"><?php the_sub_field('casts_name'); ?></p>
                    <p class="cast-intro"><?php the_sub_field('casts_class'); ?></p>
                  </div>
                <div class="cast-text-content">
                     <p class="cast-text">
                     <?php the_sub_field('casts_explain'); ?></p>
                </div>
              </li>
              <?php endwhile; ?>
            </ul>
           <?php endif; ?>
        <?php wp_reset_postdata(); ?>
       </div>
    </div>
        
 <div class="cast-sub-contents">
    <div class="cast-container">
        <?php if(get_field('casts_middle')): ?>
            <div class="cast-sub-items">
                <?php while(the_repeater_field('casts_middle')): ?>
                    <div class="cast-sub-item">
                        <div class="cast-sub-img">
                            <img src="<?php the_sub_field('casts_middle_img'); ?>" alt="キャスト中間部画像">
                        </div>
                        <div class="cast-sub-text">
                            <p class="cast-sub-role"><?php the_sub_field('casts_middle_role'); ?></p>
                            <p class="cast-sub-name"><?php the_sub_field('casts_middle_name'); ?></p>
                            <p class="cast-sub-parts"><?php the_sub_field('casts_middle_class'); ?></p>
                            <p class="cast-sub-explain"><?php the_sub_field('casts_middle_explain'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
   </div>
 </div>

 <div class="cast-bottom-contents">
    <div class="cast-container">
        <?php if(get_field('casts_bottom')): ?>
        <div class="cast-bottom-items">
            <?php while(the_repeater_field('casts_bottom')): ?>
                <div class="cast-bottom-item">
                    <p class="cast-bottom-role"><?php the_sub_field('casts_bottom_role'); ?></p>
                    <p class="cast-bottom-name"><?php the_sub_field('casts_bottom_name'); ?></p>
                    <p class="cast-bottom-parts"><?php the_sub_field('casts_bottom_class'); ?></p>
                </div>
            <?php endwhile;?>
        </div>
            <?php endif; ?>
            <?php wp_reset_postdata();  ?>
    </div>
 </div>
</section>

<?php get_footer(); ?>

