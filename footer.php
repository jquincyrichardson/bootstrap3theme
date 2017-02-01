<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BootstrapWP-3d
 */

?>



	<footer id="footer" class="site-footer container-fluid" role="contentinfo">
    
    	
    
	<!-- add "container" class to set max-width -->
	<div class="row">
		<div class="col-md-6 col-md-offset-1">
	<div class="row">
			<div class="col-xs-12 col-sm-6" id="footerAddress">
				<p class="footerHeading">Just Ship It</p>
				<p>8011 Merrill Rd<br> Jacksonville, FL 32277</p>
				<p><a href="tel:1+9043129927" title="Call Us">904-312-9927</a>
				</p>
				<div class="row" id="footerSocialMedia">
					<a href="https://www.facebook.com/justshipitjax/" title="Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
					<!--<a href="http://twitter.com/" title="Twitter" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
					<a href="http://plus.google.com/" title="Google+" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>-->
				</div>
				<!-- #footerSocialMedia -->
				<div class="footerNav"><a href="/privacy-policy">Privacy&nbsp;Policy</a> | <a href="/privacy-policy">Terms&nbsp;and&nbsp;Conditions</a></div>
			</div>
			<!-- #footerAddress -->
			<div class="col-xs-12 col-sm-6" id="footerMap">
				<p class="footerHeading">&nbsp;</p>
				<!-- GOOGLE MAP -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3442.9096173143753!2d-81.56406908487756!3d30.353518481771022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e5b3822ed9d3a5%3A0x9ea505fd39e051cf!2s8011+Merrill+Rd%2C+Jacksonville%2C+FL+32277!5e0!3m2!1sen!2sus!4v1481660309508" width="100%" height="145" frameborder="0" style="border:0" allowfullscreen></iframe>
				<!-- END GOOGLE MAP -->
			</div>
			<!-- #footerMap -->
		</div></div>
		<div class="col-md-5">

			<div class="col-xs-12 col-xs-offset-0 col-md-8 col-md-offset-2" id="footerContact">
				<p class="footerHeading">send us a message</p>
				<?php echo do_shortcode('[contact-form-7 id="4" title="Footer Contact Form"]'); ?>
			</div>
			<!-- #footerContact -->

		</div>


	</div>
	<div class="row websiteCredit">
		
		<a href="http://3ddigitalsolutions.com" target="_blank" title="Website Design by 3D Digital Solutions"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/3D_LOGO.png" alt="Website Design by 3D Digital Solutions"/></a>
	</div>
	<!-- .row -->

        
	</footer><!-- #colophon -->
    
    <!-- BEGIN GOOGLE ANALYTICS -->
    
    <!-- END GOOGLE ANALYTICS -->
    
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
