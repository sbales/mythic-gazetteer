<?php
/*
 Template Name: Commissions
 */
?>
<?php
get_header(); ?>

<div class="container text-center footer-margin"> 
    <div class="col-sm-10 col-sm-offset-1"> 
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/full-logo.png" class="img-responsive" /> 
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="padding-equal"> 
                    <div class="row services-row"> 
                        <h2 class="page-title"><?php wp_title( ' ' ); ?></h2> 
                    <div class="col-md-4"> 
                            <?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'service_1_icon' ) );
if( $image_attributes ) : ?>
                            <img src="<?php echo $image_attributes[0]; ?>" class="img-responsive commission-icon" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
                        <?php endif; ?> 
                        <h4 class="h4-service"><?php echo get_theme_mod( 'service_1_title', __( 'Digital Design', 'mythic_gazetteer' ) ); ?></h4> 
                        <p><?php echo get_theme_mod( 'service_1_description', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.', 'mythic_gazetteer' ) ); ?></p> 
                        </div>                                     
                    <div class="col-md-4"> 
                            <?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'service_2_icon' ) );
if( $image_attributes ) : ?>
                            <img src="<?php echo $image_attributes[0]; ?>" class="img-responsive commission-icon" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
                        <?php endif; ?> 
                        <h4 class="h4-service"><?php echo get_theme_mod( 'service_2_title', __( 'Digital Design', 'mythic_gazetteer' ) ); ?></h4> 
                        <p><?php echo get_theme_mod( 'service_2_description', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.', 'mythic_gazetteer' ) ); ?></p> 
                        </div>                                     
                    <div class="col-md-4"> 
                            <?php $image_attributes = wp_get_attachment_image_src( get_theme_mod( 'service_3_icon' ) );
if( $image_attributes ) : ?>
                            <img src="<?php echo $image_attributes[0]; ?>" class="img-responsive commission-icon" width="<?php echo $image_attributes[1]; ?>" height="<?php echo $image_attributes[2]; ?>" />
                        <?php endif; ?> 
                        <h4 class="h4-service"><?php echo get_theme_mod( 'service_3_title' ); ?></h4> 
                        <p><?php echo get_theme_mod( 'service_3_description', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a lorem quis neque interdum consequat ut sed sem.', 'mythic_gazetteer' ) ); ?></p> 
                        </div>                                     
                    </div>                                 
                    <div class="blog-1 post"> 
                        <h3 class="h3-previouswork"><?php _e( 'Previous Work', 'mythic_gazetteer' ); ?></h3> 
                        <?php echo get_post_gallery(); ?> 
                    </div>                                 
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'mythic_gazetteer' ); ?></p>
        <?php endif; ?> 
    </div>                 
    <!-- /.col-sm-10 -->                 
</div>             
<!-- /.container -->                         

<?php get_footer(); ?>