<?php
/*
 * Template Name: コメント
 */ 
?>

<?php get_header(); ?>

<div class="top-schedule-wrapper">
<?php get_template_part('top-wrapper'); ?>
</div>

<section class="comments-page-wrapper">
    <div class="container">
      <div class="breadcrumb">
        <?php bcn_display(); ?>
      </div>
        <h2 class="page-title comments-page-title">COMMENTS</h2>
          <p class="comments-page-sub-title">舞台関係者のみならず各界著名人からコメントが届いています！</p>
            <div class="comments-contents">
              <div>
                <img src="<?php echo get_template_directory_uri()?>/img/comment.png" alt="長松清潤" class="comments-img">
              </div>
                <div class="comments-text-contents">
                  <div class="comments-text-wrapper">
                    <span class="comments-contents-title">京都佛立ミュージアム館長</span><br class="dp-sp">
                    <span class="comments-name">長松清潤</span>
                    <p class="comments-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                    まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                  </div>
               </div>
            </div>
    </div>
        <div class="comments-people">
          <div class="container">
            <div class="comments-people-contents">
             <?php if(get_field('comments')):?>
              <?php while(the_repeater_field('comments')):?>
               <div class="comments-people-item">
                   <p class="comments-people-name"><?php the_sub_field('comments_name'); ?></p>
                   <h4 class="comments-people-occupation"><?php the_sub_field('comments_occupation'); ?></h4>
                   <p class="comments-people-text"><?php the_sub_field('comments_contents'); ?></p>
               </div>
              <?php endwhile; ?>
             <?php endif; ?>
           <?php wp_reset_postdata(); ?>
            </div>
          </div>
       </div>
</section>










<?php get_footer(); ?>