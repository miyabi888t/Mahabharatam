<section class="schedule-wrapper">
    <div class="container">
        <div class="schedule-contents">
            <h2 class="schedule-title">SCHEDULE</h2>
            <?php
                 $page_id = get_page_by_path('56');
                    $page_id = $page_id->ID;
            ?>
             <?php if(have_rows('repeat_schedule', 56)): ?>
             <?php $page_counter = 4; ?>
             <div class="schedule-info">
                <?php while(have_rows('repeat_schedule', 56)): the_row(); ?>
                <?php $page_counter--; ?>
                <div class="schedule-info-inner">
                    <div class="schedule-info-contents">
                        <p class="schedule-info-event"><?php the_sub_field('schedule_event'); ?></p>
                        <p class="schedule-info-time"><?php the_sub_field('schedule_event_time'); ?></p>
                        <p class="schedule-info-place"><?php the_sub_field('schedule_place'); ?></p>
                        <p class="schedule-info-present"><?php the_sub_field('schedule_present'); ?></p>
                    </div>
                </div>
                <?php if ($page_counter === 0) break;?>
                <?php endwhile; ?>
             </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?> 
        </div>
        <div class="schedule-btn">
                <a href="<?php echo home_url('/inquiry'); ?>" class="btn-brawn">お問い合わせはこちら</a>
                <a href="<?php echo home_url('/inquiry'); ?>" class="btn-red">チケット予約サイトへ</a>
        </div> 
    </div>
</section>

<footer>
    <div class="inner">
        <p class="copy-right">Copyright ©️ 2019 完全版マハーバーラタ All Rights Reserved.</p>
    </div>
</footer>

<?php wp_footer(); ?>
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'http://localhost:8888/daily-trial/confirm/';
}, false );
</script>
</body>
</html>









