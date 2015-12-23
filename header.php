<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Alethei Creation">
<meta name="keywords" content="Aletheia Creation, Seattle, WA, Jewelry, Necklaces, Bracelets, Earings">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Aletheia Creation</title>

    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap-social.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/css/flexslider.css" rel="stylesheet" type="text/css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
 <script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider({
		animation: "fade",
		slideshow: false,
		smoothHeight: true
	}); // call flexslider function
  });
</script>    
<!-- Start WP head -->
<?php wp_enqueue_script( 'jquery' ); ?>      
<?php wp_head(); ?>
<!-- End wp head -->
  </head>
<body <?php body_class(); ?>>
    
<!-- Begin Header -->
<div id="header-container">
<div id="header">
<!-- Begin logo -->
<div id="logo">
<a class="navbar-brand" href="<?php echo get_settings('home'); ?>" title="Link to Aletheia Creation"><img id="mainLogo" src="<?php bloginfo('template_directory'); ?>/images/aletheia_creation.jpg" width="230" height="130" />
</a>
</div> <!-- end logo -->
<!-- begin utility menu -->
<div id="utility-header">
<!-- Begin social icons -->
<div id="social-header">
<a href="#"><i class="fa fa-envelope-o fa-3x"></i></a>
<a href="#" target="_blank"><i class="fa fa-facebook-square fa-3x"></i></a>
<a href="#" target="_blank"><i class="fa fa-instagram fa-3x"></i></a>
</div> <!-- end social icon -->
<div id="text-header">
<p>Mother Earth's Jewelry | Seattle, WA</p>
</div>
</div>    
</div> <!-- end header -->
</div> <!-- end header-container -->    
<!-- End Header -->    
<nav class="navbar navbar-default" role="navigation"> 
<!-- Brand and toggle get grouped for better mobile display --> 
  <div class="navbar-header"> 
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"> 
      <span class="sr-only">Toggle navigation</span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
      <span class="icon-bar"></span> 
    </button> 
  </div> 
  <!-- Collect the nav links, forms, and other content for toggling --> 
  <div class="collapse navbar-collapse navbar-ex1-collapse"> 
      
    <?php wp_nav_menu(
									array( 
										'theme_location' => 'main_menu',
										'menu'           => 'Main',
										'depth'          => '2',
										'container'      => 'false', 
										'container_id'   => '',
										'container_class'=> '',
										'menu_id'        => '',
										'menu_class'     => 'nav navbar-nav',
										
										'fallback_cb'	 => 'DD_Walker::fallback',
										'walker'         => new DD_Walker(),
										));
								?>  
  
      <!-- <ul class="nav navbar-nav" id="">  <li ><a href="#">Home</a></li> 
      <li><a href="#">About</a></li> 
    <li><a href="#">Necklaces</a></li>
        <li><a href="#">Earrings</a></li>
        <li><a href="#">Bracelets</a></li>
        <li><a href="#">Jewelry Displays</a></li>
      <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">FAQ <b class="caret"></b></a> 
        <ul class="dropdown-menu"> 
          <li><a href="#">Policies</a></li> 
          <li><a href="#">Jewelry Care</a></li> 
        </ul> 
      </li> 
        <li><a href="#">Contact</a></li>  </ul> -->
   
  </div>
</nav>  

<div class="container" id="middle">   
