
        </div>
        <div class="copyright-bar bg-transparent">
            <div class="container">
                <?php if( get_theme_mod( 'blocks_copyright_1_text_left' ) ) : ?>
                    <a class="pull-left small" href="http://www.steviebales.com"><?php echo get_theme_mod( 'blocks_copyright_1_text_left', __( '© Stevie Bales.', 'mythicgazetteer' ) ); ?></a>
                <?php endif; ?>
                <?php if( get_theme_mod( 'blocks_copyright_1_text_right' ) ) : ?>
                    <p class="pull-right small"><?php echo get_theme_mod( 'blocks_copyright_1_text_right', 'Proudly made with <i class="fa fa-heart pomegranate"></i> Wordpress' ); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>