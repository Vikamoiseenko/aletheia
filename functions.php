<?php
/*
Theme Name: Aletheia Creation
Author: 
Anna Atiagina
MOISEENKO, VICTORIA
Author URI: http://www.aletheia.mykhabarovsk.com/
Description: Theme for Aletheia Creation
Version: 1.0
*/

#custom walker include
require_once('DD_Walker.php');
#custom breadcrumbs include
require_once('BS_Breadcrumbs.php');
//Register my menu

#Register custom menus
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'main-menu' => 'Main',
		  'Footer-menu' => 'Footer-menu',
		  'social_menu' => 'Social Menu' 
		)
	);
}   

//Enable Feauture images and post thumbnails
add_theme_support('post-thumbnails');
//
//register sidebar
register_sidebar(array(
	'before_widget' => '<div>',
	'after_widget' => '</div>',
	'before_title' => '<h2>',
	'after_title' => '</h2>',
));


//Register sidebars
//add_action( 'widgets_init', 'my_register_sidebars' );


//flexslider
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
 // create the list items for images with captions
    
    foreach ( $attachments as $attachment_id => $attachment ) { 
	
		$theImage = wp_get_attachment_image($attachment_id, 'flexslider');
		$theBlockquote = get_post_field('post_excerpt', $attachment->ID);
		$theLink = get_post_field('post_content', $attachment->ID);
	
        echo '<li>';
		
		if (is_page('Home')) { // use full size image with blockquote for home page
			
        	echo $theImage;
			echo '<blockquote class="home">'.$theBlockquote. '&nbsp;</blockquote>';
			echo '<a href="'.$theLink.'"><button class="home">Click to learn more and find yourself a gift from the Morther Earth!</button></a>';
			
		}
		
		else { // use large size image with caption for all other pages and postings
			
			echo wp_get_attachment_image($attachment_id, 'flexslider');
			echo '<p>';
			echo get_post_field('post_excerpt', $attachment->ID);
			echo '</p>';
			
		}
      
        echo '</li>';
        
    } ?>
    
    </ul>
    </div>
    <!-- End Slider -->
        
	<?php }// end see if images
	
} // end add flexslide 
add_shortcode( 'flexslider', 'add_flexslider' ); 

// Get Child Pages 
function get_child_pages() {
	
	global $post;
	
	rewind_posts(); // stop any previous loops 
	query_posts(array('post_type' => 'page', 'posts_per_page' => -1, 'post_status' => publish,'post_parent' => $post->ID,'order' => 'ASC','orderby' => 'menu_order')); // query and order child pages 
    
	while (have_posts()) : the_post(); 
	
		$childPermalink = get_permalink( $post->ID ); // post permalink
		$childID = $post->ID; // post id
		$childTitle = $post->post_title; // post title
		$childExcerpt = $post->post_excerpt; // post excerpt
        
		echo '<article id="page-excerpt-'.$childID.'" class="box-left">';
		echo '<div class="section-box">';
		echo '<p id="button"><a href="'.$childPermalink.'">'.$childTitle.'</a></p>';
		echo '</div>';
		echo '<div class="section-boxes">';
		echo '<p id>'.$childExcerpt.' <a href="'.$childPermalink.'">'; ?> <i class="fa fa-arrow-circle-right"></i> <?php '</a></p>';
		echo '</div>';
		echo '</article>';
        
	endwhile;
	
	// reset query
	wp_reset_query();
        
}
//
//create page excerpts
add_post_type_support('page', 'excerpt');
//
//Get my title tag
function get_my_title_tag() {
	global $post; 
	
	if(is_front_page()) {//the front page
		bloginfo('description');
	}
	elseif (is_page() || is_single()) {//page and postings
		the_title(); //title of page posting
	}
	
	else {
		bloginfo('description'); 
	}
	if ($post->post_parent) { //if there is a parent
		echo ' | ';
		echo get_the_title($post->post_parent); 
		}
	echo ' | '; //separator with space
	bloginfo('name'); //site name
	echo ' | ';
	echo 'Seattle, WA';
	}

function get_seo() {
	$myPosting = get_post(186);
	$mySEO = $myPosting->post_content;
	echo $mySEO;
}


/*
 * wc_remove_related_products
 * 
 * Clear the query arguments for related products so none show.
 * Add this code to your theme functions.php file.  
 */
function wc_remove_related_products( $args ) {
	return array();
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10); 

?>