<?php
get_header(); ?>

<div class="container footer-margin">
    <?php if ( have_posts() ) : ?>
        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 col-xs-12">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="post single-blogpost">
                    <?php echo wp_get_attachment_image( get_the_ID(), null, null, array(
                            'class' => 'img-responsive post-image'
                    ) ) ?> 
                    <h4><a href="#" class="blog-title"><?php the_title(); ?></a></h4>
                    <?php the_content(); ?>
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