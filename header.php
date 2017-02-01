<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapWP-3d
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="https://use.typekit.net/evo7fmh.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<?php wp_head(); ?>



<script>
		jQuery( window ).scroll( function () {
			jQuery( '.ctaShell .icon' ).each( function () {
				var imagePos = jQuery( this ).offset().top;

				var topOfWindow = $( window ).scrollTop();
				if ( imagePos < topOfWindow + 600 ) {
					jQuery( this ).addClass( "hatch" );
				}
			} );
			jQuery( '.carriers' ).each( function () {
				var imagePos = jQuery( this ).offset().top;

				var topOfWindow = $( window ).scrollTop();
				if ( imagePos < topOfWindow + 600 ) {
					jQuery( this ).addClass( "slideLeft" );
				}
			} );
			
			
			
			
		} );
	
	</script>
	<?PHP if (is_page(13)) { ?>
	<script>
	//smooth scrolling
	jQuery(function($) {
  jQuery('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});/**/
	</script>
	<?PHP } ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#main">
<?php esc_html_e( 'Skip to content', 'bootrapwp-3d' ); ?>
</a>
<header id="masthead" class="site-header clearfix">
  <div id="header" class="clearfix">
    <div class="logo col-md-2"><a class="logoa" href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logoJustShipIt.jpg" alt="<?php bloginfo( 'name' ); ?>"/></a> </div>
    <div class="mainNav col-md-8">
      <div class="navbar navbar-default col-md-12" role="navigation">
      <!--  <div class="container-fluid">-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <!-- .navbar-header -->
          
          <?php
                    wp_nav_menu( array(
                        'menu'              => 'primary',
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                		'container_id'      => 'bs-example-navbar-collapse-1',
                        'menu_class'        => 'nav navbar-nav',
                        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                        'walker'            => new wp_bootstrap_navwalker())
                    );
                ?>
      <!--  </div>-->
      </div>
    </div>
    <div id="headerPhone" class="col-md-2">
    	
    	<a href="tel:+19043129927" class="contactPhone"><i class="fa fa-fw" aria-hidden="true" title="Call Just Ship It"></i>904-312-9927</a>
    	
    </div>
  </div>
  <?PHP if (is_front_page()) :?>
  <div id="sliderContainer"> <?PHP echo do_shortcode(' [smartslider3 slider=1]'); ?> 
  
  
  </div>
  <?PHP endif;?>
</header>
<!-- #masthead -->

