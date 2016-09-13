<?php
get_header(); ?>

<div class="container text-center footer-margin"> 
    <div class="col-sm-10 col-sm-offset-1">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/full-logo.png" class="img-responsive" />
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/top-left-page-corner.svg" class="top-page-corner" />
                    <div class="post padding-equal page-parchment"> 
                        <h2 class="page-title"><?php wp_title( ' ' ); ?></h2> 
                        <?php the_content(); ?> 
                    </div>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/bottom-right-page-corner.svg" class="pull-right bottom-page-corner" />
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