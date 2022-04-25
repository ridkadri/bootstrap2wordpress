<?php 
/**
 * The template for displaying 404 Not Found Page.
 * 
 * @link https://developer.wordpress.org/themes/basics/template-heirachy/
 * 
 * @package b2w
 * @since 2.0
 */


    get_header(); 
    get_template_part('template-parts/banner', 'title');
?>

<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0 overflow-hidden">

                <div class="image-404">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/404.png" alt="404" class="img-fluid">
                </div>

                <h3 class="text-center"><?php esc_html_e('Sorry, this page cannot be found.', 'b2w'); ?></h3>

                <div class="button-box text-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                    <?php esc_html_e('Back to Homepage', 'b2w'); ?></a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
get_footer();