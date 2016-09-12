
        </div>
        <div class="copyright-bar bg-transparent">
            <div class="row footer-row">
                <div class="col-md-4 col-sm-4 outside-footer col-xs-5">
                    <a class="pull-left small" href="http://www.steviebales.com"><?php _e( '© Theme by Stevie Bales.', 'mythic_gazetteer' ); ?></a> 
                </div>
                <div class="col-md-4 col-sm-4 col-xs-8">
                    <ul class="social social-light socialmedia-list">
                        <?php if ( get_theme_mod( 'footer_info_bottom_facebook' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_info_bottom_facebook', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-facebook"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'footer_info_bottom_twitter' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_info_bottom_twitter', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-twitter"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'footer_info_bottom_google' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_info_bottom_google', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-google-plus"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'footer_info_bottom_behance' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_info_bottom_behance', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-behance"></i></a>
                            </li>
                        <?php endif; ?>
                        <?php if ( get_theme_mod( 'footer_info_bottom_dribble' ) ) : ?>
                            <li>
                                <a href="<?php echo get_theme_mod( 'footer_info_bottom_dribble', __( '#', 'mythic_gazetteer' ) ); ?>"><i class="fa fa-2x fa-dribbble"></i></a>
                            </li>
                        <?php endif; ?>
                    </ul>                     
                </div>
                <div class="col-md-4 col-sm-4 col-xs-4 outside-footer hidden-xs">
                    <?php if( get_theme_mod( 'blocks_copyright_1_text_right' ) ) : ?>
                        <p class="pull-right small"><?php echo get_theme_mod( 'blocks_copyright_1_text_right', __( 'Powered with Wordpress', 'mythic_gazetteer' ) ); ?></p>
                    <?php endif; ?> 
                </div>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>