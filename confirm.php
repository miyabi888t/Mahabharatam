
<?php
/*
 * Template Name: 送信完了
 */ 
?>

<?php get_header(); ?>

<div class="top-schedule-wrapper">
<?php get_template_part('top-wrapper'); ?>
</div>

<section class="confirm-wrapper">
  <div class="confirm-container">
  <div class="breadcrumb">
    <?php bcn_display(); ?>
  </div>
      <h2 class="page-title confirm-title">INQUIRY</h2>
        <div class="confirm-contents">
            <p class="confirm-text">お問い合わせありがとうございました。<br>
            メッセージは正常に送信されました。</p>
        </div>
  </div>
</section>

<section class="news-wrapper">
    <div class="confirm-container">
      <div class="news-btn-md">
        <a href="http://localhost:8888/daily-trial/category/news/" class="btn-basic btn-red">ニュース一覧へ</a>
      </div> 
        <h2 class="latest-news-title page-title">LATEST NEWS</h2>
          <div class="news-contents">
            <ul class="news-items">
              <?php
               $args = array(
                'posts_per_page' => 5
                 );
                 $posts = get_posts( $args );
                 foreach ( $posts as $post ):
                 setup_postdata( $post );
                ?>
             <li class="news-item news-item-index">
               <a href="<?php the_permalink(); ?>">
                <div class="news-flex">
                  <div class="news-img">
                    <?php
                        if (has_post_thumbnail() ) {
                    the_post_thumbnail('small');
                    } else {
                    echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="サムネイル">';
                    }
                    ?>
                  </div>
                 <div class="news-text">
                    <time class="news-date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/n/j'); ?></time>
                    <p class="news-title"><?php the_title(); ?></p>
                 </div>
                </div>
              </a> 
            </li>
             <?php
            endforeach;
            wp_reset_postdata();
             ?>
           </ul>
         </div>
        <div class="news-btn-sp">
          <a href="http://localhost:8888/daily-trial/category/news/" class="btn-basic btn-red">ニュース一覧へ</a>
        </div> 
    </div>
</section>

<?php get_footer(); ?>