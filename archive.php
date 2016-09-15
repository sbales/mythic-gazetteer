<?php
get_header(); ?>

<div class="container text-center footer-margin"> 
    <?php if ( have_posts() ) : ?>
        <div class="col-sm-10 col-md-10 col-sm-offset-1 col-md-offset-1 mobile-footer">
            <div class="col-md-3 col-sm-3">
                <div> 
                    <h6 class="side-bar-h6"><?php _e( 'Categories', 'mythic_gazetteer' ); ?></h6> 
                    <?php wp_list_categories( array(
                            'orderby' => 'name',
                            'order' => 'ASC',
                            'style' => 'none'
                    ) ); ?> 
                </div>                                                          
            </div>
            <div class="col-md-9 col-sm-9">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div> 
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/brand/Art-Deco-Parchment-Line.svg" class="post-lines" /> 
                        <div class="blog-1 post"> 
                            <h4 class="h4 h4-index"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h4> 
                            <?php the_excerpt( ); ?> 
                            <div class=""> 
                                <p class="small text-muted text-uppercase"><?php _e( 'POSTED BY', 'mythic_gazetteer' ); ?> <?php the_author_link(); ?> <?php _e( 'ON', 'mythic_gazetteer' ); ?> <?php the_date(); ?></p> 
                            </div>                                         
                        </div>                                     
                    </div>
                <?php endwhile; ?>
                <?php wp_bootstrap_pagination( array(
                        'previous_string' => '<span class="fa fa-angle-double-left"></span>',
                        'next_string' => '<span class="fa fa-angle-double-right"></span>'
                ) ); ?>                              
            </div>                                                                           
        </div>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'mythic_gazetteer' ); ?></p>
    <?php endif; ?>                  
    <!-- /.col-sm-10 -->                 
</div>             
<!-- /.container -->                         

<?php get_footer(); ?>