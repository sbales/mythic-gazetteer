<?php
get_header(); ?>

<div class="container text-center footer-margin"> 
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/full-logo.png" class="img-responsive" />
    <?php if ( have_posts() ) : ?>
        <div class="col-sm-10 col-sm-offset-1">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post">
                    <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                    <?php the_excerpt( ); ?>
                    <div class=""> 
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="btn-sm"><?php _e( 'Read More', 'mythicgazetteer' ); ?></a>
                        <p class="small text-muted text-uppercase"><?php _e( 'POSTED BY', 'mythicgazetteer' ); ?> <?php the_author_link(); ?> <?php _e( 'IN', 'mythicgazetteer' ); ?> <?php blocks_the_category() ?> <?php _e( 'ON', 'mythicgazetteer' ); ?> <?php the_date(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_bootstrap_pagination( array(
                    'previous_string' => '<span class="fa fa-angle-double-left"></span>',
                    'next_string' => '<span class="fa fa-angle-double-right"></span>'
            ) ); ?>
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'mythicgazetteer' ); ?></p>
    <?php endif; ?>
    <!-- /.col-sm-10 -->
</div>
<!-- /.container -->            

<?php get_footer(); ?>