<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package BootstrapWP-3d
 */

get_header(); ?>

<div class=""><!-- add "container" class to set max-width -->
	<div class="row">

        <div id="primary" class="">
            <main id="main" class="site-main" role="main">
    
                <section class="error-404 not-found">
                    <header class="page-header">
                        <h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'bootrapwp-3d' ); ?></h1>
                    </header><!-- .page-header -->
    
                    <div class="page-content">
                        <p><?php esc_html_e( 'Try searching for the content you\'re looking for', 'bootrapwp-3d' ); ?></p>
    
                        <?php
                            get_search_form();
 			            ?>
                    </div><!-- .page-content -->
                </section><!-- .error-404 -->
    
            </main><!-- #main -->
        </div><!-- #primary -->
	</div><!-- .row -->
</div><!-- (.container) -->

<?php
get_footer();
?>
