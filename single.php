<?php
get_header(); ?>

<div class="container footer-margin">
    <?php if ( is_active_sidebar( 'blog_sidebar' ) ) : ?>
        <div class="col-md-2 hidden-xs col-sm-2" id="blog-sidebar">
            <?php dynamic_sidebar( 'blog_sidebar' ); ?>
        </div>
    <?php endif; ?>
    <?php if ( have_posts() ) : ?>
        <div class="col-sm-10 col-md-10">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="single-blogpost">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/blog-post-lines.svg" class="blog-post-lines img-responsive" />
                    <div class="blog-1 post">
                        <div class="blog-featureimg blog-imagediv">
                            <?php the_post_thumbnail( null, array(
                                    'class' => 'post-image'
                            ) ); ?>
                        </div>
                        <h4 class="bolg-post-title"><a href="<?php echo esc_url( get_permalink() ); ?>" class="blog-title"><?php the_title(); ?></a></h4>
                        <p><?php the_date(); ?></p>
                        <?php the_content(); ?>
                        <div class="">
                            <p class="small text-muted text-uppercase"><?php _e( 'POSTED BY', 'mythic_gazetteer' ); ?> <?php the_author_link(); ?></p>
                        </div>
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