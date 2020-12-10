<?php
/*
 * Template Name: ストーリー
 */ 
?>

<?php get_header(); ?>

<section class="story-archive-wrapper">
  <div class="story-archive-contents">
    <div class="story-archive-1 story-archive-bgi">
      <?php get_template_part('top-wrapper'); ?>
      <div class="breadcrumb">
        <?php bcn_display(); ?>
     </div>
        <h2 class="page-title story-archive-wrapper-title">STORY</h2>   
          <div class="story-archive-container">
            <div class="story-archive-inner text-right">
              <div class="story-archive-item">
                 <p><?php echo get_field('story1') ;?></p>
              </div>
            </div>
           </div>
    </div>
    <div class="story-archive-2 story-archive-bgi">
        <div class="story-archive-container">
            <div class="story-archive-inner text-left">
                <div class="story-archive-item">
                    <p><?php echo get_field('story2') ;?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="story-archive-3 story-archive-bgi">
        <div class="story-archive-container">     
            <div class="story-archive-inner text-right">
                <div class="story-archive-item">
                    <p><?php echo get_field('story3') ;?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="story-archive-4 story-archive-bgi">
        <div class="story-archive-container">
            <div class="story-archive-inner text-left">
                <div class="story-archive-item">
                    <p><?php echo get_field('story4') ;?></p>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<section class="bg">
    <div></div>
</section>

<?php get_footer(); ?>