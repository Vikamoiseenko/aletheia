<?php get_header(); ?>
<?php woocommerce_breadcrumb(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>

        
		<?php if ( has_post_thumbnail() ) {// check if the post has a Post Thumbnail assigned to it.
            the_post_thumbnail();
        } ?>
		<?php the_content(); ?>
 
	<?php endwhile; ?>
	<?php endif; ?>
    <?php get_child_pages(); ?>
    
<small>page.php</small>
</div>
<?php get_footer(); ?>