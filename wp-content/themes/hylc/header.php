<!doctype html>

<html <?php language_attributes(); ?> class="no-js">

    <head>
        <meta charset="utf-8">

        <?php // force Internet Explorer to use the latest rendering engine available ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php wp_title(''); ?></title>

        <meta name="MobileOptimized" content="320">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://use.typekit.net/nqr0tjw.css">


        <?php // wordpress head functions ?>
        <?php wp_head(); ?>
        <?php // end of wordpress head ?>

    </head>

    <body <?php echo body_class(); ?>>
    
    
    <?php if ( is_home() ) {
        $pageID = get_option( 'page_for_posts' );
    } else {
        $pageID = get_the_ID();
    } ?>


    <div class="page-wrapper nav_content">

    <?php if(get_field('alert_text', 'options') && is_front_page()): ?>
    <div class="alert-message">
        <div class="container">
            <div class="alert-message__content">
        <?php the_field('alert_text', 'options'); ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="header__container">
        
        <?php if(is_single()): ?>
        <div class="single-header">
            
            <?php sr_template_part( 'layouts/global_header', array('')); ?>        


        </div>

        <?php else: ?>
        <div class="outer-header">
            <?php $pageHeaderImage = get_field('page_image', $pageID); ?>
            
            <div class="header" style="background-image: linear-gradient( rgba(0,0,0,.7), rgba(0,0,0,.7) ), url('<?php echo $pageHeaderImage['url']; ?>');">
                
                <?php sr_template_part( 'layouts/global_header', array('')); ?>
                <div class="header-content">
                    <div class="header-content__container">
                    
                    <?php $pageTitle = get_field( 'page_title', $pageID ); ?>
                    <?php $pageIntro = get_field( 'page_intro', $pageID ); ?>

                    
                    <?php if($pageTitle): ?>
                    <h1><?php echo $pageTitle?></h1>
                    <?php endif; ?>
                   

                    <?php 
                        // Output the pageIntro value only if it
                        echo isset($pageIntro) ? $pageIntro : ''; ?>
                    
                    </div>
                </div>

            </div>            
        </div>

        <?php endif; ?>
    </div>
    


        