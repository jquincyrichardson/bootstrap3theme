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

<div class="container-fluid"><!-- add "container" class to set max-width mstr edit -->
	<div class="row">

    
                <?php
                while ( have_posts() ) : the_post();
    
                    get_template_part( 'template-parts/content', 'page' );
    
                
    
                endwhile; // End of the loop.
                ?>
    
          
    </div><!-- .row -->
</div><!-- (.container) -->

<?php
     // get_sidebar();
     get_footer(); 
?>
