<!doctype html>
<html style="height:100%;" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="keywords" content="pinegrow, blocks, bootstrap" />
        <meta name="description" content="My new website" />
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/ico/favicon.png">
        <!-- Core CSS -->
        <script>
        try {
            Typekit.load({
                async: true
            });
        }
        catch (e) {}
    </script>
        <!-- Style Library -->
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
        <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body>
        <header id="header-2" class="soft-scroll header-2">
            <nav class="main-nav navbar navbar-default navbar-fixed-bottom">
                <div class="container navbar-container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                            <span class="sr-only"><?php _e( 'Toggle navigation', 'mythicgazetteer' ); ?></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span> 
                            <span class="icon-bar"></span>
                        </button>
                        <a href="<?php echo esc_url( home_url() ); ?>"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <!-- /.navbar-collapse -->
                    <div class="collapse navbar-collapse" id="nav1">
                        <?php wp_nav_menu( array(
                                'menu' => 'primary',
                                'menu_class' => 'nav navbar-nav',
                                'container' => '',
                                'depth' => '2',
                                'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
                                'walker' => new wp_bootstrap_navwalker()
                        ) ); ?>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </nav>
        </header>
        <div class="content-block blog-1">