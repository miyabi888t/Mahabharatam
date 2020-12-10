<?php
/*
 * Template Name: ニュースアーカイブ
 */ 
?>

<?php get_header(); ?>

<div class="top-schedule-wrapper">
 <?php get_template_part('top-wrapper'); ?>
</div>

<section class="news-archive-wrapper">
  <div class="container">
  <div class="breadcrumb">
    <?php bcn_display(); ?>
  </div>
  
    <h2 class="page-title news-page-title">NEWS</h2>
     <div class="news-contents">
       <?php if (have_posts() ) : ?>
         <ul class="news-items-archive">
            <?php
              while ( have_posts() ) :
              the_post(); ?>
                 <li class="news-item-archive">         
                     <a href="<?php the_permalink(); ?>">
                         <div class="news-archive-img">
                            <?php
                              if (has_post_thumbnail() ) {
                              the_post_thumbnail('small');
                              } else {
                              echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="サムネイル">';
                                }
                                ?>
                         </div>
                            <div class="news-archive-text">
                                <time class="news-archive-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                                <h3 class="news-archive-title"><?php the_title(); ?></h3>
                            </div>
                     </a> 
                </li>
            <?php endwhile; ?>
         </ul>
       <?php endif; ?>
  </div>

<?php if (paginate_links() ) : ?>
    <div class="pagenation">
        <?php
          echo
          paginate_links(
            array(
                'end_size' => 1,
                'mid_size' => 1,
                'prev_next' => true,
                'prev_text' => __('&lt;'), 
                'next_text' => __('&gt;'),
                )
                );
              ?>
        </div>
    <?php endif; ?>
  </div>

</section>

<?php get_footer(); ?>
