<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Olas tema</title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        
        <?php wp_head(); ?>
    </head>
    <body>

        <header>
            <div id="site-branding">
                
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <p class="site-description"><?php bloginfo('description'); ?></p>
                
            </div>
        </header> 
        
        <nav id="main-menu">
        
            <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
        
        </nav>