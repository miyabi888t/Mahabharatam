<?php get_header(); ?>

    <section class="top-wrapper clear">
        <div class="top-container">
            <div class="top-contents">
            <h1><img src="<?php echo get_template_directory_uri()?>/img/title.png" alt="完全版マハーバラタ" class="top-title"></h1>
                <div class="top-contents-schedule-explain">
                <img src="<?php echo get_template_directory_uri()?>/img/schedule.png" alt="2020年7月4日〜7日なかのZERO大ホール" class="top-schedule">
                <p class="top-text">
                    小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である<strong>完全版マハーバーラタ</strong>の公演が決定！！<br>アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                </p>
                </div>
                <div class="top-btn">
                <a href="<?php echo home_url('/inquiry'); ?>" class="btn-red">チケット予約サイトへ</a>
                </div>
            </div>
        </div>
    </section>

 <section class="introduction-wrapper">
     <div class="container">
        <div class="introduction-contents">
            <h2 class="section-title introduction-top-title">INTRODUCTION</h2>
            <p class="introduction-title">なぜ今「マハーバーラタ」なのか？
            </p>
            <div class="introduction-text-contents">
                <p class="introduction-text">
                「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。<br>平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。<br>現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
                </p>
            </div>
        </div>

     </div>
 </section>

<section class="news-wrapper">
    <div class="container news-container">
        <h2 class="section-title news-section-title">NEWS</h2>
     
        <div class="news-contents">
        <div class="news-btn-md">
            <a href="<?php echo home_url('/news'); ?>" class="btn-basic btn-red">ニュース一覧へ</a>
        </div> 
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
        </div>
        <div class="news-btn-sp">
        <a href="<?php echo home_url('/news'); ?>" class="btn-basic btn-red">ニュース一覧へ</a>
    </div> 
  
</section>

<section class="story-wrapper">
  
    <div class="container">
        <h2 class="section-title story-top-title">STORY</h2>
        <div class="story-text">
            <p>マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
                世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
            </p>
        </div>
         <div class="btn-story">
             <a href="<?php echo home_url('/story'); ?>" class="btn-basic btn-red">もっと詳しく</a>
         </div>
    </div>
</section>

<section class="comments-wrapper wow fadeIn">
    <div class="container">
        <h2 class="section-title comments-title">COMMENTS</h2>
        <p class="comments-sub-title">舞台関係者のみならず各界著名人からコメントが届いています！</p>
        <div class="comments-contents">
            <div class="comments-img">
                <img src="<?php echo get_template_directory_uri()?>/img/comment.png" alt="コメント人物画像">
            </div>
            <div class="comments-text-contents">
                <div class="comments-text-wrapper">
                  <span class="comments-contents-title">京都佛立ミュージアム館長</span>
                  <span class="comments-name">長松清潤</span>
                  <p class="comments-text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                  まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
                </div>
                <div class="btn-comments">
                      <a href="<?php echo home_url('/comments'); ?>" class="btn-basic btn-red">もっと見る</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cast-wrapper">
    <div><h2 class="section-title cast-title">CAST</h2></div>
        <div class="cast-contents">
            <div class="container">
            <?php
             $page_id = get_page_by_path('59');
             $page_id = $page_id->ID;
             ?>
            <?php if(have_rows('casts', 59)): ?>
            <?php $page_counter = 3; ?>
        <ul class="cast-items">
            <?php while(have_rows('casts', 59)): the_row(); ?>
            <?php $page_counter--; ?>
                <li class="cast-item">
                     <div class="cast-img">
                         <img src="<?php the_sub_field('casts_img'); ?>" キャスト画像>
                     </div>
                     <div class="cast-info-content">
                         <p class="cast-role"><?php the_sub_field('casts_role'); ?></p>
                         <h4 class="cast-name"><?php the_sub_field('casts_name'); ?></h4>
                         <p class="cast-intro"><?php the_sub_field('casts_class'); ?></p>
                     </div>
                <div class="cast-text-content">
                     <p class="cast-text">
                     <?php the_sub_field('casts_explain'); ?>
                    </p>
                </div>
                </li>
            <?php if ($page_counter === 0) break;?>
            <?php endwhile; ?>
        </ul>
           <?php endif; ?>
           <?php wp_reset_postdata(); ?>
              </div>
            <div class="cast-btn">
                <a href="<?php echo home_url('/casts'); ?>" class="btn-basic">もっと見る</a>
            </div>
        </div>
        <div class="cast-bg">
        </div>
</section>


<?php get_footer(); ?>

