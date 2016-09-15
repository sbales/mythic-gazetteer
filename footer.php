
        </div>         
        <footer class="bg-transparent copyright-bar">
            <div class="row footer-row">
                <div class="col-md-4 col-sm-4 col-xs-5"> 
                    <a href="http://www.steviebales.com" target="_blank"><?php _e( '© Stevie Bales', 'mythic_gazetteer' ); ?></a> 
                </div>
                <div class="col-md-4 pull-left col-sm-4 col-xs-7">
                    <ul class="social social-light socialmedia-list">
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_facebook' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_facebook', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-facebook"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_twitter' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_twitter', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-twitter"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_google' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_google', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-google-plus"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_pinterest' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_pinterest', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-pinterest"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_behance' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_behance', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-behance"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'blocks_footer_1_3_dribbble' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'blocks_footer_1_3_dribbble', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-dribbble"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                    <!-- /.social -->
                </div>
                <div class="col-md-4 col-sm-4 hidden-xs">
                    <p class="address-bold-line align-right"><?php echo get_theme_mod( 'blocks_footer_1_3_title', 'Proudy Powered with <i class="fa fa fa-wordpress"></i> Wordpress!' ); ?></p>
                </div>
            </div>
            <!-- /.container -->
        </footer>                                                      
        <?php wp_footer(); ?>
    </body>     
</html>