<?php 

// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');

// Função para registrar os Scripts e o CSS
function crem_scripts() {
    // Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');
    
    // Registra o jQuery Novo (true carrega no rodapé, false no header)
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/jquery.js', array(), "1.11.1", true );
    
    // Registra o Bootstrap
	wp_register_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), "3.3.7", true );
    
    
    // Registra o Font Awesome Js
	wp_register_script( 'fontawesome', 'https://use.fontawesome.com/1d44302f92.js', array(), false, false );
    
    // Carrega os Scripts (ja carrega o jquerry porcausa da dependência)
    wp_enqueue_script( 'bootstrap' );
    wp_enqueue_script( 'fontawesome' );
   
    
}
add_action( 'wp_enqueue_scripts', 'crem_scripts' );

function crem_css() {
	wp_register_style( 'crem-style', get_template_directory_uri() . '/style.css', array(), false, false, 'all' );
	wp_enqueue_style( 'crem-style' );
}
add_action( 'wp_enqueue_scripts', 'crem_css' );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link'); 
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

// Registrar Menu
require_once('wp-bootstrap-navwalker.php');
register_nav_menus( array('primary' => __( 'Menu Principal', 'crem' ),) );

function my_custom_sizes() {
    add_image_size('large', 1920, 400, true);
   // add_image_size('medium', 900, 100, true);
}

add_action('after_setup_theme', 'my_custom_sizes');

//GA
add_action('wp_head', 'wpb_add_googleanalytics');
function wpb_add_googleanalytics() { ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35088111-29', 'auto');
  ga('send', 'pageview');
</script>
<?php } 

?>
