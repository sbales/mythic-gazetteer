<?php
get_header(); ?>

<div class="container text-center"> 
    <?php if ( have_posts() ) : ?>
        <div class="col-sm-10 col-sm-offset-1">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post">
                    <h3><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h3>
                    <?php the_content(); ?>
                    <div class=""> 
                        <p class="small text-muted text-uppercase"><?php _e( 'POSTED BY', 'mythicgazetteer' ); ?> <?php the_author_link(); ?> <?php _e( 'IN', 'mythicgazetteer' ); ?> <?php blocks_the_category() ?> <?php _e( 'ON', 'mythicgazetteer' ); ?> <?php the_date(); ?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'mythicgazetteer' ); ?></p>
    <?php endif; ?>
    <!-- /.col-sm-10 -->
</div>
<!-- /.container -->            

<?php get_footer(); ?>