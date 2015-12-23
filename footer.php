<footer class="row-footer">
    <div class="footer-container">
       
            <div class="col-xs-12 col-sm-3">
              <div id="logo-footer" class="col-xs-12 col-sm-4">
                <a class="navbar-brand" href="<?php echo get_settings('home'); ?>" title="Link to Aletheia Creation"><img id="mainLogo" src="<?php bloginfo('template_directory'); ?>/images/aletheia_creation.jpg" width="237" height="130" />
</a>      
                </div> 
            </div>
            <div class="col-xs-12 col-sm-4">
                <ul class="list-menu">
                <li>About</li>
                <li>Necklaces</li>
                <li>Bracelets</li>
                <li>Earings</li>
                <li>Jewelry Displays</li>
                <li>FAQ</li>
                <li>Contact</li>
                </ul>
            </div>
            <div id="social-footer" class="col-xs-12 col-sm-4">
                <a href="#"><i class="fa fa-envelope-o fa-3x"></i></a>
                <a href="#" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
                <a href="#" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
            </div>
       
    </div>
</footer>




<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>
      <!-- Begin Flex Slider -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.flexslider.js"></script>

<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider({
		animation: "fade",
		slideshow: false,
		smoothHeight: true
	}); // call flexslider function
  });
</script>
<!-- End Flex Slider -->
<!-- Start WP footer -->
<?php wp_footer(); ?>
<!-- Start WP footer -->
  </body>
</html>