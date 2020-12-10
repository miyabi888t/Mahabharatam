<?php 
function my_setup()
{
add_theme_support('post-thumbnails');
add_theme_support('automatic-feed-links'); 
add_theme_support('title-tag'); 
add_theme_support(
'html5',
array(
'search-form',
'comment-form',
'comment-list',
'gallery',
'caption',
)
);
}
add_action('after_setup_theme', 'my_setup');


function my_script_init()
{
wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
wp_enqueue_style('my', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');
wp_enqueue_script('my', get_template_directory_uri() . '/js/script.js', array( 'jquery' ), '1.0.0', true);
wp_enqueue_style('amn', get_template_directory_uri() . '/css/animate.css', array(), '1.0.0', 'all');
wp_enqueue_script('wow', get_template_directory_uri() . '/js/wow.min.js', array( 'jquery' ), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_script_init');

//ヘッダー
function my_menu_init()
{
register_nav_menus(
array(
'global' => 'ヘッダーメニュー',
)
);
}
add_action('init', 'my_menu_init');


//記事表示件数変更
function change_posts_per_page($query) {
  if ( is_admin() || ! $query->is_main_query() )
      return;

  if ( $query->is_archive() ) {
      $query->set( 'posts_per_page', '9' ); 
      return;
  }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );


//thanksページへ誘導
add_action( 'wp_footer', 'add_thanks_page' );
function add_thanks_page() {
echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'http://daily-trial.miyabi-travelog.com/comfirm/';
}, false );
</script>
EOD;
}
?>
