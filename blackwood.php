<?php
/*
 Template Name: Blackwood
 */
?>
<?php
get_header(); ?>

            <div class="bkgrd-div game-bkgrd">
</div>
            <div class="container text-center footer-margin"> 
                <div class="col-sm-10 col-sm-offset-1">
                    <?php the_post_thumbnail( null, array(
                            'class' => 'img-responsive'
                    ) ); ?>
                    <?php if ( have_posts() ) : ?>
                        <?php while ( have_posts() ) : the_post(); ?>
                            <div class="padding-equal game-page-bkgrd">
                                <h2 class="page-title white-text white"><?php wp_title( ' ' ); ?></h2>
                                <?php if ( is_active_sidebar( 'backwood_image_gallery_1' ) ) : ?>
                                    <div class="image-slider">
                                        <?php dynamic_sidebar( 'backwood_image_gallery_1' ); ?>
                                    </div>
                                <?php endif; ?>
                                <div class="textblock-white">
                                    <?php the_content(); ?>
                                </div>                                 

                                <?php _e( '#f5f5f5', 'mythic_gazetteer' ); ?>
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