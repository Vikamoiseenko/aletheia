<?php get_header(); ?>
<!-- Begin flexslider -->
<?php add_flexslider(); ?>
</div>
<div class="row-wrapper">
<div class="row row-content">
    <div id="widgets-item" class="col-xs-12 col-sm-4">
    <section class="widgets-item">
        <h2 class="widgets">New!</h2>
        <div class="col-xs-12 col-sm-12 text-center">
        <?php
    $page_id = 166;
    $page_link = get_permalink($page_id); ?>
    <a class="widgets-image" href="<?php echo get_permalink( $page_id ); ?>">
        <?php echo get_the_post_thumbnail($page_id, 'medium'); ?>
</a>
        </div>
        </section>
    </div>
    <div id="widgets-item" class="col-xs-12 col-sm-4">
        <section class="widgets-item">
        <h2 class="widgets">Mother Earth’s Jewelry</h2>
        <div class="col-xs-12 col-sm-12 text-center">			
<p class="widgets">A couple of more words about the brand :) A couple of more words about the brand :) A couple of more words about the brand :) A couple of more words about the brand :)  </p>
			</div>
        </section>    
    </div>
    <div id="widgets-item" class="col-xs-12 col-sm-4">
    <section class="widgets-item">
        <h2 class="widgets">Bestseller</h2>
        <div class="col-xs-12 col-sm-12 text-center">
        <?php
    $page_id = 162;
    $page_link = get_permalink($page_id); ?>
    <a class="widgets-image" href="<?php echo get_permalink( $page_id ); ?>">
        <?php echo get_the_post_thumbnail($page_id, 'medium'); ?>
</a>
        </div>
    </section>
    </div>
</div><!-- closed div tag -->
</div>

<?php get_footer(); ?>
