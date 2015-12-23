<?php get_header(); ?>
<!-- Begin flexslider -->
<?php add_flexslider(); ?>

<div class="row row-content">
    <div class="col-xs-12 col-sm-4">
    <section class="widgets-item">
        <h3 class="widgets">New!</h3>
        <?php
$page_id = 76;

?>
<?php echo get_the_post_thumbnail($page_id, 'medium'); ?>
<?php echo '<a href="'.$page_link.'" class="button">Join Now&nbsp;&raquo;</a>'
?>
        </section>
    </div>
    <div class="col-xs-12 col-sm-4">
        <section class="widgets-item">
        <h3 class="widgets">Mother Earth’s Jewelry</h3>
<p class="widgets">A couple of more words about the brand :) A couple of more words about the brand :) A couple of more words about the brand :) A couple of more words about the brand :)  </p>
        </section>    
    </div>
    <div class="col-xs-12 col-sm-4">
    <section class="widgets-item">
        <h3 class="widgets">Bestseller</h3>
        <?php
    $page_id = 76; ?>
     <?php   echo '<a class="widgets-image" href="' . get_permalink( $page_id ) . '">'; ?>
        <?php echo get_the_post_thumbnail($page_id, 'medium'); ?>
'</a>';
    </section>
    </div>
</div><!-- closed div tag -->
</div>

<?php get_footer(); ?>
