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

//Register my menu
register_nav_menus(array(
'main-menu' => __( 'Main' ),
'Footer-menu' => __('Footer-menu')
));

//flexslider
function add_flexslider() {    
    $attachments = get_children(array('post_parent' => get_the_ID(), 'order' => 'ASC', 'orderby' => 'menu_order', 'post_type' => 'attachment', 'post_mime_type' => 'image','caption' => $attachment->post_excerpt, ));
    if ($attachments) {        
        echo '<div class="flexslider">';
        echo '<ul class="slides">';
    
        foreach ($attachments as $attachment_id => $attachment) {            
	     echo '<li>';
            echo wp_get_attachment_image($attachment_id, 'large');
            echo '<span class="flex-caption">';
            echo get_post_field('post_excerpt', $attachment->ID);
            echo '</span>';
            echo '</li>';
        }
        echo '</ul>';
        echo '</div>';
    }
}
add_shortcode( 'flexslider', 'add_flexslider' );


?>