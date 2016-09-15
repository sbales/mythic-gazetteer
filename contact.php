<?php
/*
 Template Name: Contact Page
 */
?>
<?php
get_header(); ?>

<div class="container text-center footer-margin"> 
    <?php if ( have_posts() ) : ?>
        <div class="col-sm-10 col-sm-offset-1"> 
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/full-logo.png" class="img-responsive" alt="mythic gazetteer logo" width="100%" /> 
            <?php while ( have_posts() ) : the_post(); ?>
                <div> 
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/Art-Deco-Parchment-Line.svg" class="post-lines" />
                    <div class="blog-1 post">
                        <h2 class="page-title"><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <?php if ( is_active_sidebar( 'blocks_contact_1_form' ) ) : ?>
                            <div id="contact" class="form-container">
                                <?php dynamic_sidebar( 'blocks_contact_1_form' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>                                 
                </div>
            <?php endwhile; ?> 
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'mythic_gazetteer' ); ?></p>
    <?php endif; ?> 
    <!-- /.col-sm-10 -->                 
</div>             
<!-- /.container -->                         

<?php get_footer(); ?>