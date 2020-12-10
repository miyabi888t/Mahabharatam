<?php get_header(); ?>

<div class="top-schedule-wrapper">
<?php get_template_part('top-wrapper'); ?>
</div>

<article <?php post_class( array( 'entry' ) ); ?>>

<section class="news-single-wrapper">
  <div class="news-single-container">
    <div class="breadcrumb">
            <?php bcn_display(); ?>
    </div>
        <h2 class="page-title news-single-top-title">NEWS</h2>
             <?php
             if (have_posts() ) :
             while (have_posts() ) :
                    the_post();
             ?>
        <div class="news-single-contents">
            <div class="news-single-top">
                <div class="news-single-img">
                    <?php
                    if (has_post_thumbnail() ) {
                     the_post_thumbnail('small-thumb');
                      }
                     ?>
                </div>
                <div class="news-single-head">
                    <p class="news-single-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></p>
                    <h3 class="news-single-title"><?php the_title(); ?></h3>
                </div>
                <div class="news-single-text-contents">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
              <?php endwhile; endif;?>

        <div class="post-navigation clear">
          <div class="prev-item">
           <div class="prev">
              <?php previous_post_link('%link', 
                '<div class="page-nav-item">
                <div class="page-btn">
                 <p><</p></div>
                 <div class="page-nav-text">
                 <span>%date</span> <br> <p>%title</p></div>
                 <div class="page-nav-sp">
                 <p>前の記事へ</p></div>
                 </div>
                 '); ?>
           </div>
          </div>
           <div class="next-item">
            <div class="next">
              <?php next_post_link('%link', 
                '<div class="page-nav-item">
                <div class="page-nav-text">
                <span>%date</span><br>
                <p>%title</p></div>
                <div class="page-nav-sp">
                <p>次の記事へ</p>
                </div>
                <div class="page-btn"><p>></p></div>
                </div>
                '); ?>
           </div>
          </div>  
       </div>
    </div>
</section>

<?php get_footer(); ?>