<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package BootstrapWP-3d
 */

get_header(); ?>
<div class="container-fluid"><!-- add "container" class to set max-width -->



           
                <?php
                while ( have_posts() ) : the_post();?>
	<header class="entry-header row">
	<div class="container">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	</header><!-- .entry-header -->


		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootrapwp-3d' ),
				'after'  => '</div>',
			) );
		?>


	
    <?php
                endwhile; // End of the loop.
                ?>
    
           
  
    
    
    

</div><!-- (.container) -->

<?php
     // get_sidebar();
     get_footer(); 
?>
