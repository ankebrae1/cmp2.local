<?php
//SCRIPTS EN CSS TOEVOEGEN
function add_theme_scripts() {
 
 //EERST BOOTSTRAP / FONTAWESOME CSS BINNEHALEN MET GET_TEMPLATE_URL
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '1.1', 'all');
  wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/font-awesome/css/font-awesome.css', array(), '1.1', 'all');
  //TWEEDES MIJN EIGEN STYLE.CSS BINNENHALEN
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array ( 'javascript' ), 1.1, true);
  wp_enqueue_script( 'script', get_template_directory_uri() . 'http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.js', array ( 'javascript' ), 1.1, true);
 
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );



//MENU
function register_menu_locations() {
    register_nav_menus(
      array(
        'primary-menu' => __( 'Primary menu'),
        'social' => __( 'Social Links Menu' ),
      )
    );
  }
  add_action( 'init', 'register_menu_locations' );



//NIEUWS
function add_custom_posttype_nieuws(){

	$args = array(
		'label' => 'Nieuws',
		'description' => 'Nieuws',
		'public' => true,
		'menu-position' => 5,
		'supports' => array('title', 'editor', 'comments'),
		'menu_icon' => 'dashicons-welcome-write-blog',
        'has_archive' => true,
	);

	register_post_type('nieuws', $args);
}

add_action('init', 'add_custom_posttype_nieuws');



//VOORDELEN
function add_custom_posttype_voordelen(){

	$args = array(
		'label' => 'Voordelen',
		'description' => 'Voordelen',
		'public' => true,
		'menu-position' => 5,
		'supports' => array('title', 'editor'),
		'menu_icon' => 'dashicons-thumbs-up',
        'has_archive' => true,
	);

	register_post_type('voordelen', $args);
}

add_action('init', 'add_custom_posttype_voordelen');



//RECEPTEN
function add_custom_posttype_recepten(){

	$args = array(
		'label' => 'Recepten',
		'description' => 'Recepten',
		'public' => true,
		'menu-position' => 5,
		'supports' => array('title', 'editor', 'comments'),
		'menu_icon' => 'dashicons-editor-ol',
        'has_archive' => true,
	);

	register_post_type('recepten', $args);
}

add_action('init', 'add_custom_posttype_recepten');

//METABOX recepten
function my_metabox_receptfoto(){
	add_meta_box( 
		'metabox_receptfoto', 
		'Receptfoto', 
		'content_my_metabox_receptfoto', 
		'recepten',
		'normal',
		'high' );
}
add_action('add_meta_boxes', 'my_metabox_receptfoto');

function content_my_metabox_receptfoto($post){
	//ALS ER REEDS EEN WAARDE IS, HAAL DIE OP EN TOON DIE IN HET FORMULIER
	$receptfoto = get_post_meta($post->ID, '_receptfoto', true);

	echo "<label for='receptfoto'>Receptfoto: </label>";
	echo "<input type='text' name='receptfoto' id='receptfoto' value='{$receptfoto}' >";
}

	// METADATA VAN METABOX OPSLAAN WANNEER WE DE POST OPSLAAN
function save_metabox_receptfoto($post_id){

	//WAARDE UIT FORMULIER HALEN
	$receptfoto = $_POST['receptfoto'];
	update_post_meta($post_id, '_receptfoto', $receptfoto);

}
	// VOER UIT WANNEER WE DE POST OPSLAAN OF UPDATEN
if (isset($_POST['receptfoto'])){ 
	add_action('save_post', 'save_metabox_receptfoto');
}




//WEDSTRIJD
function add_custom_posttype_wedstrijd(){

	$args = array(
		'label' => 'Wedstrijd',
		'description' => 'Wedstrijd',
		'public' => true,
		'menu-position' => 5,
		'supports' => array('title', 'editor'),
		'menu_icon' => 'dashicons-media-video',
        'has_archive' => true,
	);

	register_post_type('wedstrijd', $args);
}

add_action('init', 'add_custom_posttype_wedstrijd');




//CUSTOM LOGO
function custom_logo_added() {
    $args = array(
        'height'      => 400,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $args );
}
add_action( 'after_setup_theme', 'custom_logo_added' );




//CUSTOM HEADER
function custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . '/images/banner.jpeg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'custom_header_setup' );




// SIDEBAR
function _jupiler_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'jupiler' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', '_jupiler_widgets_init' );